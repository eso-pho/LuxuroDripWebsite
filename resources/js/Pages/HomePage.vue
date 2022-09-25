<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import Carousel from '@/Components/carousel.vue';
import ProductList from '@/Components/ProductList.vue';

</script>

<template>
    <Head title="Home"/>
    <Header></Header>
    <Carousel class="bg-rosa-500"></Carousel>
    <ProductList/>
    <ProductList/>
    <Footer></Footer>
</template>
