<script lang="ts" setup>
const props = defineProps<{
  href: string
}>()
</script>

<template>

  <a :href="props.href" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 py-2 group">
    <div class="flex">
      <div class="font-semibold text-gray-700 group-hover:text-indigo-500">
        <slot name="company-name"></slot>
      </div>
      <div class="ml-4">
        <slot name="status"></slot>
      </div>
      <div class="ml-auto text-gray-400">
        <slot name="value"></slot>
      </div>
    </div>
  </a>
</template>
