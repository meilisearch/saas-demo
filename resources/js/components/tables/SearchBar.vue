<script lang="ts" setup>
import { AisSearchBox } from 'vue-instantsearch/vue3/es'

const props = defineProps<{
  placeholder: string
}>()
</script>

<template>
  <AisSearchBox>
    <template #default="{ currentRefinement, refine }">
      <div class="relative">
        <input
          :value="currentRefinement"
          class="h-10 text-sm placeholder-gray-300 border-gray-200 rounded-lg pe-10 focus:z-10"
          :placeholder="props.placeholder"
          type="text"
          @input="refine($event.currentTarget.value)"
        >
        <span class="absolute inset-y-0 p-2 text-gray-400 rounded-r-lg end-0">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="w-6 h-6"
          >
            <path
              fill-rule="evenodd"
              d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
              clip-rule="evenodd"
            />
          </svg>

        </span>
      </div>
    </template>
  </AisSearchBox>
</template>
