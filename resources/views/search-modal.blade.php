@extends('app')

@section('modal')

<meilisearch index-name='companies' host="http://localhost:7700" api-key="">
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
@endsection

@push('scripts')
    @vite('resources/js/search-modal.js')
@endpush
