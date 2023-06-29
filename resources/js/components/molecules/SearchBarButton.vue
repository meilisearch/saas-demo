<script setup lang="ts">
    const isMac = /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent)
</script>

<template>
    <button class="relative">
        <input class="h-10 text-sm placeholder-gray-300 border-gray-200 rounded-lg pe-10 focus:z-10"
        placeholder="Search" type="text" />
        <span v-if="isMac" class="absolute inset-y-0 p-2 text-xs text-gray-400 rounded-r-lg end-0 leading-5">
            ⌘
            K
        </span>
        <span v-else class="absolute inset-y-0 p-2 text-xs text-gray-400 rounded-r-lg end-0 leading-5">
            ✲
            K
        </span>
    </button>
</template>
