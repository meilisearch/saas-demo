<script setup lang="ts">
import { instantMeiliSearch } from '@meilisearch/instant-meilisearch'

const props = defineProps<{
  apiKey: string,
  indexName: string,
}>()

const {searchClient} = instantMeiliSearch(
  import.meta.env.VITE_MEILISEARCH_HOST,
  props.apiKey,
)
</script>

<template>
  <ais-instant-search
    :search-client="searchClient"
    :index-name="props.indexName"
    :future="{ preserveSharedStateOnUnmount: true }"
  >
    <slot name="default" />
  </ais-instant-search>
</template>

