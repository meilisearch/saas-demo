@props(['imageUrl', 'fullName'])
<x-molecules.search-result-card>
    <x-slot:picture>
        <x-atoms.avatar :imageUrl></x-atoms.avatar>
    </x-slot>
    <x-slot:title>
        {{ fullName }}
    </x-slot:title>
</x-molecules.search-result-card>
