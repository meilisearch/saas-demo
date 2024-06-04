<script lang="ts" setup>
import { AisIndex, AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
import CompanySearchResultsItem from '../molecules/CompanySearchResultsItem.vue';
const firstThreeItems = (items: any[]) => items.slice(0, 3)
</script>

<template>
  <AisIndex index-name="companies">
    <AisInfiniteHits class="w-full">
      <template #default="{
        items,
        refineNext,
        isLastPage
      }">
        <ul class="grid grid-cols-3 gap-3">
          <li v-for="company in firstThreeItems(items)" :key="company.id">
            <CompanySearchResultsItem :company-name=company.name
              :company-logo-url="`https://logo.clearbit.com/${company.url}`" :contact-count="company.number_of_contacts"
              :href="`/companies/${company.id}`">
              <template #name>
                <AisHighlight :hit="company" attribute="name" />
              </template>
            </CompanySearchResultsItem>
          </li>
        </ul>
      </template>
    </AisInfiniteHits>
    <!-- <NoResults /> -->
  </AisIndex>
</template>
