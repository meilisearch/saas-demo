import { createApp } from 'vue'
import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import InstantsearchProvider from './components/InstantsearchProvider.vue'
import SearchBar from './components/tables/SearchBar.vue'
import SearchFilterMenu from './components/tables/SearchFilterMenu.vue'
import SearchSortBy from './components/tables/SearchSortBy.vue'
import DealList from './components/tables/DealList.vue'
import ContactList from './components/tables/ContactList.vue'
import CompanyList from './components/tables/CompanyList.vue'

const app = createApp({
  components: {
    InstantsearchProvider,
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
