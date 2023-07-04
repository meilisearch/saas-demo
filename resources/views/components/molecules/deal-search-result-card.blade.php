@props([ 'href', 'companyName', 'dealValue', 'dealStatus', 'dealContactName'])

<x-molecules.search-result-card href="{{ $href }}">
    <x-slot:picture>
    </x-slot>
    <x-slot:title>
        {{ $companyName }}
    </x-slot:title>
    <x-slot:subtitle>
        {{ $dealValue }}
    </x-slot:subtitle>
       {{ $dealStatus}}
       <div class="flex gap-2 items-center mt-4">
        <x-atoms.contact-icon></x-atoms.contact-icon>
        {{ $dealContactName}}
    </div>
</x-molecules.search-result-card>
