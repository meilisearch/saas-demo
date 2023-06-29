<script setup lang="ts">
import { ModalsContainer, useModal } from 'vue-final-modal'
import SearchModal from './SearchModal.vue'
import SearchBarButton from '../molecules/SearchBarButton.vue'
import { useMagicKeys, whenever } from '@vueuse/core'

const { open, close } = useModal({
  component: SearchModal,
  attrs: {
    onClose() {
      close()
    },
  }
})
const keys = useMagicKeys()
const CmdK = keys['meta+K']
const CtrlK = keys['Ctrl+K']

const isMac = /(Mac|iPhone|iPod|iPad)/i.test(navigator.userAgent);

if ( isMac ) {
    whenever(CmdK, () => {
        open()
    })
} else {
    whenever(CtrlK, () => {
        open()
    })
}
</script>

<template>
  <SearchBarButton @click="() => open()"/>
  <ModalsContainer />
</template>
