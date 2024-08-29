<script setup lang="ts">
import { openModal, container as VueModalContainer } from 'jenesius-vue-modal'
import { useMagicKeys, whenever } from '@vueuse/core'
import SearchModal from './SearchModal.vue'
import SearchButton from './SearchButton.vue'

const props = defineProps<{
  apiKey: string,
}>()

// Modal logic
const handleOpen = async () => {
  await openModal(SearchModal, {
    apiKey: props.apiKey,
  })
}

// Keyboard shortcuts
const keys = useMagicKeys()
const isMac = /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent);
if (isMac) {
  whenever(keys['meta+K'], () => {
    handleOpen()
  })
} else {
  whenever(keys['Ctrl+K'], () => {
    handleOpen()
  })
}
</script>

<template>
  <SearchButton @click="handleOpen" />
  <VueModalContainer />
</template>
