@props(['href'])

<x-atoms.card href="{{ $href }}">
    <div class="sm:flex sm:justify-start sm:gap-4 items-center">
        {{ $picture }}
        <div class="flex flex-col">
            <h3 class="text-base font-bold text-gray-900 sm:text-base">
                {{ $title }}
            </h3>
            <div class="text-sm">
                {{ $subtitle}}
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="text-sm text-gray-700">
            {{ $slot }}
        </div>
    </div>
</x-atoms.card>
