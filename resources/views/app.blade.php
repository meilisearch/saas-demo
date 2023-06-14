<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <x-layouts.base user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}"
        user-email="{{ $userEmail }}" other-user-email="{{ $otherUserEmail }}"
        organization-logo-url="{{ $organizationLogoUrl }}" organization-name="{{ $organizationName }}">
        @yield('content')
    </x-layouts.base>
</body>

</html>
