<script setup lang="ts">
import { ModalsContainer, useModal } from 'vue-final-modal'
import SearchModal from './SearchModal.vue'
import SearchBarButton from '../molecules/SearchBarButton.vue'
const { open, close } = useModal({
  component: SearchModal,
  attrs: {
    onClose() {
      close()
    },
  }
})
</script>
<template>
  <SearchBarButton @click="() => open()"/>
  <ModalsContainer />
</template>
