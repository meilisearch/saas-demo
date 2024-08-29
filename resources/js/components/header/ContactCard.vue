<script lang="ts" setup>
import Avatar from '../ui/Avatar.vue'
import UserIcon from '../icons/micro/UserIcon.vue'
import ResultCard from './ResultCard.vue'

const props = defineProps<{
  href: string,
  contactName: string,
  contactEmail: string,
  contactAvatarUrl: string,
}>()
</script>
^
<template>
  <ResultCard
    :href="props.href"
    class="block group hover:border-indigo-300"
  >
    <div class="sm:flex sm:justify-start sm:gap-4 items-center">
      <UserIcon class="text-gray-500 group-hover:text-indigo-500" />
      <Avatar
        :src="props.contactAvatarUrl"
      />
      <div class="space-y-1">
        <div class="font-semibold text-gray-700 leading-none group-hover:text-gray-800">
          {{ props.contactName }}
        </div>
        <div class="text-sm leading-none text-gray-400">
          {{ props.contactEmail }}
        </div>
      </div>
    </div>
  </ResultCard>
</template>
