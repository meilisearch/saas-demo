<script lang="ts" setup>
const props = withDefaults(defineProps<{
  src: string,
  size?: 'md' | 'xl',
}>(), {
  size: 'md',
})

const sizeClasses = {
  md: 'w-8 h-8',
  xl: 'w-16 h-16',
}
</script>

<template>
  <div
    class="overflow-hidden rounded-full"
    :class="sizeClasses[props.size]"
  >
    <img
      :src="props.src"
      class="object-cover"
    >
  </div>
</template>
