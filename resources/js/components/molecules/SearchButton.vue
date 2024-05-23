<script setup lang="ts">
const isMac = /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent)
</script>

<template>
  <button class="relative h-10 text-sm border border-gray-200 rounded-lg px-3 space-x-2 hover:border-gray-300 group">
    <span class="text-gray-300 group-hover:text-gray-400">Search for anything...</span>
    <span class="p-1 text-xs text-gray-400 rounded bg-gray-100 border">
      <template v-if="isMac">
        ⌘ K
      </template>
      <template v-else>
        Ctrl K
      </template>
    </span>
  </button>
</template>
