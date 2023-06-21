<script lang="ts" setup>
import { AisSortBy } from 'vue-instantsearch/vue3/es';

const sortingOptions = [
  { value: 'contacts:name:asc', label: 'Sort by Name' },
  { value: 'contacts:name:desc', label: 'Sort by Name (descending)' },
  { value: 'contacts:company_name:asc', label: 'Sort by Company' },
  { value: 'contacts:company_name:desc', label: 'Sort by Company (descending)' },
]
</script>

<template>
  <AisSortBy :items="sortingOptions">
    <template #default="{ items, refine }">
      <select name="sort-by" id="sort-by" class="text-gray-700 border-gray-300 rounded-lg sm:text-sm"
        @change="refine($event.target.value)">
        <option v-for="(option, index) in items" :key="option.value" :value="option.value" :selected="index === 0">
          {{ option.label }}
        </option>
      </select>
    </template>
  </AisSortBy>
</template>
