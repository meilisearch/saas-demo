<script lang="ts" setup>
import { AisIndex, AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
import Avatar from '../atoms/Avatar.vue'
import Button from '../atoms/Button.vue'
import ContactSearchResultCard from '../molecules/ContactSearchResultCard.vue'
import NoResults from '../atoms/NoResults.vue'
</script>

<template>
    <AisIndex index-name="contacts">
        <AisInfiniteHits>
            <template #default="{
                items,
                refineNext,
                isLastPage
            }">
                <ul class="space-y-3">
                    <li v-for="contact, key in items" :key="key">
                        <ContactSearchResultCard :href="`/contacts/${contact.id}`"
                            :contact-avatar-url="`https://api.dicebear.com/6.x/initials/svg?seed=${contact.name}`">
                            <template #name>
                                <AisHighlight :hit="contact" attribute="name" />
                            </template>
                            <template #email>
                                <AisHighlight :hit="contact" attribute="email" class="break-all" />
                            </template>
                        </ContactSearchResultCard>
                        <!-- <ContactSearchResultCard
                            :contact-avatar-url="`https://api.dicebear.com/6.x/initials/svg?seed=${contact.name}`"
                            :href="`/contacts/${contact.id}`">
                            <template #contactFullName>
                                <AisHighlight :hit="contact" attribute="name" />
                            </template>
                            <template #contactCompanyName>
                                <AisHighlight :hit="contact" attribute="company_name" />
                            </template>
                            <template #contactEmail>
                                <AisHighlight :hit="contact" attribute="email" class="break-all" />
                            </template>
                            <template #contactPhoneNumber>
                                <AisHighlight :hit="contact" attribute="phone_number" />
                            </template>
                        </ContactSearchResultCard> -->

                    </li>
                    <li class="text-center mt-4">
                        <Button @click="refineNext" button-text="See more contacts" :disabled="isLastPage" />
                    </li>
                </ul>
            </template>
        </AisInfiniteHits>
        <NoResults />
    </AisIndex>
</template>
