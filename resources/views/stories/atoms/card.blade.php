@storybook([
    'name' => 'Card',
    'args' => [
        'cardTitle' => 'Title',
        'cardBody' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos dicta ad at nesciunt corrupti!',
        'cardFooter' => 'Footer',
    ],
    'argTypes' => [],
])

<x-atoms.card :$cardTitle :$cardBody :$cardFooter>
</x-atoms.card>
