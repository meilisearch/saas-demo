<template>
  <div
    class="flex h-[70vh] w-[52rem] flex-col rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8"
  >
    <header class="w-full pb-6 mb-4 border-b border-violet-200">
      <slot name="searchbar" />
    </header>
    <div class="h-full pr-3 overflow-y-auto">
      <slot name="default" />
    </div>
  </div>
</template>
