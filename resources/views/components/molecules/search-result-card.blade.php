<x-atoms.card>
    <div class="sm:flex sm:justify-start sm:gap-4 items-center">
            {{ $picture }}
        <h3 class="text-base font-bold text-gray-900 sm:text-xl">
            {{ $title }}
        </h3>
    </div>

    <div class="mt-4">
        <p class="max-w-[40ch] text-sm text-gray-500">
            {{ $slot }}
        </p>
    </div>
</x-atoms.card>
