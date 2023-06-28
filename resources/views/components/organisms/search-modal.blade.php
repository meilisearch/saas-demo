@props(['meilisearchToken'])

<div id="search-modal">
    <meilisearch index-name="companies" host="localhost:7700" api-key="{{ $meilisearchToken }}">
        <modal-trigger></modal-trigger>
    </meilisearch>
</div>
@push('scripts')
    @vite('resources/js/search-modal.js')
@endpush
