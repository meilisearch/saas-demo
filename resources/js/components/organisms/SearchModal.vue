<script setup lang="ts">
import { nextTick, onMounted, ref } from 'vue';
import SearchModalLayout from './SearchModalLayout.vue';
import ModalSearchBar from '../organisms/ModalSearchBar.vue'
import CompanySearchResults from './CompanySearchResults.vue'
import ContactSearchResults from './ContactSearchResults.vue'
import DealSearchResults from './DealSearchResults.vue'

defineProps<{
    title?: string
}>()
</script>

<template>
  <SearchModalLayout class="mx-3">
    <template #searchbar>
      <ModalSearchBar autofocus ref="input" placeholder='Search' />
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
</template>
