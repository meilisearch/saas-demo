@extends('app')

@section('content')
    <div id="table-search">
        <meilisearch index-name="{{ $indexName }}" host="{{ env('MEILISEARCH_HOST') }}" api-key="{{ $meilisearchToken }}">
            <div class="sticky top-0 mb-8 bg-gray-50 py-6 shadow-sm">
                <div class="flex px-10">
                    <h1 class="text-2xl font-semibold">
                        @yield('title')
                    </h1>
                    <div class="ml-auto flex gap-4">
                        <div>
                            @yield('filter')
                        </div>
                        <div>
                            @yield('sort')
                        </div>
                        <div>
                            @yield('search-bar')
                        </div>
                    </div>
                </div>
            </div>

            <main class="px-10">
                @yield('table')
            </main>
        </meilisearch>

        <footer class="px-10 py-8 text-sm text-gray-400">
            <a href="https://clearbit.com">Logos provided by Clearbit</a>
        </footer>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/table-search.js')
@endpush
