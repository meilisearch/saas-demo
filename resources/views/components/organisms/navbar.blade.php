@props(['avatarUrl', 'organizationLogoUrl', 'organizationName'])

<header aria-label="Site Header" class="sticky top-0 z-10 bg-white shadow-sm">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4">
        <div class="flex items-center gap-4">
            <a href="#">
                <x-atoms.organization-logo organization-name="{{ $organizationName }}"
                    logo-url="{{ $organizationLogoUrl }}">
                </x-atoms.organization-logo>
            </a>
            <div class="font-medium">{{ $organizationName }} CRM</div>
        </div>

        <x-molecules.search-input></x-molecules.search-input>

        <div class="items-center">
            <x-atoms.avatar image-url="{{ $avatarUrl }}"></x-atoms.avatar>
        </div>
    </div>
</header>
