<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-navy-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-navy-700 active:bg-navy-900 focus:outline-none focus:border-navy-900 focus:ring focus:ring-navy-300 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
