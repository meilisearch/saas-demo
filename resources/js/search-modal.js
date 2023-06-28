import { createApp } from 'vue'

import InstantSearch from 'vue-instantsearch/vue3/es'
import { createVfm } from 'vue-final-modal'
import 'vue-final-modal/style.css'


// Components
import Meilisearch from './components/Meilisearch.vue'
import ModalTrigger from './components/organisms/ModalTrigger.vue'

const vfm = createVfm()
const app = createApp({
  components: {
    Meilisearch,
    ModalTrigger
  }
})

app.use(InstantSearch, vfm)

app.mount('#search-modal')
