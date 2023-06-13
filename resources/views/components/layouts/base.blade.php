@props(['userAvatarUrl', 'userEmail', 'userName', 'organizationLogoUrl', 'organizationName'])

<x-organisms.navbar avatar-url="{{ $userAvatarUrl }}" organization-logo-url="{{ $organizationLogoUrl }}"
    organization-name="{{ $organizationName }}">
</x-organisms.navbar>

<div class="flex">
    <x-organisms.side-menu user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}"
        user-email="{{ $userEmail }}" class="w-96"></x-organisms.side-menu>
    <div class="px-10 py-8">
        {{ $slot }}
    </div>
</div>