@storybook([
    'name' => 'Deal search result card',
    'args' => [
        'href' => '#',
        'companyName' => 'Meilisearch',
        'dealValue' => '$3000',
        'dealStatus' => 'lead',
        'dealContactName' => 'Jane Doe'
    ],
    'argTypes' => [
    ],
])

<x-molecules.deal-search-result-card href="{{ $href }}" dealStatus="{{ $dealStatus }}" companyName="{{ $companyName }}" dealValue="{{ $delValue}}" dealContactName="{{ $dealContactName }}">

</x-molecules.deal-search-result-card>
