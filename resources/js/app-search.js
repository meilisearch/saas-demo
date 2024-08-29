import { createApp } from 'vue'
// import InstantSearch from 'vue-instantsearch/vue3/es'
// import { container } from 'jenesius-vue-modal'

import AppSearch from './components/header/AppSearch.vue'

const app = createApp({
  components: {
    // Meilisearch,
    // VueModalContainer: container,
    AppSearch,
  },
})

// app.use(InstantSearch)

app.mount('#app-search')
