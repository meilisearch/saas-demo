<script lang="ts" setup>
const props = defineProps<{
  href: string
}>()

const statusClass = (status: string) => {
  switch (status) {
    case 'won':
      return 'bg-green-100 text-green-800'
    case 'lost':
      return 'bg-red-100 text-red-800'
    case 'contacted':
      return 'bg-yellow-100 text-yellow-800'
    case 'to contact':
      return 'bg-blue-100 text-blue-800'
    default:
      return 'bg-gray-100 text-gray-800'
  }
}
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
