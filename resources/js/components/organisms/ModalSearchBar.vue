<script lang="ts" setup>
import { AisSearchBox } from 'vue-instantsearch/vue3/es'

const props = defineProps<{
  placeholder: string
}>()
</script>

<template>
  <AisSearchBox>
    <template #default="{ currentRefinement, refine }">
      <form class="relative">
        <input :value="currentRefinement" @input="refine($event.currentTarget.value)"
          class="h-10 text-sm placeholder-gray-300 border-gray-200 rounded-lg pe-10 focus:z-10 w-full pl-10"
          :placeholder="props.placeholder" type="search" id="modalInputSearch" />
        <span class="absolute inset-y-0 p-2 text-gray-400 rounded-r-lg start-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
              clip-rule="evenodd" />
          </svg>
        </span>
        <button @click="refine('')" :hidden="!currentRefinement" type="reset"
          class="absolute right-4 top-[50%] h-5 w-5 flex items-center justify-center rounded-[50%] translate-y-[-50%] cursor-pointer">
          <svg width="12" height="13" viewBox="0 0 12 13" xmlns="http://www.w3.org/2000/svg" fill="#bdb7d3"
            class="duration-300 hover:fill-[#705b8c]">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.410859 0.910901C0.567132 0.754675 0.779055 0.666912 1.00003 0.666912C1.221 0.666912 1.43292 0.754675 1.58919 0.910901L6.00003 5.32173L10.4109 0.910901C10.4877 0.831309 10.5797 0.767824 10.6814 0.72415C10.783 0.680476 10.8924 0.657487 11.003 0.656526C11.1137 0.655564 11.2234 0.676649 11.3258 0.718549C11.4282 0.76045 11.5213 0.822328 11.5995 0.900572C11.6778 0.978816 11.7396 1.07186 11.7815 1.17427C11.8234 1.27669 11.8445 1.38642 11.8436 1.49707C11.8426 1.60772 11.8196 1.71707 11.7759 1.81874C11.7323 1.92041 11.6688 2.01236 11.5892 2.08923L7.17836 6.50007L11.5892 10.9109C11.741 11.0681 11.825 11.2786 11.8231 11.4971C11.8212 11.7156 11.7335 11.9246 11.579 12.0791C11.4245 12.2336 11.2155 12.3212 10.997 12.3231C10.7785 12.325 10.568 12.241 10.4109 12.0892L6.00003 7.6784L1.58919 12.0892C1.43202 12.241 1.22152 12.325 1.00302 12.3231C0.784527 12.3212 0.575517 12.2336 0.42101 12.0791C0.266503 11.9246 0.178862 11.7156 0.176964 11.4971C0.175065 11.2786 0.259061 11.0681 0.410859 10.9109L4.82169 6.50007L0.410859 2.08923C0.254633 1.93296 0.16687 1.72104 0.16687 1.50007C0.16687 1.2791 0.254633 1.06717 0.410859 0.910901Z" />
          </svg>
        </button>
      </form>
    </template>
  </AisSearchBox>
</template>

<style>
#modalInputSearch::-webkit-search-cancel-button {
  appearance: none;
}

button[type="reset"][hidden] {
  display: none;
}
</style>
