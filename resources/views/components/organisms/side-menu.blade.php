@props(['userAvatarUrl', 'userName', 'userEmail', 'otherUserEmail'])

<div class="border-e flex h-screen flex-col justify-between bg-white">
    <div class="px-4 py-6">
        <nav aria-label="Main Nav" class="flex flex-col space-y-1">
            <x-molecules.side-menu-item href="{{ route('deals.index') }}"
                is-active="{{ Route::currentRouteName() == 'deals.index' }}">
                <x-slot:icon>
                    <x-atoms.home-icon></x-atoms.home-icon>
                </x-slot:icon>
                Deals
            </x-molecules.side-menu-item>

            <x-molecules.side-menu-item href="{{ route('contacts.index') }}"
                is-active="{{ Route::currentRouteName() == 'contacts.index' }}">
                <x-slot:icon>
                    <x-atoms.contact-icon></x-atoms.contact-icon>
                </x-slot:icon>
                Contacts
            </x-molecules.side-menu-item>

            <x-molecules.side-menu-item href="{{ route('companies.index') }}"
                is-active="{{ Route::currentRouteName() == 'companies.index' }}">
                <x-slot:icon>
                    <x-atoms.company-icon></x-atoms.company-icon>
                </x-slot:icon>
                Companies
            </x-molecules.side-menu-item>
        </nav>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
        <form action="/login" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ $otherUserEmail }}">
            <button type="submit" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
                <x-atoms.avatar image-url="{{ $userAvatarUrl }}"></x-atoms.avatar>

                <div class="text-left">
                    <p class="text-xs">
                        <strong class="block font-medium">{{ $userName }}</strong>

                        <span> {{ $userEmail }} </span>
                    </p>
                </div>
            </button>
        </form>
    </div>
</div>
