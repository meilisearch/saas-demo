@storybook([
    'name' => 'Navbar',
    'layout' => 'fullscreen',
    'args' => [
        'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'organizationName' => 'Meilisearch',
    ],
    'argTypes' => [],
])

<x-organisms.navbar avatar-url="{{ $avatarUrl }}" organization-logo-url="{{ $organizationLogoUrl }}"
    organization-name="{{ $organizationName }}">
</x-organisms.navbar>
