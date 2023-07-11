<template>
  <ais-instant-search :search-client="searchClient" :index-name="props.indexName">
    <slot name="default"></slot>
  </ais-instant-search>
</template>

<script setup lang="ts">
import { instantMeiliSearch } from "@meilisearch/instant-meilisearch"

const props = defineProps<{
  host?: string,
  apiKey: string,
  indexName: string,
}>()

// TODO: fix this TypeScript error `The 'import.meta' meta-property is only allowed when the '--module' option is 'es2020', 'es2022', 'esnext', 'system', 'node16', or 'nodenext'.`
const searchClient = instantMeiliSearch(
  // @ts-ignore
  props.host ? props.host : import.meta.env.VITE_MEILISEARCH_HOST,
  props.apiKey
)
</script>
