<script lang="ts" setup>
import SearchResultCard from './SearchResultCard.vue';
import OrganizationLogo from '../atoms/OrganizationLogo.vue';
import ContactIcon from '../atoms/ContactIcon.vue';
export interface Props {
  href?: string,
  companyName: string,
  companyLogoUrl?: string,
  contactCount: number
}
const props = withDefaults(defineProps<Props>(), {
  href: '#',
  companyLogoUrl: 'https://api.dicebear.com/6.x/icons/svg?icon=briefcase&size=32'
})
</script>

<template>
  <a :href="props.href" class="block border border-indigo-50 rounded p-4 bg-gray-50 group">
    <div class="text-base font-bold text-gray-700 sm:text-base mb-2 group-hover:text-indigo-500">
      <slot name="name"></slot>
    </div>
    <div class="sm:flex sm:justify-start sm:gap-4 items-center content-center">
      <OrganizationLogo :organization-name="props.companyName" :logo-url="props.companyLogoUrl" />
      <div class="flex text-gray-700 space-x-2 text-sm">
        <ContactIcon />
        <span>{{ props.contactCount }} contacts</span>
      </div>
    </div>
  </a>
</template>
