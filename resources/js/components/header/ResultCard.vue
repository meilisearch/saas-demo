<script lang="ts" setup>
const props = defineProps<{
  href: string,
}>()
</script>

<template>
  <a
    :href="props.href"
    class="relative flex items-center px-4 py-2 overflow-hidden border border-gray-200 rounded-md group hover:border-indigo-300 min-h-14"
  >
    <div class="w-full">
      <slot name="default" />
    </div>
  </a>
</template>
