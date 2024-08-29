@props(['organizationLogoUrl', 'organizationName', 'meilisearchToken'])

<header aria-label="Site Header" class="sticky top-0 z-10 bg-white shadow-sm">
    <div class="mx-auto flex h-16 items-center justify-between px-4">
        <div class="flex items-center gap-4">
            <a href="#">
                <x-atoms.organization-logo organization-name="{{ $organizationName }}"
                    logo-url="{{ $organizationLogoUrl }}">
                </x-atoms.organization-logo>
            </a>
            <div>
                <span class="font-medium">Meilisearch SaaS demo</span>
                <span class="ml-2 text-sm italic text-gray-400">{{ $organizationName }} workspace</span>
            </div>
        </div>

        <x-organisms.app-search meilisearch-token="{{ $meilisearchToken }}"></x-organisms.app-search>

        <div class="flex items-center gap-4">
            <a href="https://discord.meilisearch.com/?utm_campaign=saas-demo&utm_source=preview&utm_medium=navbar"
                target="_blank" class="text-gray-400 hover:text-blue-600 active:text-blue-500">
                <x-atoms.discord-icon></x-atoms.discord-icon>
            </a>
            <a href="https://twitter.com/meilisearch" target="_blank"
                class="text-gray-400 hover:text-blue-600 active:text-blue-500">
                <x-atoms.twitter-icon></x-atoms.twitter-icon>
            </a>
            <a href="https://github.com/meilisearch/saas-demo" target="_blank"
                class="text-gray-400 hover:text-blue-600 active:text-blue-500">
                <x-atoms.github-icon></x-atoms.github-icon>
            </a>
            <a href="https://www.meilisearch.com/?utm_campaign=saas-demo&utm_source=preview&utm_medium=navbar"
                target="_blank" class="text-gray-400 hover:text-blue-600 active:text-blue-500">
                <x-atoms.web-icon></x-atoms.web-icon>
            </a>
        </div>
    </div>
</header>
