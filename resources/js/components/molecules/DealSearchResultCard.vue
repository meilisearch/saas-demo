<script lang="ts" setup>
    import SearchResultCard from './SearchResultCard.vue';
    import ContactIcon from '../atoms/ContactIcon.vue'

    export interface Props {
    href?: string
    }

    const props = withDefaults(defineProps<Props>(), {
    href: '#'
    })
</script>

<template>
    <SearchResultCard :href="props.href">
        <template #title>
            <slot name="companyName"></slot>
        </template>
        <template #subtitle>
            <slot name="dealValue"></slot>
        </template>
        <template #default>
            <slot name="dealStatus"></slot>

            <div class="flex gap-2 items-center mt-4">
                <ContactIcon />
                <slot name="dealContactName"></slot>
            </div>
        </template>
    </SearchResultCard>
</template>
