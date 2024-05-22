<template>
    <div
        class="flex h-[70vh] w-[52rem] flex-col rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8">
        <header class="w-full mb-4 pb-6 border-b border-violet-200">
            <slot name="searchbar"></slot>
        </header>
        <div class="overflow-y-auto pr-3">
            <slot name="default"></slot>
        </div>
    </div>
</template>
