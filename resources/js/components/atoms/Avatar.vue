<script lang="ts" setup>
const props = defineProps<{
    imageUrl: string,
}>()
</script>

<template>
    <div class="w-8 h-8 overflow-hidden rounded-full">
        <img :src="props.imageUrl" class="object-cover" />
    </div>
</template>
