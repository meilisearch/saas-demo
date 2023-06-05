@props(['organizationName', 'logoUrl'])

<div class="flex h-10 w-10 items-center overflow-hidden rounded bg-gray-100 p-1">
    <span class="sr-only">Logo</span>
    <img src="{{ $logoUrl }}" alt="{{ $organizationName }}">
</div>
