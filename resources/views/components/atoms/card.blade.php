@props(['href'])
<a href="{{ $href }}" class="relative block overflow-hidden rounded-md border border-gray-200 p-4 sm:p-6 lg:p-8 max-h-40 w-full">
    {{ $slot }}
</a>
