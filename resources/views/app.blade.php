<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    @env('production')
    <!-- Analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="QNBPJXIV" defer></script>
    @endenv
</head>

<body id="app">
    <x-layout user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}" user-email="{{ $userEmail }}"
        other-user-email="{{ $otherUserEmail }}" organization-logo-url="{{ $organizationLogoUrl }}"
        organization-name="{{ $organizationName }}" meilisearch-token="{{ $meilisearchToken }}">
        @yield('content')

    </x-layout>
    @stack('scripts')
</body>

</html>
