<script lang="ts" setup>
import { AisSortBy } from 'vue-instantsearch/vue3/es'

const props = defineProps<{
  sortingOptions: {
    label: string;
    value: string;
  }[];
}>()
</script>

<template>
  <AisSortBy :items="props.sortingOptions">
    <template #default="{ items, refine }">
      <select
        id="sort-by"
        name="sort-by"
        class="text-gray-700 border-gray-300 rounded-lg sm:text-sm"
        @change="refine($event.target.value)"
      >
        <option
          v-for="(option, index) in items"
          :key="option.value"
          :value="option.value"
          :selected="index === 0"
        >
          {{ option.label }}
        </option>
      </select>
    </template>
  </AisSortBy>
</template>
