@props(['contactAvatarUrl', 'contactFullName', 'contactCompanyName', 'contactEmail', 'contactPhoneNumber'])

<x-molecules.search-result-card>
    <x-slot:picture>
        <x-atoms.avatar image-url="{{ $contactAvatarUrl }}"></x-atoms.avatar>
    </x-slot>
    <x-slot:title >
        {{ $contactFullName }}
    </x-slot:title>

    <x-slot:subtitle >
        {{ $contactCompanyName }}
    </x-slot:subtitle>

    <div class="flex items-center">
        <x-atoms.mail-icon class="mr-2"></x-atoms.mail-icon>
        {{ $contactEmail }}
    </div>
    <div class="flex items-center">
        <x-atoms.phone-icon class="mr-2"></x-atoms.phone-icon>
        {{ $contactPhoneNumber }}
    </div>
</x-molecules.search-result-card>
