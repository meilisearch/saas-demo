<template>
    <div
        class="flex h-[70vh] w-[52rem] flex-col rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8">
        <header class="w-full mb-4 pb-6 border-b border-violet-200">
            <slot name="searchbar"></slot>
        </header>
        <div class="overflow-y-scroll">
            <slot name="default"></slot>
        </div>
        <!-- <div class="flex flex-row justify-between gap-4 mt-4">
            <div class="w-[30%]">
                <div class="text-center uppercase text-slate-600 text-sm font-semibold">Companies</div>
            </div>
            <div class="w-[30%]">
                <div class="text-center uppercase text-slate-600 text-sm font-semibold">Contacts</div>
            </div>
            <div class="w-[30%]">
                <div class="text-center uppercase text-slate-600 text-sm font-semibold">Deals</div>
            </div>
        </div> -->
        <div class="flex flex-row justify-between mt-4 overflow-y-scroll pt-6 gap-4">
            <slot name="results"></slot>
        </div>
    </div>
</template>
