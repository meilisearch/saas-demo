<script setup lang="ts">
import { openModal, container as VueModalContainer } from 'jenesius-vue-modal'
import { useMagicKeys, watchOnce, whenever } from '@vueuse/core'
import SearchModal from './SearchModal.vue'
import SearchButton from '../molecules/SearchButton.vue'

const handleOpen = async () => {
  const modal = await openModal(SearchModal)
}

// Keyboard shortcuts
const keys = useMagicKeys()
const CmdK = keys['meta+K']
const CtrlK = keys['Ctrl+K']
const isMac = /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent);
if (isMac) {
  whenever(CmdK, () => {
    handleOpen()
  })
} else {
  whenever(CtrlK, () => {
    handleOpen()
  })
}
</script>

<template>
  <SearchButton @click="handleOpen" />
  <VueModalContainer />
</template>
