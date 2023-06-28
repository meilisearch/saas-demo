<div id="search-modal">
    <meilisearch index-name="companies" host="localhost:7700" api-key="5d1fad2597771be14391d85ee737dd72857eff4397fac043bc8c367124ecadd0">
        <modal-trigger></modal-trigger>
    </meilisearch>
</div>
@push('scripts')
    @vite('resources/js/search-modal.js')
@endpush
