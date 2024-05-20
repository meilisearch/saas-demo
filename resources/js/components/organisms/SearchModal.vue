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
                <ResultsProvider>
                    <div class="font-semibold mb-4 text-indigo-600">Companies</div>
                    <CompanySearchResults class="pb-6 border-b mb-4" />
                </ResultsProvider>
                <div class="font-semibold mb-4 text-indigo-600">Contacts</div>
                <ContactSearchResults />
            </div>
        </SearchModalContainer>
    </VueFinalModal>
</template>
