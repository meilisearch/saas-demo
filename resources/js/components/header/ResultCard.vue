<script lang="ts" setup>
const props = defineProps<{
  href: string,
}>()
</script>

<template>
  <a
    :href="props.href"
    class="relative block overflow-hidden rounded-md border border-gray-200 px-3 py-2 group"
  >
    <slot name="default" />
  </a>
</template>
