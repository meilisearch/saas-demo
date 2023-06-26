import { createApp } from 'vue'

import InstantSearch from 'vue-instantsearch/vue3/es'

// Components
import Meilisearch from './components/Meilisearch.vue'
import SearchModal from './components/organisms/SearchModal.vue'
import SearchBar from './components/molecules/SearchBar.vue'
import SearchResults from './components/organisms/SearchResults.vue'
import NoResults from './components/atoms/NoResults.vue'
import CompanySearchResults from './components/organisms/CompanySearchResults.vue'
import ContactSearchResults from './components/organisms/ContactSearchResults.vue'
import DealSearchResults from './components/organisms/DealSearchResults.vue'


const app = createApp({
  components: {
    Meilisearch,
    SearchModal,
    SearchBar,
    SearchResults,
    CompanySearchResults,
    ContactSearchResults,
    DealSearchResults,
    NoResults
  }
})

app.use(InstantSearch)

app.mount('#search-modal')
