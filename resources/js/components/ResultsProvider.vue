<script setup>
import { AisStateResults } from 'vue-instantsearch/vue3/es'
</script>

<template>
  <ais-state-results>
    <template #default="{ results: { hits } }">
      <div v-if="hits.length">
        <slot name="default"></slot>
      </div>
      <div v-else>
        <slot name="empty"></slot>

      </div>
    </template>
  </ais-state-results>
</template>
