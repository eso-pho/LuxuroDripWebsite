<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-habanero-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-habanero-700 active:bg-habanero-900 focus:outline-none focus:border-habanero-900 focus:ring focus:ring-habanero-300 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
