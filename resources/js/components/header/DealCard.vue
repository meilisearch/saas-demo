<script lang="ts" setup>
import ResultCard from './ResultCard.vue'
import BriefcaseIcon from '../ui/micro/BriefcaseIcon.vue'
import { getStatusClass } from '../../utils'

const props = defineProps<{
  href: string
  companyName: string,
  dealStatus: string,
  dealAmount: number,
}>()
</script>

<template>
  <ResultCard
    :href="props.href"
  >
    <div class="flex items-center w-full gap-4">
      <BriefcaseIcon class="text-gray-500 group-hover:text-indigo-500" />

      <div class="font-semibold text-gray-700 group-hover:text-indigo-500">
        {{ props.companyName }}
      </div>
      <div class="ml-4">
        <span
          class="px-2 py-1 text-xs tracking-tight uppercase rounded-full"
          :class="[getStatusClass(props.dealStatus)]"
        >
          {{ props.dealStatus }}
        </span>
      </div>
      <div class="ml-auto text-gray-400">
        {{ new Intl.NumberFormat('en-US', {
          style: 'currency', currency: 'USD',
        }).format(props.dealAmount) }}
      </div>
    </div>
  </ResultCard>
</template>
