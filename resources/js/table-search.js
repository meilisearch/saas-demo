import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import Meilisearch from './components/InstantsearchProvider.vue'
import SearchBar from './components/organisms/SearchBar.vue'
import SearchFilterMenu from './components/organisms/SearchFilterMenu.vue'
import SearchSortBy from './components/organisms/SearchSortBy.vue'
import DealList from './components/organisms/DealList.vue'
import ContactList from './components/organisms/ContactList.vue'
import CompanyList from './components/organisms/CompanyList.vue'

const app = createApp({
  components: {
    Meilisearch,
    SearchBar,
    SearchSortBy,
    SearchFilterMenu,
    CompanyList,
    ContactList,
    DealList,
  },
})

app.use(InstantSearch)

app.mount('#table-search')
