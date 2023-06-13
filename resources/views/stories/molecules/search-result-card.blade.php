@storybook([
    'name' => 'Search result card',
    'args' => [
        'pictureUrl' => Vite::asset('resources/assets/meilisearch-logo.svg')
    ],
    'argTypes' => [
        'pictureUrl' => 'text'
    ],
])

<x-molecules.search-result-card>
    <x-slot:picture>
        <x-atoms.organization-logo :logo-url="Vite::asset('resources/assets/meilisearch-logo.svg')" :organization-name="$title"></x-atoms.organization-logo>
    </x-slot>
    <x-slot:title>
        Title
    </x-slot>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis nihil nemo maxime tempora vel. Aperiam, illo. Nihil, facilis.</p>
</x-molecules.search-result-card>
