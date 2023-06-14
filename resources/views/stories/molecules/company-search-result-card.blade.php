@storybook([
    'name' => 'Company search result card',
    'args' => [
        'href' => '#',
        'companyName' => 'Meilisearch',
        'companyLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'associatedContactsNumber' => '3'
    ],
    'argTypes' => [
    ],
])

<x-molecules.company-search-result-card href="{{ $href }}" companyName="{{ $companyName }}" companyLogoUrl="{{ $companyLogoUrl}}" associatedContactsNumber="{{ $associatedContactsNumber }}">

</x-molecules.company-search-result-card>
