@storybook([
    'name' => 'Deal search result card',
    'args' => [
        'href' => '#',
        'dealStatus' => 'lead',
        'companyName' => 'Meilisearch',
        'value' => '$3000',
        'dealOwner' => 'Jane Doe',
        'dealProspect' => 'John Doe'
    ],
    'argTypes' => [
    ],
])

<x-molecules.deal-search-result-card href="{{ $href }}" dealStatus="{{ $dealStatus }}" companyName="{{ $companyName }}" value="{{ $value}}" dealOwner="{{ $dealOwner }}" dealProspect="{{ $dealProspect }}">

</x-molecules.deal-search-result-card>
