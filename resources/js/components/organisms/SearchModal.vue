<script setup lang="ts">
import { AisSearchBox } from 'vue-instantsearch/vue3/es'

import SearchInput from '../atoms/SearchInput.vue'
import SearchIcon from '../atoms/SearchIcon.vue'
import SearchResetButton from '../atoms/SearchResetButton.vue'
import SearchModalLayout from './SearchModalLayout.vue';
import CompanySearchResults from './CompanySearchResults.vue'
import ContactSearchResults from './ContactSearchResults.vue'
import DealSearchResults from './DealSearchResults.vue'
import ResultsProvider from '../ResultsProvider.vue'
</script>

<template>
  <div class="mx-3">
    <SearchModalLayout>
      <template #searchbar>
        <AisSearchBox>
          <template #default="{ currentRefinement, refine }">
            <form class="relative">
              <SearchInput
                :value="currentRefinement"
                autofocus
                @input="refine($event.currentTarget.value)"
              />
              <SearchIcon />
              <SearchResetButton
                :hidden="!currentRefinement"
                @click="refine('')"
              />
            </form>
          </template>
        </AisSearchBox>
      </template>

      <div class="relative">
        <div class="font-semibold mb-4 text-indigo-600">
          Companies
        </div>
        <ResultsProvider class="mb-4">
          <CompanySearchResults class="" />
          <template #empty>
            <div class="text-gray-400 text-sm">
              No companies found.
            </div>
          </template>
        </ResultsProvider>
        <div class="font-semibold mb-4 text-indigo-600">
          Contacts
        </div>
        <ResultsProvider class="mb-4">
          <ContactSearchResults />
          <template #empty>
            <div class="text-gray-400 text-sm">
              No contacts found.
            </div>
          </template>
        </ResultsProvider>
        <div class="font-semibold mb-4 text-indigo-600">
          Deals
        </div>
        <ResultsProvider>
          <DealSearchResults />
          <template #empty>
            <div class="text-gray-400 text-sm">
              No deals found.
            </div>
          </template>
        </ResultsProvider>
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
