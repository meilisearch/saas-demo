<script lang="ts" setup>
    import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
    import DealSearchResultCard from '../molecules/DealSearchResultCard.vue'
    import NoResults from '../atoms/NoResults.vue'
    import Button from '../atoms/Button.vue'
    import ContactIcon from '../atoms/ContactIcon.vue'
    import MailIcon from '../atoms/MailIcon.vue'

    const statusClass = (status: string) => {
        switch (status) {
            case 'won':
            return 'bg-green-100 text-green-800'
            case 'lost':
            return 'bg-red-100 text-red-800'
            case 'contacted':
            return 'bg-yellow-100 text-yellow-800'
            case 'to contact':
            return 'bg-blue-100 text-blue-800'
            default:
            return 'bg-gray-100 text-gray-800'
        }
    }
</script>

<template>
    <AisInfiniteHits>
        <template #default="{
            items,
            refineNext,
            isLastPage
        }">
            <ul>
                <li v-for="deal, key in items" :key="key">
                    <DealSearchResultCard :href="`/deals/${deal.id}`">
                        <template #companyName>
                            <AisHighlight :hit="deal" attribute="company_name"/>
                        </template>
                        <template #dealValue>
                            {{ new Intl.NumberFormat('en-US', {
                                style: 'currency', currency: 'USD',
                            }).format(deal.value) }}
                        </template>
                        <template #dealStatus>
                            <span class="px-2 py-1 rounded-full" :class="[statusClass(deal.status)]">
                                <AisHighlight :hit="deal" attribute="status" class="text-xs tracking-tight uppercase" />
                            </span>
                        </template>
                        <template #dealContactName>
                            <AisHighlight :hit="deal" attribute="contact_name" />
                        </template>
                    </DealSearchResultCard>
                </li>
                <li class="text-center mt-4">
                    <Button @click="refineNext" button-text="See more deals" :disabled="isLastPage"/>
                </li>
            </ul>
        </template>
    </AisInfiniteHits>
    <NoResults/>
</template>
