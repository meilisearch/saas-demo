<script lang="ts" setup>
    const props = defineProps<{
    imageUrl: string,
    }>()
</script>

<template>
    <div class="h-10 w-10 overflow-hidden rounded-full">
        <img :src="props.imageUrl" class="object-cover" />
    </div>
</template>
