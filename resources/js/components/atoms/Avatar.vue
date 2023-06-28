<script lang="ts" setup>
    const props = defineProps<{
    imageUrl: string,
    }>()
</script>

<template>
    <div class="w-6 h-6 overflow-hidden rounded-full">
        <img :src="props.imageUrl" class="object-cover" />
    </div>
</template>
