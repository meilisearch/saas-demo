import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import ContactList from './components/organisms/ContactList.vue'
import Meilisearch from './components/organisms/Meilisearch.vue'
import SearchBar from './components/organisms/SearchBar.vue'

const app = createApp({
  components: {
    ContactList,
    Meilisearch,
    SearchBar
  }
})

app.use(InstantSearch)

app.mount('#table-search')
