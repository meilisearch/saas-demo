@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'relative block overflow-hidden rounded-md border border-gray-200 my-2 p-2 sm:p-4 lg:p-6 h-48']) }}>
    {{ $slot }}
</a>
