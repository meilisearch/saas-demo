@props(['href', 'isActive' => false])

<a :href="$href" @class([
    'flex items-center gap-2 px-4 py-2',
    'text-gray-500' => !$isActive,
    'rounded-lg bg-gray-100 text-gray-700' => $isActive,
])>
    {{ $icon }}

    <span class="text-sm font-medium"> {{ $slot }} </span>
</a>
