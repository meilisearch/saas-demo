<script setup lang="ts">
import { nextTick, onMounted, ref, watchEffect } from 'vue';
import { AisSearchBox } from 'vue-instantsearch/vue3/es'

import SearchInput from '../atoms/SearchInput.vue'
import SearchIcon from '../atoms/SearchIcon.vue'
import SearchResetButton from '../atoms/SearchResetButton.vue'
import SearchModalLayout from './SearchModalLayout.vue';
import CompanySearchResults from './CompanySearchResults.vue'
import ContactSearchResults from './ContactSearchResults.vue'
import DealSearchResults from './DealSearchResults.vue'

</script>

<template>
  <div class="mx-3">
    <SearchModalLayout>
      <template #searchbar>
        <AisSearchBox>
          <template #default="{ currentRefinement, refine }">
            <form class="relative">
              <SearchInput :value="currentRefinement" @input="refine($event.currentTarget.value)" autofocus />
              <SearchIcon />
              <SearchResetButton @click="refine('')" :hidden="!currentRefinement" />
            </form>
          </template>
        </AisSearchBox>
      </template>

      <div class="relative">
        <div class="font-semibold mb-4 text-indigo-600">Companies</div>
        <ResultsProvider class="mb-4">
          <CompanySearchResults class="" />
          <template #empty>
            <div class="text-gray-400 text-sm">No companies found.</div>
          </template>
        </ResultsProvider>
        <div class="font-semibold mb-4 text-indigo-600">Contacts</div>
        <ResultsProvider class="mb-4">
          <ContactSearchResults />
          <template #empty>
            <div class="text-gray-400 text-sm">No contacts found.</div>
          </template>
        </ResultsProvider>
        <div class="font-semibold mb-4 text-indigo-600">Deals</div>
        <ResultsProvider>
          <DealSearchResults />
          <template #empty>
            <div class="text-gray-400 text-sm">No deals found.</div>
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
