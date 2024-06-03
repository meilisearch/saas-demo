<script lang="ts" setup>
import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
import NoResults from '../atoms/NoResults.vue'
import Button from '../atoms/Button.vue'
import ContactIcon from '../atoms/ContactIcon.vue'
import MailIcon from '../atoms/MailIcon.vue'
import DealSearchResultsItem from '../molecules/DealSearchResultsItem.vue'
const statusClass = (status: string) => {
  switch (status) {
    case 'won':
      return 'bg-green-100 text-green-800'
    case 'lost':
      return 'bg-red-100 text-red-800'
    case 'contacted':
      return 'bg-yellow-100 text-yellow-800'
    case 'to contact':
      return 'bg-blue-100 text-blue-800'
    default:
      return 'bg-gray-100 text-gray-800'
  }
}
</script>

<template>
  <AisIndex index-name="deals">
    <AisInfiniteHits>
      <template #default="{
        items,
        refineNext,
        isLastPage
      }">
        <ul class="space-y-3">
          <li v-for="deal, key in items" :key="key">
            <DealSearchResultsItem :href="`/deals/${deal.id}`">
              <template #company-name>
                <AisHighlight :hit="deal" attribute="company_name" />
              </template>
              <template #status>
                <span class="px-2 py-1 rounded-full text-xs tracking-tight uppercase"
                  :class="[statusClass(deal.status)]">
                  {{ deal.status }}
                </span>
              </template>
              <template #value>
                {{ new Intl.NumberFormat('en-US', {
                  style: 'currency', currency: 'USD',
                }).format(deal.value) }}
              </template>
            </DealSearchResultsItem>
          </li>
          <!-- <li class="text-center mt-4">
            <Button @click="refineNext" button-text="See more deals" :disabled="isLastPage" />
          </li> -->
        </ul>
      </template>
    </AisInfiniteHits>
    <NoResults />
  </AisIndex>
</template>
