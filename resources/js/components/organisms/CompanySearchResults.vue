<script lang="ts" setup>
    import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
    import CompanySearchResultCard from '../molecules/CompanySearchResultCard.vue';
    import NoResults from '../atoms/NoResults.vue';
    import Button from '../atoms/Button.vue';
</script>

<template>
    <AisInfiniteHits>
        <template #default="{
            items,
            refineNext,
            isLastPage
        }">
            <ul>
                <li v-for="company, key in items" :key="key" class="my-2">
                    <CompanySearchResultCard :company-name=company.name :company-logo-url="`https://logo.clearbit.com/${company.url}`" :href="`/companies/${company.id}`">
                        <template #companyName>
                            <AisHighlight :hit="company" attribute="name" />
                        </template>
                        <template #associatedContactsNumber>
                            {{ company.number_of_contacts }}
                        </template>
                    </CompanySearchResultCard>
                </li>
                <li v-if="!isLastPage" class="text-center mt-4">
                    <Button @click="refineNext" button-text="Show more"/>
                </li>
            </ul>
        </template>
    </AisInfiniteHits>
    <NoResults/>
</template>
