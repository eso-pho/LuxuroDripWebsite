<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import JetAuthenticationCard from '@/Components/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import JetButton from '@/Components/PrimaryButton.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Home" />
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-baigan-500 to-rosa-500">
            <JetAuthenticationCardLogo />
            <div v-if="canLogin">
                <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-lime-700 dark:text-lime-500 underline">Dashboard</Link>

                <template v-else>
                    <Link :href="route('login')" class="text-sm text-lime-700 dark:text-lime-500 underline">Log in</Link>
                    <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-lime-700 dark:text-lime-500 underline">Register</Link>
                </template>
            </div>
        </div>
</template>
