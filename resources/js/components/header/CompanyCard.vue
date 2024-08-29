<script lang="ts" setup>
import OrganizationLogo from '../atoms/OrganizationLogo.vue'
import UserGroupIcon from '../ui/micro/UserGroupIcon.vue'
import ResultCard from './ResultCard.vue'
import BuildingOfficeIcon from '../ui/micro/BuildingOfficeIcon.vue'

const props = withDefaults(defineProps<{
  href: string,
  companyName: string,
  companyLogoUrl?: string,
  contactCount: number
}>(), {
  companyLogoUrl: 'https://api.dicebear.com/6.x/icons/svg?icon=briefcase&size=32',
})
</script>

<template>
  <ResultCard
    :href="props.href"
  >
    <div class="flex items-center gap-4">
      <BuildingOfficeIcon class="text-gray-500 group-hover:text-indigo-500" />
      <OrganizationLogo
        :src="props.companyLogoUrl"
        :alt="props.companyName"
        class="w-8 h-8"
      />
      <div class="font-semibold text-gray-700 ">
        {{ props.companyName }}
      </div>
      <div class="flex ml-auto">
        <div class="flex items-center space-x-2 text-sm text-gray-400">
          <UserGroupIcon />
          <span>{{ props.contactCount }} contacts</span>
        </div>
      </div>
    </div>
  </ResultCard>
</template>
