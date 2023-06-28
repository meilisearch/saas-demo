@extends('app')

@section('content')
    <div class="sticky top-0 mb-8 bg-gray-50 py-6 shadow-sm">
        <div class="flex px-10">
            <h1 class="text-2xl font-semibold">
                @yield('title')
            </h1>
            <div class="ml-auto flex gap-4">
                <a class="inline-flex items-center gap-2 text-gray-600 hover:text-indigo-600 focus:outline-none active:text-indigo-500"
                    href="{{ $parentPageUrl }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span class="text-sm font-medium">@yield('back-button-text')</span>
                </a>
            </div>
        </div>
    </div>
    <main class="px-10">
        @yield('resource')
    </main>
@endsection
