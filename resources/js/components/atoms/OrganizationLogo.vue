<script lang="ts" setup>
const props = defineProps<{
    organizationName: string,
    logoUrl: string
}>()
</script>


<template>
    <div class="flex h-10 w-10 items-center overflow-hidden rounded bg-white p-1">
        <span class="sr-only">Logo</span>
        <img :src="props.logoUrl" :alt="props.organizationName">
    </div>
</template>
