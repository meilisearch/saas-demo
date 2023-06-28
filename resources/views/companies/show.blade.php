@extends('layouts.resource')

@section('title')
    <div class="flex items-center gap-4">
        <div class="h-12 w-12 overflow-hidden rounded bg-gray-100 p-1">
            <img src="https://logo.clearbit.com/{{ $company->url }}" alt="{{ $company->name }}">
        </div>
        <div>{{ $company->name }}</div>
    </div>
@endsection

@section('back-button-text', 'Back to Companies')

@section('resource')
    <div class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8">
        <div class="mb-3 text-lg text-gray-900">
            <span class="font-bold">{{ $company->deals->count() }} deals</span>
        </div>
        <ul class="space-y-1">
            @foreach ($company->deals as $deal)
                <li class="list-item text-gray-500">
                    <a href="{{ route('deals.show', $deal->id) }}" class="hover:text-blue-600 active:text-blue-600">
                        [{{ $deal->status }}] {{ $deal->contact->name }} — ${{ number_format($deal->value, 2, ',', '.') }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
