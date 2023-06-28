<template>
  <ais-instant-search :search-client="searchClient" :index-name="props.indexName">
    <slot name="default"></slot>
  </ais-instant-search>
</template>

<script setup lang="ts">
import { instantMeiliSearch } from "@meilisearch/instant-meilisearch"

const props = defineProps({
  host: String,
  apiKey: String,
  indexName: String,
})

const searchClient = instantMeiliSearch(
  props.host,
  props.apiKey
)
</script>
