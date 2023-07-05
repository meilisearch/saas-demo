<x-atoms.modal>
    <x-slot:header>
        <x-molecules.search-input class="w-full"></x-molecules.search-input>
    </x-slot:header>
    <div class="flex flex-row justify-between mt-4 overflow-y-scroll pt-6 gap-4">
        {{ $slot }}
    </div>
</x-atoms.modal>
