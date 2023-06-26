<script setup>
    import { AisStateResults } from 'vue-instantsearch/vue3/es';
</script>

<template>
    <ais-state-results>
        <template #default="{ results: { hits } }">
            <div v-show="!hits.length" class="text-center mt-2">
            No results found 😞
            </div>
        </template>
    </ais-state-results>
</template>
