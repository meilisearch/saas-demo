@storybook([
    'name' => 'Contact Search Result Card',
    'args' => [
        'imageUrl' => 'https://images.unsplash.com/photo-1614644147724-2d4785d69962?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80',
        'fullName' => 'Jane Doe',
        'companyName' => 'Acme Inc.',
        'email' => 'janedoe@acme.inc',
        'phoneNumber' => '+00 10555890'
    ],
    'argTypes' => [
        'imageUrl' => 'text',
        'fullName' => 'text',
        'companyName' => 'text',
        'email' => 'text',
        'phoneNumber' => 'text'
    ]
])

<x-molecules.contact-search-result-card :$imageUrl :$fullName :$companyName :$email :$phoneNumber>
</x-molecules.contact-search-result-card>
