<script lang="ts" setup>
import ResultCard from './ResultCard.vue'
import BriefcaseIcon from '../icons/micro/BriefcaseIcon.vue'
import { getDealStatusClass, formatDealAmount } from '../../utils'

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
    <div class="flex items-baseline gap-4">
      <BriefcaseIcon class="my-auto text-gray-500 group-hover:text-indigo-500" />
      <div class="font-semibold text-gray-700">
        {{ props.companyName }}
      </div>
      <div
        class="inline-flex items-center h-5 px-2 text-xs font-semibold rounded-full"
        :class="[getDealStatusClass(props.dealStatus)]"
      >
        {{ props.dealStatus }}
      </div>
      <div class="flex gap-4 ml-auto">
        <div class="text-sm text-gray-400">
          {{ formatDealAmount(props.dealAmount) }}
        </div>
      </div>
    </div>
  </ResultCard>
</template>
