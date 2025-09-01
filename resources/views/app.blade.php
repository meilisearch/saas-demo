<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    @env('production')
    <!-- gtag consent -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
        });
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TNSCGVBH');</script>
    <!-- End Google Tag Manager -->
    <!-- Start cookieyes banner -->
    <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/0ec5a8e516eccaa724a461f6/script.js"></script>
    <!-- End cookieyes banner -->
    @endenv

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
    <!-- Fathom Analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="QNBPJXIV" defer></script>
    @endenv
</head>

<body id="app">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNSCGVBH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- Header --}}
    <x-navbar avatar-url="{{ $userAvatarUrl }}" organization-logo-url="{{ $organizationLogoUrl }}"
        organization-name="{{ $organizationName }}" meilisearch-token="{{ $meilisearchToken }}">
    </x-navbar>

    {{-- Side menu --}}
    <div class="fixed bottom-0 left-0 top-16 w-64">
        <x-side-menu user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}"
            user-email="{{ $userEmail }}" other-user-email="{{ $otherUserEmail }}"></x-side-menu>
    </div>

    {{-- Content --}}
    <div class="fixed bottom-0 right-0 left-64 top-16 overflow-y-auto">
        <div class="relative">
            @yield('content')
        </div>
    </div>

    @stack('scripts')
</body>

</html>
