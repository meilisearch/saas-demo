@extends('layouts.resource')

@section('title')
    <div class="flex items-center gap-4">
        <div class="h-12 w-12 overflow-hidden rounded bg-gray-100 p-1">
            <img src="https://logo.clearbit.com/{{ $deal->company->url }}" alt="{{ $deal->company->name }}">
        </div>
        <div>{{ $deal->company->name }} deal</div>
    </div>
@endsection

@section('back-button-text', 'Back to Deals')

@section('resource')
    <div class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8">
        <div class="mb-4 text-lg font-bold text-gray-900">
            ${{ number_format($deal->value, 2, ',', '.') }}
        </div>

        <div>
            <span class="font-medium text-gray-500">Status:</span>
            <span class="text-gray-900">{{ $deal->status }}</span>
        </div>

        <div>
            <span class="font-medium text-gray-500">Company:</span>
            <a href="{{ route('companies.show', $deal->company->id) }}"
                class="text-gray-900 hover:text-blue-600 active:text-blue-500">
                {{ $deal->company->name }}
            </a>
        </div>

        <div>
            <span class="font-medium text-gray-500">Contact:</span>
            <a href="{{ route('contacts.show', $deal->contact->id) }}"
                class="text-gray-900 hover:text-blue-600 active:text-blue-500">{{ $deal->contact->name }}</a>
        </div>
    </div>
@endsection
