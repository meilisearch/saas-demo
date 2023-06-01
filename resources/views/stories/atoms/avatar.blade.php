@storybook([
    'name' => 'Avatar',
    'args' => [
        'imageUrl' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80'
    ],
    'argTypes' => [
        'imageUrl' => 'text'
    ]
])

<x-atoms.avatar
  :image-url="$imageUrl"
>
</x-atoms.avatar>
