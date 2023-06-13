@props(['organizationLogoUrl', 'organizationName'])

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

        <div class="flex items-center gap-4">
            <a href="https://discord.gg/meilisearch" target="_blank" class="text-gray-400">
                <x-atoms.discord-icon></x-atoms.discord-icon>
            </a>
            <a href="https://twitter.com/meilisearch" target="_blank" class="text-gray-400">
                <x-atoms.twitter-icon></x-atoms.twitter-icon>
            </a>
            <a href="https://github.com/meilisearch/saas-demo" target="_blank" class="text-gray-400">
                <x-atoms.github-icon></x-atoms.github-icon>
            </a>
        </div>
    </div>
</header>
