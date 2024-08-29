<script lang="ts" setup>
const props = defineProps<{
  src: string
  alt?: string
}>()
</script>

<template>
  <div class="flex items-center justify-center">
    <span class="sr-only">Logo</span>
    <img
      :src="props.src"
      :alt="props.alt"
      class="rounded"
    >
  </div>
</template>
