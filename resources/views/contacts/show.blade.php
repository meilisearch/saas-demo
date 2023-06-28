@extends('layouts.resource')

@section('title')
    <div class="flex items-center gap-4">
        <div class="h-10 w-10 overflow-hidden rounded-full">
            <img src="https://api.dicebear.com/6.x/initials/svg?seed={{ $contact->email }}" class="object-cover" />
        </div>
        <div>{{ $contact->name }}</div>
    </div>
@endsection

@section('back-button-text', 'Back to Contacts')

@section('resource')
    <div class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8">
        <div class="sm:flex sm:justify-between sm:gap-4">
            <div>
                <div class="text-lg text-gray-900 sm:text-xl">
                    <a href="{{ route('companies.show', $contact->company->id) }}"
                        class="font-bold hover:text-blue-600 active:text-blue-500">{{ $contact->company->name }}</a>
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
                <img alt="{{ $contact->company->name }}" src="https://logo.clearbit.com/{{ $contact->company->url }}"
                    class="object-cover" />
            </div>
        </div>
    </div>
@endsection
