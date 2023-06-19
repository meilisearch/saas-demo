@extends('app')

@section('content')
    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Name
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Contacts
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($companies as $company)
                    <tr class="even:bg-gray-50">
                        <td class="flex items-center gap-2 whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            <div class="inline-flex h-6 w-6 items-center overflow-hidden rounded bg-gray-100 p-1">
                                <img src="{{ Vite::asset('resources/assets/meilisearch-logo.svg') }}"
                                    alt="{{ $company->name }}">
                            </div>
                            {{ $company->name }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            {{ $company->contacts_count }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
