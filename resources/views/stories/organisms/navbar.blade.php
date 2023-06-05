@storybook([
    'name' => 'Navbar',
    'layout' => 'fullscreen',
    'args' => [
        'avatarUrl' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
        'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'organizationName' => 'Meilisearch',
    ],
    'argTypes' => [],
])

<x-organisms.navbar avatar-url="{{ $avatarUrl }}" organization-logo-url="{{ $organizationLogoUrl }}"
    organization-name="{{ $organizationName }}">
</x-organisms.navbar>
