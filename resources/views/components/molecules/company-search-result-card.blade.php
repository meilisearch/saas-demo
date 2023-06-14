@props([ 'companyName', 'companyLogoUrl', 'associatedContactsNumber'])

<x-molecules.search-result-card>
    <x-slot:picture>
        <x-atoms.organization-logo organization-name="{{ $companyName }}" logo-url="{{ $companyLogoUrl }}"></x-atoms.organization-logo>
    </x-slot>
    <x-slot:title>
        {{ $companyName }}
    </x-slot:title>
    <x-slot:subtitle>
    </x-slot:subtitle>

    <div class="flex items-center">
        <x-atoms.user-group-icon class="mr-2"></x-atoms.user-group-icon>
        {{ $associatedContactsNumber }}
    </div>
</x-molecules.search-result-card>
