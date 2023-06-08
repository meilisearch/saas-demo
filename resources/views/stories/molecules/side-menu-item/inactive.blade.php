@storybook([
    'name' => 'Inactive',
    'args' => [
        'href' => '#',
    ],
    'argTypes' => [],
])

<x-molecules.side-menu-item href="{{ $href }}">
    <x-slot:icon>
        <x-atoms.contact-icon></x-atoms.contact-icon>
    </x-slot:icon>
    Contacts
</x-molecules.side-menu-item>
