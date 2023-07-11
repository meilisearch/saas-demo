@props(['meilisearchToken'])

<div id="search-modal">
    <meilisearch index-name="companies" api-key="{{ $meilisearchToken }}">
        <modal-trigger></modal-trigger>
    </meilisearch>
</div>
@push('scripts')
    @vite('resources/js/search-modal.js')
@endpush
