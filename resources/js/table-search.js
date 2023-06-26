import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import Meilisearch from './components/Meilisearch.vue'
import SearchBar from './components/SearchBar.vue'
import SearchSortBy from './components/SearchSortBy.vue'
import DealList from './components/DealList.vue'
import ContactList from './components/ContactList.vue'
import CompanyList from './components/CompanyList.vue'

const app = createApp({
  components: {
    Meilisearch,
    SearchBar,
    SearchSortBy,
    CompanyList,
    ContactList,
    DealList,
  }
})

app.use(InstantSearch)

app.mount('#table-search')
