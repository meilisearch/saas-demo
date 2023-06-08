@props(['cardTitle', 'cardBody', 'cardFooter'])

<a href="#" class="relative block overflow-hidden rounded-md border border-gray-200 p-4 sm:p-6 lg:p-8">
    <div class="sm:flex sm:justify-between sm:gap-4">
        <div>
            <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                {{ $cardTitle }}
            </h3>
        </div>
    </div>

    <div class="mt-4">
        <p class="max-w-[40ch] text-sm text-gray-500">
            {{ $cardBody }}
        </p>
    </div>

    <div class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col">
            <p class="text-sm font-medium text-gray-500">
                {{ $cardFooter }}
            </p>
        </div>
    </div>
</a>
