@storybook([
    'name' => 'Modal',
    'args' => [],
    'argTypes' => [],
])

<x-atoms.modal>
    <x-slot:header>
        <x-atoms.input></x-atoms.input>
    </x-slot>
    <div>
        Some content
    </div>
</x-atoms.modal>
