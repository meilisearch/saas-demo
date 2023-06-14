@storybook([
    'name' => 'Company search result card',
    'args' => [
        'companyName' => 'Meilisearch',
        'companyLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
        'associatedContactsNumber' => '3'
    ],
    'argTypes' => [
    ],
])

<x-molecules.company-search-result-card companyName="{{ $companyName }}" companyLogoUrl="{{ $companyLogoUrl}}" associatedContactsNumber="{{ $associatedContactsNumber }}">

</x-molecules.company-search-result-card>
