<script lang="ts" setup>
export interface Props {
  href?: string
}
const props = withDefaults(defineProps<Props>(), {
  href: '#'
})
</script>

<template>
  <a :href="props.href" class="relative block overflow-hidden rounded-md border border-gray-200 my-2 p-2 sm:p-4 lg:p-6">
    <slot />
  </a>
</template>
