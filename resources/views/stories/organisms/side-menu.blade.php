@storybook([
    'name' => 'Side Menu',
    'args' => [
        'userAvatarUrl' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
        'userName' => 'John Doe',
        'userEmail' => 'john.doe@example.com',
    ],
    'argTypes' => [],
])

<x-organisms.side-menu user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}"
    user-email="{{ $userEmail }}"></x-organisms.side-menu>
