<script lang="ts" setup>
    import SearchResultCard from './SearchResultCard.vue';
    import OrganizationLogo from '../atoms/OrganizationLogo.vue';
    import ContactIcon from '../atoms/ContactIcon.vue';

    export interface Props {
    href?: string,
    companyName: string,
    companyLogoUrl?: string,
    }

    const props = withDefaults(defineProps<Props>(), {
    href: '#',
    companyLogoUrl: 'https://api.dicebear.com/6.x/icons/svg?icon=briefcase&size=32'
    })
</script>

<template>
    <SearchResultCard :href="props.href">
        <template #picture>
            <OrganizationLogo :organization-name="props.companyName" :logo-url="props.companyLogoUrl"/>
        </template>
        <template #title>
            <slot name="companyName"></slot>
        </template>
        <template #subtitle>
            <div class="flex">
                <ContactIcon class="mr-2"/>
                <slot name="associatedContactsNumber"></slot>
            </div>
        </template>
    </SearchResultCard>
</template>
