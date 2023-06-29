<template>
    <div class="flex h-[70vh] w-[52rem] flex-col rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8 divide-y divide-violet-100">
        <header class="w-full mb-4">
            <slot name="searchbar"></slot>
        </header>
        <div class="flex flex-row justify-between mt-4 overflow-y-scroll pt-6 gap-4">
            <slot name="results"></slot>
        </div>
    </div>
</template>
