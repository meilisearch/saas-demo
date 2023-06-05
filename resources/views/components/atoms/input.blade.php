@props([
  'placeholder' => ''
])


<input
  class="h-10 text-sm placeholder-gray-300 border-gray-200 rounded-lg pe-10 focus:z-10"
  placeholder="{{ $placeholder }}"
  type="text"
/>
