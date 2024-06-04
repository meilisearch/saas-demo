<script lang="ts" setup>
import Avatar from '../atoms/Avatar.vue';
export interface Props {
  href?: string,
  contactAvatarUrl: string
}
const props = withDefaults(defineProps<Props>(), {
  href: '#'
})
</script>

<template>
  <a :href="props.href" class="block group">
    <div class="sm:flex sm:justify-start sm:gap-4 items-center">
      <Avatar :image-url="props.contactAvatarUrl" />
      <div class="space-y-1">
        <div class="font-bold text-gray-700 leading-none group-hover:text-indigo-500">
          <slot name="name"></slot>
        </div>
        <div class="text-sm leading-none text-gray-400">
          <slot name="email"></slot>
        </div>
      </div>
    </div>
  </a>
</template>
