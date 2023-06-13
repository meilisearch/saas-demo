@storybook([
    'name' => 'Search result card',
    'args' => [
        'pictureUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'organizationName' => 'Meilisearch'
    ],
    'argTypes' => [
        'pictureUrl' => 'text'
    ],
])

<x-molecules.search-result-card>
    <x-slot:title>
        Title
    </x-slot>
    <x-slot:subtitle>
        Subtitle
    </x-slot>
    <x-slot:picture>
        <x-atoms.organization-logo :logo-url="Vite::asset('resources/assets/meilisearch-logo.svg')" :organization-name="$organizationName"></x-atoms.organization-logo>
    </x-slot>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis nihil nemo maxime tempora vel. Aperiam, illo. Nihil, facilis.</p>
</x-molecules.search-result-card>
