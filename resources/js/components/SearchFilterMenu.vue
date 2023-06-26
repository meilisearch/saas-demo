<script lang="ts" setup>
import { AisMenuSelect } from 'vue-instantsearch/vue3/es';

const props = defineProps<{
  attribute: string;
}>()

const capitalize = (str: string) => {
  return str.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ')
}
</script>

<template>
  <AisMenuSelect :attribute="props.attribute">
    <template v-slot="{ items, canRefine, refine, sendEvent }">
      <select :disabled="!canRefine" @change="refine($event.currentTarget.value)"
        class="text-gray-700 border-gray-300 rounded-lg sm:text-sm">
        <option value="">All Deals</option>
        <option v-for="item in items" :key="item.value" :value="item.value" :selected="item.isRefined">
          {{ capitalize(item.label) }} ({{ item.count }})
        </option>
      </select>
    </template>
  </AisMenuSelect>
</template>
