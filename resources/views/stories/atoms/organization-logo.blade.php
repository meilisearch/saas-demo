@storybook([
    'name' => 'Organization Logo',
    'args' => [
        'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'organizationName' => 'Meilisearch',
    ],
    'argTypes' => [],
])

<x-atoms.organization-logo organization-name="{{ $organizationName }}" logo-url="{{ $organizationLogoUrl }}">
</x-atoms.organization-logo>
