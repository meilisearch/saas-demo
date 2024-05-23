<script setup lang="ts">
import { openModal, container as VueModalContainer } from 'jenesius-vue-modal'
import { useMagicKeys, whenever } from '@vueuse/core'
import SearchModal from './SearchModal.vue'
import SearchButton from '../molecules/SearchButton.vue'

const keys = useMagicKeys()
const CmdK = keys['meta+K']
const CtrlK = keys['Ctrl+K']

const handleOpen = async () => {
  const modal = await openModal(SearchModal)
  modal.on('open', () => {
    console.log('modal opened')
    // document.getElementById('modalInputSearch')?.focus()
  })
}

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
