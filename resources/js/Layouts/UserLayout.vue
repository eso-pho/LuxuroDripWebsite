<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

defineProps({
    title: String,
});
</script>

<template>
    <Head :title="title" />
<!--Header-->
    <Header></Header>
<!--Footer-->
    <Footer></Footer>
</template>
