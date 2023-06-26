<script lang="ts" setup>
    import SearchResultCard from './SearchResultCard.vue';

    export interface Props {
    href?: string
    }

    const props = withDefaults(defineProps<Props>(), {
    href: '#'
    })
</script>

<template>
    <SearchResultCard :href="props.href">
        <template #picture>
            <slot name="dealStatusIcon"></slot>
        </template>
        <template #title>
            <slot name="companyName"></slot>
        </template>
        <template #subtitle>
            <slot name="dealValue"></slot>
        </template>
        <template #default>
            <slot name="dealInfo"></slot>
        </template>
    </SearchResultCard>
</template>
