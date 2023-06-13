@props(['imageUrl', 'fullName', 'companyName', 'email', 'phoneNumber'])
<x-molecules.search-result-card>
    <x-slot:picture>
        <x-atoms.avatar :$imageUrl></x-atoms.avatar>
    </x-slot>
    <x-slot:title >
        {{ $fullName }}
    </x-slot:title>

    <x-slot:subtitle >
        {{ $companyName }}
    </x-slot:subtitle>

    <div class="flex items-center">
        <x-atoms.mail-icon class="mr-2"></x-atoms.mail-icon>
        {{ $email }}
    </div>
    <div class="flex items-center">
        <x-atoms.phone-icon class="mr-2"></x-atoms.phone-icon>
        {{ $phoneNumber }}
    </div>
</x-molecules.search-result-card>
