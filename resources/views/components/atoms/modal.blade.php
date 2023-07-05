<div class="z-100 fixed top-0 right-0 flex h-full w-full justify-center overflow-hidden bg-gray-200/50 p-4 pt-[12vh]">
    <div {{ $attributes->merge(['class' => 'flex h-[70vh] w-[52rem] flex-col rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8 divide-y divide-violet-100']) }}>
        <header {{ $attributes->merge(['class' => 'w-full mb-4']) }}>
            {{ $header }}
        </header>
        <div class="flex flex-row justify-between mt-4 overflow-y-scroll pt-6 gap-4">
            {{ $slot }}
        </div>
    </div>
</div>
