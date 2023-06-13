@storybook([
    'name' => 'Search result card',
    'args' => [
        'title' => 'Title',
        'pictureUrl' => Vite::asset('resources/assets/meilisearch-logo.svg')
    ],
    'argTypes' => [
        'title' => 'text',
        'pictureUrl' => 'text'
    ],
])

<x-molecules.search-result-card :$title>
    <x-slot:picture>
        <x-atoms.organization-logo :logo-url="Vite::asset('resources/assets/meilisearch-logo.svg')" :organization-name="$title"></x-atoms.organization-logo>
    </x-slot>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis nihil nemo maxime tempora vel. Aperiam, illo. Nihil, facilis.</p>
</x-molecules.search-result-card>
