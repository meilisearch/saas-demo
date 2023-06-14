@props([ 'href', 'dealStatus', 'companyName', 'value', 'dealOwner', 'dealProspect'])

<x-molecules.search-result-card href="{{ $href }}">
    <x-slot:picture>
        <x-dynamic-component :component="'atoms.' . $dealStatus . '-icon'"/>
    </x-slot>
    <x-slot:title>
        {{ $companyName }}
    </x-slot:title>
    <x-slot:subtitle>
        {{ $value }}
    </x-slot:subtitle>
       <p> Owner: {{ $dealOwner }} </p>
       <p> Prospect: {{ $dealProspect }} </p>
</x-molecules.search-result-card>
