@props([
    'userAvatarUrl',
    'userEmail',
    'userName',
    'otherUserEmail',
    'organizationLogoUrl',
    'organizationName',
    'meilisearchToken',
])

{{-- Header --}}
<x-navbar avatar-url="{{ $userAvatarUrl }}" organization-logo-url="{{ $organizationLogoUrl }}"
    organization-name="{{ $organizationName }}" meilisearch-token="{{ $meilisearchToken }}">
</x-navbar>

{{-- Side menu --}}
<div class="fixed bottom-0 left-0 top-16 w-64">
    <x-side-menu user-avatar-url="{{ $userAvatarUrl }}" user-name="{{ $userName }}" user-email="{{ $userEmail }}"
        other-user-email="{{ $otherUserEmail }}"></x-side-menu>
</div>

{{-- Content --}}
<div class="fixed bottom-0 right-0 left-64 top-16 overflow-y-auto">
    <div class="relative">
        {{ $slot }}
    </div>
</div>
