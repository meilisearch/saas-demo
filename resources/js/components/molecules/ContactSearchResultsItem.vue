<script lang="ts" setup>
import SearchResultCard from './SearchResultCard.vue';
import Avatar from '../atoms/Avatar.vue';
import Card from '../atoms/Card.vue';
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
    <a :href="props.href" class="block">
        <div class="sm:flex sm:justify-start sm:gap-4 items-center">
            <Avatar :image-url="props.contactAvatarUrl" />
            <div class="space-y-1">
                <h3 class="font-bold text-gray-700 leading-none">
                    <slot name="name"></slot>
                </h3>
                <div class="text-sm leading-none text-gray-400">
                    <slot name="email"></slot>
                </div>
            </div>
        </div>
    </a>
</template>
