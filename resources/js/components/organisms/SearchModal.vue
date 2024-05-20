<script setup lang="ts">
import { VueFinalModal } from 'vue-final-modal'
import SearchModalContainer from './SearchModalContainer.vue';
import ModalSearchBar from '../organisms/ModalSearchBar.vue'
import SearchResults from './SearchResults.vue'
import CompanySearchResults from './CompanySearchResults.vue'
import ContactSearchResults from './ContactSearchResults.vue'
import DealSearchResults from './DealSearchResults.vue'

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
            <ContactSearchResults />
            <!-- <CompanySearchResults /> -->
            <template #results>
                <!-- <DealSearchResults /> -->
                <!-- <div class="max-w-[30%] min-w-[30%]">
                </div>
                <SearchResults index-name="contacts">
                    <template #default>
                    </template>
</SearchResults>
<SearchResults index-name="deals">
    <template #default>
                    </template>
</SearchResults> -->
            </template>
        </SearchModalContainer>
    </VueFinalModal>
</template>
