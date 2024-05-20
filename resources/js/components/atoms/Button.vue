<script setup lang="ts">
const props = defineProps<{
	buttonText: string
}>()
</script>

<template>
	<button
		class="px-10 py-3 mx-auto text-sm font-medium text-indigo-600 border border-indigo-600 rounded hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500 disabled:opacity-75 disabled:text-gray-600 disabled:border-gray-600 disabled:hover:bg-white">
		<slot name="default">
			{{ props.buttonText }}
		</slot>
	</button>
</template>
