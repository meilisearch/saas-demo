import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import Meilisearch from './components/Meilisearch.vue'
import SearchBar from './components/SearchBar.vue'
import SearchSortBy from './components/SearchSortBy.vue'
import ContactList from './components/ContactList.vue'

const app = createApp({
  components: {
    Meilisearch,
    SearchBar,
    SearchSortBy,
    ContactList,
  }
})

app.use(InstantSearch)

app.mount('#table-search')
