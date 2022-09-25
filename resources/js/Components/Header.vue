<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserLayout from '@/Layouts/UserLayout.vue';
import JetApplicationMark from '@/Components/ApplicationMark.vue';
import JetBanner from '@/Components/Banner.vue';
import JetDropdown from '@/Components/Dropdown.vue';
import JetDropdownLink from '@/Components/DropdownLink.vue';
import JetNavLink from '@/Components/NavLink.vue';
import JetResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/" class="flex items-center">
                <!--Logo-->
                <JetApplicationMark class="mr-3 h-6 sm:h-9" alt="LuxuroDrip Logo"/>
            </a>
            <div class="flex items-center">
                <JetNavLink :href="route('register')" class="mr-6 text-sm font-medium text-blue-500 dark:text-white hover:underline">Register</JetNavLink>
                <JetNavLink :href="route('login')" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</JetNavLink>
            </div>
        </div>

    </nav>
</template>
