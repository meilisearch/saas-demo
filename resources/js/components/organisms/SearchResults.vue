<script lang="ts" setup>
    import { AisIndex } from 'vue-instantsearch/vue3/es'
    const props = defineProps<{
    indexName: string
    }>()
</script>

<template>
    <div class="w-[30%]">
        <AisIndex :indexName="props.indexName">
            <slot name="default"></slot>
        </AisIndex>
    </div>
</template>
