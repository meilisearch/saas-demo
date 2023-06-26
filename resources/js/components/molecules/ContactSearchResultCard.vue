<script lang="ts" setup>
    import SearchResultCard from './SearchResultCard.vue';
    import Avatar from '../atoms/Avatar.vue';
    import MailIcon from '../atoms/MailIcon.vue'
    import PhoneIcon from '../atoms/PhoneIcon.vue'

    export interface Props {
    href?: string,
    contactAvatarUrl: string
    }

    const props = withDefaults(defineProps<Props>(), {
    href: '#'
    })
</script>

<template>
    <SearchResultCard :href="props.href">
        <template #picture>
            <Avatar :image-url="props.contactAvatarUrl"/>
        </template>
        <template #title>
            <slot name="contactFullName"></slot>
        </template>
        <template #subtitle>
            <slot name="contactCompanyName"></slot>
        </template>
        <template #default>
            <div class="flex items-center">
                <MailIcon class="mr-2" />
                <slot name="contactEmail"></slot>
            </div>
            <div class="mt-2 flex items-center">
                <PhoneIcon class="mr-2"/>
                <slot name="contactPhoneNumber"></slot>
            </div>
        </template>
    </SearchResultCard>
</template>
