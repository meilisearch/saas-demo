<script lang="ts" setup>
import { computed } from 'vue'
import BuildingOfficeIcon from '../ui/icons/micro/BuildingOfficeIcon.vue'
import UserIcon from '../ui/icons/micro/UserIcon.vue'
import BriefcaseIcon from '../ui/icons/micro/BriefcaseIcon.vue'
import OrganizationLogo from '../ui/OrganizationLogo.vue'
import Avatar from '../ui/UserAvatar.vue'
import UserGroupIcon from '../ui/icons/mini/UserGroupIcon.vue'
import { formatDealAmount, getDealStatusClass } from '../../utils'

const props = defineProps<{
  hit: any,
}>()

const CONFIG = {
  companies: {
    type: 'company',
    iconComponent: BuildingOfficeIcon,
    imageComponent: OrganizationLogo,
    imageSrc: ({ url }: { url: string }) => `https://logo.clearbit.com/${url}`,
    imageComponentBind: {
      class: 'w-16 h-16',
    },
  },
  contacts: {
    type: 'contact',
    iconComponent: UserIcon,
    imageComponent: Avatar,
    imageSrc: ({ name }: { name: string }) => `https://api.dicebear.com/6.x/initials/svg?seed=${name}`,
    imageComponentBind: {
      size: 'xl',
    },
  },
  deals: {
    type: 'deal',
    iconComponent: BriefcaseIcon,
    imageComponent: OrganizationLogo,
    imageSrc: ({ company_name }: { company_name: string }) => `https://api.dicebear.com/6.x/initials/svg?seed=${company_name}`,
    imageComponentBind: {
      class: 'w-16 h-16',
    },
  },
}

const hitConfig = computed(() => {
  return CONFIG[props.hit._federation?.indexUid as keyof typeof CONFIG]
})

const href = computed(() => {
  const indexName = props.hit._federation?.indexUid
  return `/${indexName}/${props.hit.id}`
})
</script>

<template>
  <a
    class="block group"
    :href
  >
    <div class="flex items-center justify-center gap-2 px-4 py-1 text-xs font-semibold tracking-wide text-indigo-800 uppercase bg-indigo-200 rounded-t-md">
      <component :is="hitConfig.iconComponent" />
      {{ hitConfig.type }}
    </div>
    <div class="p-4 border border-indigo-200 rounded-b-md">
      <div class="flex items-center gap-8">
        <div>
          <component
            :is="hitConfig.imageComponent"
            v-bind="{ src: hitConfig.imageSrc(props.hit), ...hitConfig.imageComponentBind }"
            class="w-16 h-16"
          />
        </div>
        <div>
          <div class="text-lg font-semibold ">{{ props.hit.name ?? props.hit.company_name }}</div>
          <div
            v-if="hitConfig.type === 'company'"
            class="flex items-center gap-2 text-gray-500"
          >
            <UserGroupIcon />
            <span>{{ props.hit.number_of_contacts }} contacts</span>
          </div>
          <div
            v-else-if="hitConfig.type === 'contact'"
            class="text-gray-500 "
          >
            {{ props.hit.email }}
          </div>
          <div
            v-else-if="hitConfig.type === 'deal'"
            class="flex items-center gap-2 text-gray-500"
          >
            <span>{{ formatDealAmount(props.hit.value) }}</span>
            <div
              class="inline-flex items-center h-5 px-2 text-xs font-semibold rounded-full"
              :class="[getDealStatusClass(props.hit.status)]"
            >
              {{ props.hit.status }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</template>
