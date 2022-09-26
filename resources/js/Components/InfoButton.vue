<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-aqua-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-aqua-700 active:bg-aqua-900 focus:outline-none focus:border-aqua-900 focus:ring focus:ring-aqua-300 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
