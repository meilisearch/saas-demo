<script lang="ts" setup>
    import Card from '../atoms/Card.vue';

    export interface Props {
    href?: string
    }

    const props = withDefaults(defineProps<Props>(), {
    href: '#'
    })
</script>

<template>
    <Card :href="props.href">
        <div class="sm:flex sm:justify-start sm:gap-4 items-center content-center">
        <div>
            <slot name="picture"></slot>
        </div>
        <div class="flex flex-col">
            <h3 class="text-base font-bold text-gray-900 sm:text-base">
                <slot name="title"></slot>
            </h3>
            <div class="text-sm">
                <slot name="subtitle"></slot>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="text-sm text-gray-700">
            <slot name="default"></slot>
        </div>
    </div>
    </Card>
</template>
