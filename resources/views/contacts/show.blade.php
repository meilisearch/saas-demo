@extends('layouts.resource')

@section('title', $contact->name)

@section('back-button-text', 'Back to Contacts')

@section('resource')
    <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8">
        <div class="sm:flex sm:justify-between sm:gap-4">
            <div>
                <div class="text-lg text-gray-900 sm:text-xl">
                    <span class="font-bold">{{ $contact->company->name }}</span>
                </div>

                <div class="mt-4 space-y-2">
                    <p class="max-w-[40ch] text-sm text-gray-500">
                        {{ $contact->email }}
                    </p>
                    <p class="max-w-[40ch] text-sm text-gray-500">
                        {{ $contact->phone_number }}
                    </p>
                </div>
            </div>

            <div class="h-16 w-16 rounded-lg object-cover shadow-sm">
                <img alt="Paul Clapton" src="https://logo.clearbit.com/{{ $contact->company->url }}" class="object-cover" />
            </div>
        </div>
    </a>
@endsection
