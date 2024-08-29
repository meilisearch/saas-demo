@props(['meilisearchToken'])

<div id="app-search">
    <app-search api-key="{{ $meilisearchToken }}"></app-search>
</div>

@push('scripts')
    @vite('resources/js/app-search.js')
@endpush
