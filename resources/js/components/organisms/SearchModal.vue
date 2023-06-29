<script setup lang="ts">
import { VueFinalModal } from 'vue-final-modal'
import ModalBox from './ModalBox.vue';
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
    class="flex justify-center items-center"
      content-class="relative rounded-lg dark:bg-gray-900"
      overlay-transition="vfm-fade"
      :focus-trap="{ initialFocus: '#modalInputSearch' }"
    >
        <ModalBox>
            <template #searchbar>
                <ModalSearchBar placeholder='Search'/>
            </template>
            <template #results>
                <div class="max-w-[30%] min-w-[30%]">
                    <CompanySearchResults />
                </div>
                <SearchResults index-name="contacts">
                    <template #default>
                        <ContactSearchResults/>
                    </template>
                </SearchResults>
                <SearchResults index-name="deals">
                    <template #default>
                        <DealSearchResults/>
                    </template>
                </SearchResults>
            </template>
        </ModalBox>
    </VueFinalModal>
</template>
