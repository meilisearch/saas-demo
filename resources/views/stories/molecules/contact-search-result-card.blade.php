@storybook([
    'name' => 'Contact search result card',
    'args' => [
        'href' => '#',
        'contactAvatarUrl' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
        'contactFullName' => 'Jane Doe',
        'contactCompanyName' => 'Acme Inc',
        'contactEmail' => 'janedoe@acme.com',
        'contactPhoneNumber' => '+1 05556467'

    ],
    'argTypes' => [
    ],
])

<x-molecules.contact-search-result-card href="{{ $href }}" contact-avatar-url="{{ $contactAvatarUrl }}" contact-full-name="{{ $contactFullName }}" contact-company-name="{{ $contactCompanyName }}" contact-email="{{ $contactEmail }}" contact-phone-number="{{ $contactPhoneNumber }}">

</x-molecules.contact-search-result-card>
