<script setup lang="ts">
import { VueFinalModal } from 'vue-final-modal'
import SearchModalContainer from './SearchModalContainer.vue';
import ModalSearchBar from '../organisms/ModalSearchBar.vue'
import SearchResults from './SearchResults.vue'
import CompanySearchResults from './CompanySearchResults.vue'
import ContactSearchResults from './ContactSearchResults.vue'
import DealSearchResults from './DealSearchResults.vue'
import ResultsProvider from '../ResultsProvider.vue'

defineProps<{
    title?: string
}>()
</script>

<template>
    <VueFinalModal :hide-overlay="false" display-directive="show" content-transition="vfm-fade"
        class="flex justify-center items-center" content-class="relative rounded-lg dark:bg-gray-900"
        overlay-transition="vfm-fade" :focus-trap="{ initialFocus: '#modalInputSearch' }">
        <SearchModalContainer>
            <template #searchbar>
                <ModalSearchBar placeholder='Search' />
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
        </SearchModalContainer>
    </VueFinalModal>
</template>
