<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import PromoSection from '@/Components/PromoSection.vue';
import ProductList from '@/Components/ProductList.vue';

</script>

<template>
    <Head title="Home"/>
    <Header></Header>
    <PromoSection/>
    <ProductList/>
    <ProductList/>
    <Footer></Footer>
</template>
