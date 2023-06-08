@storybook([
    'name' => 'Active',
    'args' => [
        'href' => '#',
        'isActive' => true,
    ],
    'argTypes' => [],
])

<x-molecules.side-menu-item href="{{ $href }}" is-active="{{ $isActive }}">
    <x-slot:icon>
        <x-atoms.contact-icon></x-atoms.contact-icon>
    </x-slot:icon>
    Contacts
</x-molecules.side-menu-item>
