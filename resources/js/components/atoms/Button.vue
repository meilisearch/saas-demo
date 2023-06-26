<script setup lang="ts">
    const props = defineProps<{
    buttonText: string
    }>()
</script>

<template>
    <button
    class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
    >
        <span
            class="absolute inset-0 translate-x-0 translate-y-0 bg-indigo-600 transition-transform group-hover:translate-y-0.5 group-hover:translate-x-0.5"
        ></span>

        <span class="relative block border border-current bg-white px-8 py-3">
            {{ props.buttonText }}
        </span>
    </button>
</template>
