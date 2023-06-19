<x-atoms.modal class="divide-y divide-violet-100">
    <x-slot:header>
        <x-molecules.search-input class="w-full"></x-molecules.search-input>
    </x-slot:header>
    <div class="flex flex-col mt-4 gap-4 overflow-y-scroll pt-6">
        {{ $slot }}
    </div>
</x-atoms.modal>
