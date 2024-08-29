<script setup lang="ts">
import { computed, ref, watch } from 'vue'
import { Meilisearch } from 'meilisearch'
import type { SearchResponse } from 'meilisearch'

import SearchInput from '../ui/SearchInput.vue'
import SearchIcon from '../atoms/SearchIcon.vue'
import SearchResetButton from '../atoms/SearchResetButton.vue'
import CompanyCard from './CompanyCard.vue'
import ContactCard from './ContactCard.vue'
import DealCard from './DealCard.vue'
import SearchModalLayout from './SearchModalLayout.vue'
import TopResultCard from './TopResultCard.vue'

const props = defineProps<{
  apiKey: string,
}>()

// Meilisearch client
const meilisearch = new Meilisearch({
  host: import.meta.env.VITE_MEILISEARCH_HOST,
  apiKey: props.apiKey,
})

// Search
const results = ref<SearchResponse|null>(null)
const search = async (query: string) => {
  console.log('search', query)

  results.value = await meilisearch.multiSearch({
    federation: {},
    queries: ['companies', 'contacts', 'deals'].map(indexName => ({
      indexUid: indexName,
      q: query,
      attributesToHighlight: ['name'],
    })),
  })

  console.log('results', results.value)
}

// Query
const query = ref('')
watch(query, (value) => {
  if (value) {
    search(value)
  } else {
    results.value = null
  }
})

// Results
const topResult = computed(() => {
  if (results.value) return results.value.hits[0]
  return null
})
const remainingResults = computed(() => {
  if (results.value) return results.value.hits.slice(1)
  return []
})
</script>

<template>
  <div class="mx-3">
    <SearchModalLayout>
      <template #searchbar>
        <form class="relative">
          <SearchInput
            :value="query"
            placeholder="Search for companies, contacts or deals"
            autofocus
            @input="query = $event.currentTarget.value"
          />
          <SearchIcon />
          <SearchResetButton
            :hidden="!query"
            @click="query = ''"
          />
        </form>
      </template>

      <div
        v-show="query"
        class="space-y-4"
      >
        <template v-if="topResult">
          <div class="text-xs font-semibold tracking-wide text-gray-500 uppercase">
            Top result
          </div>
          <TopResultCard
            :hit="topResult"
            class="max-w-sm"
          />
          <template v-if="remainingResults.length">
            <div class="text-xs font-semibold tracking-wide text-gray-500 uppercase">
              Other results
            </div>
            <ul class="space-y-3">
              <li
                v-for="hit in remainingResults"
                :key="`${hit._federation?.indexUid}-${hit.id}`"
              >
                <CompanyCard
                  v-if="hit._federation?.indexUid === 'companies'"
                  :company-name="hit.name"
                  :company-logo-url="`https://logo.clearbit.com/${hit.url}`"
                  :contact-count="hit.number_of_contacts"
                  :href="`/companies/${hit.id}`"
                />
                <ContactCard
                  v-else-if="hit._federation?.indexUid === 'contacts'"
                  :contact-avatar-url="`https://api.dicebear.com/6.x/initials/svg?seed=${hit.name}`"
                  :contact-name="hit.name"
                  :contact-email="hit.email"
                  :href="`/contacts/${hit.id}`"
                />
                <DealCard
                  v-else-if="hit._federation?.indexUid === 'deals'"
                  :company-name="hit.company_name"
                  :deal-status="hit.status"
                  :deal-amount="hit.value"
                  :href="`/deals/${hit.id}`"
                />
              </li>
            </ul>
          </template>
        </template>
        <template v-else>
          <div class="text-center text-gray-400">
            No results found for <em>{{ query }}</em>
          </div>
        </template>
      </div>

      <div
        v-show="!query"
        class="flex flex-col justify-center h-full"
      >
        <img
          src="../../../assets/loading-illustration.svg"
          alt="Loading illustration"
          class="w-32 mx-auto"
        >
        <div class="mt-10 text-center text-gray-300">
          Search results will appear here.
        </div>
      </div>
    </SearchModalLayout>
  </div>
</template>

<style>
#modalInputSearch::-webkit-search-cancel-button {
  appearance: none;
}

button[type="reset"][hidden] {
  display: none;
}
</style>
