<script lang="ts" setup>
import { computed } from 'vue'
import BuildingOfficeIcon from '../ui/icons/micro/BuildingOfficeIcon.vue'
import UserIcon from '../ui/icons/micro/UserIcon.vue'
import BriefcaseIcon from '../ui/icons/micro/BriefcaseIcon.vue'
import OrganizationLogo from '../ui/OrganizationLogo.vue'
import Avatar from '../ui/UserAvatar.vue'
import UserGroupIcon from '../ui/icons/mini/UserGroupIcon.vue'
import { formatDealAmount, getDealStatusClass } from '../../utils'

import type { Hit } from 'meilisearch'

interface DealData {
  id: string;
  name: string;
  company_name: string;
  value: number;
  status: string;
}

interface ContactData {
  id: string;
  name: string;
  email: string;
  phone_number: string;
}

interface CompanyData {
  id: string;
  name: string;
  url: string;
  number_of_contacts: number;
}

type HitType = Hit<DealData | ContactData | CompanyData>

const props = defineProps<{
  hit: HitType
}>()

// Type guard functions
function isDealHit(hit: HitType): hit is Hit<DealData> {
  return hit._federation?.indexUid === 'deals'
}

function isContactHit(hit: HitType): hit is Hit<ContactData> {
  return hit._federation?.indexUid === 'contacts'
}

function isCompanyHit(hit: HitType): hit is Hit<CompanyData> {
  return hit._federation?.indexUid === 'companies'
}

const CONFIG = {
  companies: {
    type: 'company',
    iconComponent: BuildingOfficeIcon,
    imageComponent: OrganizationLogo,
    imageComponentBind: {
      class: 'w-16 h-16',
    },
  },
  contacts: {
    type: 'contact',
    iconComponent: UserIcon,
    imageComponent: Avatar,
    imageComponentBind: {
      size: 'xl',
    },
  },
  deals: {
    type: 'deal',
    iconComponent: BriefcaseIcon,
    imageComponent: OrganizationLogo,
    imageComponentBind: {
      class: 'w-16 h-16',
    },
  },
}

const getImageSrc = (hit: HitType) => {
  if (isCompanyHit(hit)) {
    return `https://logo.clearbit.com/${hit.url}`
  } else if (isContactHit(hit)) {
    return `https://api.dicebear.com/6.x/initials/svg?seed=${hit.name}`
  } else if (isDealHit(hit)) {
    return `https://api.dicebear.com/6.x/initials/svg?seed=${hit.company_name}`
  }
  return ''
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
            v-bind="{ src: getImageSrc(props.hit), ...hitConfig.imageComponentBind }"
            class="w-16 h-16"
          />
        </div>
        <div>
          <div class="text-lg font-semibold ">
            <span v-if="isDealHit(props.hit)">{{ props.hit.company_name }}</span>
            <span v-else>{{ props.hit.name }}</span>
          </div>
          <div
            v-if="isCompanyHit(props.hit)"
            class="flex items-center gap-2 text-gray-500"
          >
            <UserGroupIcon />
            <span>{{ props.hit.number_of_contacts }} contacts</span>
          </div>
          <div
            v-else-if="isContactHit(props.hit)"
            class="text-gray-500 "
          >
            {{ props.hit.email }}
          </div>
          <div
            v-else-if="isDealHit(props.hit)"
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
