import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'
import { container } from 'jenesius-vue-modal'

// Components
import Meilisearch from './components/InstantsearchProvider.vue'
import ModalTrigger from './components/organisms/ModalTrigger.vue'

const app = createApp({
  components: {
    Meilisearch,
    VueModalContainer: container,
    ModalTrigger,
  },
})

app.use(InstantSearch)

app.mount('#search-modal')
