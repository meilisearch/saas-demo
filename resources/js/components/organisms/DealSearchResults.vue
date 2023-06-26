<script lang="ts" setup>
    import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
    import DealSearchResultCard from '../molecules/DealSearchResultCard.vue'
    import NoResults from '../atoms/NoResults.vue'
    import Button from '../atoms/Button.vue'
    import ToContactIcon from '../atoms/ToContactIcon.vue'
    import ContactedIcon from '../atoms/ContactedIcon.vue'
    import LeadIcon from '../atoms/LeadIcon.vue'
    import WonIcon from '../atoms/WonIcon.vue'
    import LostIcon from '../atoms/LostIcon.vue'
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
                    <DealSearchResultCard>
                        <template #dealStatusIcon v-if="deal.status ==='to_contact'">
                            <ToContactIcon />
                        </template>
                        <template #dealStatusIcon v-else-if="deal.status ==='contacted'">
                            <ContactedIcon />
                        </template>
                        <template #dealStatusIcon v-else-if="deal.status ==='lead'">
                            <LeadIcon />
                        </template>
                        <template #dealStatusIcon v-else-if="deal.status ==='won'">
                                <WonIcon />
                        </template>
                        <template #dealStatusIcon v-else-if="deal.status ==='lost'">
                            <LostIcon />
                        </template>
                        <template #companyName>
                            <AisHighlight :hit="deal" attribute="company_id"/>
                        </template>
                        <template #dealValue>
                            {{ new Intl.NumberFormat('en-US', {
                                style: 'currency', currency: 'USD',
                            }).format(deal.value) }}
                        </template>
                        <template #dealInfo>
                            <AisHighlight :hit="deal" attribute="contact_id" />
                        </template>
                    </DealSearchResultCard>
                </li>
                <li v-if="!isLastPage" class="text-center mt-4">
                    <Button @click="refineNext" button-text="Show more"/>
                </li>
            </ul>
        </template>
    </AisInfiniteHits>
    <NoResults/>
</template>
