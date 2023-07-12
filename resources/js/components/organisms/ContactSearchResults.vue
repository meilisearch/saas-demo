<script lang="ts" setup>
    import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
    import ContactSearchResultCard from '../molecules/ContactSearchResultCard.vue';
    import Button from '../atoms/Button.vue';
    import NoResults from '../atoms/NoResults.vue';
</script>

<template>
    <AisInfiniteHits>
        <template #default="{
            items,
            refineNext,
            isLastPage
        }">
            <ul>
                <li v-for="contact, key in items" :key="key">
                    <ContactSearchResultCard :contact-avatar-url="`https://api.dicebear.com/6.x/initials/svg?seed=${contact.name}`" :href="`/contacts/${contact.id}`">
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
                    </ContactSearchResultCard>

                </li>
                <li class="text-center mt-4">
                    <Button @click="refineNext" button-text="See more contacts" :disabled="isLastPage"/>
                </li>
            </ul>
        </template>
    </AisInfiniteHits>
    <NoResults/>
</template>
