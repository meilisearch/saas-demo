@extends('layouts.table')

@section('title', 'Deals')

@section('table')
    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Company
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Prospect
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Value
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($deals as $deal)
                    <tr class="even:bg-gray-50">
                        <td class="items-center whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            <div class="inline-flex items-center gap-2">
                                <div class="inline-flex h-6 w-6 items-center overflow-hidden rounded bg-gray-100 p-1">
                                    <img src="{{ Vite::asset('resources/assets/meilisearch-logo.svg') }}"
                                        alt="{{ $deal->company->name }}">
                                </div>
                                {{ $deal->company->name }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <inline class="flex items-center gap-2">
                                <div class="h-6 w-6 overflow-hidden rounded-full">
                                    <img src="{{ $userAvatarUrl }}" class="object-cover" />
                                </div>
                                {{ $deal->contact->name }}

                            </inline>
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-right text-gray-700">
                            $ {{ number_format($deal->value, 0, '.', ',') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
