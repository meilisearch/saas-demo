<div id="search-modal">
    <meilisearch index-name="companies" host="localhost:7700" api-key="5d1fad2597771be14391d85ee737dd72857eff4397fac043bc8c367124ecadd0">
        <search-modal>
            <template #searchbar>
                <search-bar placeholder='Search'></search-bar>
            </template>
            <template #results>
                <div class="max-w-[30%] min-w-[30%]">
                    <company-search-results></company-search-results>
                </div>
                <search-results index-name="contacts">
                    <template #default>
                        <contact-search-results></contact-search-results>
                    </template>
                </search-results>
                <search-results index-name="deals">
                    <template #default>
                        <deal-search-results></deal-search-results>
                    </template>
                </search-results>
            </template>
        </search-modal>
    </meilisearch>
</div>


@push('scripts')
    @vite('resources/js/search-modal.js')
@endpush
