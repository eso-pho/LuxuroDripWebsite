<script setup>
import JetApplicationMark from '@/Components/ApplicationMark.vue';
import JetDropdownLink from '@/Components/DropdownLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
import JetDropdown from '@/Components/Dropdown.vue';
import JetNavLink from '@/Components/NavLink.vue';
import JetResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import SearchInput from '@/Components/SearchInput.vue';
import {ref} from "vue";
import {Inertia} from "@inertiajs/inertia";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
const showingNavigationDropdown = ref(false);

const logout = () => {
    Inertia.post(route('logout'));
};
</script>

<template>
    <nav class="bg-white border-gray-500 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">

            <!-- Hamburger-->
            <div class="-mr-2 sm:hidden">
                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                    <svg
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>

            <a href="/" class="flex items-center">
                <!--Logo-->
                <JetApplicationMark class="shrink-0 flex items-center" alt="LuxuroDrip Logo"/>
            </a>

            <!--Navigational Links-->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <JetDropdownLink href="#">
                    Orders
                </JetDropdownLink>

                <JetNavLink href="#">
                    Analytics
                </JetNavLink>

                <JetNavLink href="#">
                    Products
                </JetNavLink>
                <JetNavLink href="#">
                    User Management
                </JetNavLink>
            </div>
            <SearchInput/>


            <!--Right Side Stuff-->
            <div class="flex items-center">
                <!--Cart-->
                <JetNavLink href="#" class="mr-6 text-sm font-medium text-black dark:text-white hover:underline">Cart</JetNavLink>

                <!--Dashboard-->
<!--                <JetNavLink :href= "route('dashboard')" class="mr-6 text-sm font-medium text-blue-500 dark:text-white hover:underline">Dashboard </JetNavLink>-->

                <!--Profile-->
                <div class="ml-3 relative" v-if="$page.props.user">
                    <JetDropdown align="right" width="48">
                        <template #trigger>
                            <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition mr-6 text-sm font-medium text-black dark:text-white hover:underline">
                                <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" alt="">
                                Hi, {{ $page.props.user.first_name }}
                            </button>
                        </template>

                        <template #content>
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <JetDropdownLink :href="route('profile.show')">
                                Profile
                            </JetDropdownLink>

                            <div class="border-t border-gray-100" />

                            <!-- Authentication -->
                            <form @submit.prevent="logout">
                                <JetDropdownLink as="button">
                                    Log Out
                                </JetDropdownLink>
                            </form>
                        </template>
                    </JetDropdown>


                </div>
                <template v-else>
                    <!--Login-->
                    <JetNavLink :href="('login')" class="mr-6 text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</JetNavLink>

                    <!--Register-->
                    <JetNavLink :href="route('register')" class="mr-6 text-sm font-medium text-grey-500 dark:text-white hover:underline">Register</JetNavLink>
                </template>
            </div>
        </div>



        <!-- Responsive Navigation Menu -->
<!--        <div :class="{'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown}" class="sm:hidden">-->
<!--            <div class="pt-2 pb-3 space-y-1">-->
<!--                <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">-->
<!--                    Men's-->
<!--                </JetResponsiveNavLink>-->

<!--                <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">-->
<!--                    Women's-->
<!--                </JetResponsiveNavLink>-->

<!--                <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">-->
<!--                    Kid's-->
<!--                </JetResponsiveNavLink>-->

<!--                <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">-->
<!--                    Accessories-->
<!--                </JetResponsiveNavLink>-->
<!--            </div>-->
<!--            <div class="pt-4 pb-1 border-t border-gray-200">-->
<!--                <div class="flex items-center px-4">-->
<!--                    <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">-->
<!--                        <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">-->
<!--                    </div>-->

<!--                    <div>-->
<!--                        <div class="font-medium text-base text-gray-800">-->
<!--                            {{ $page.props.user.first_name }}-->
<!--                        </div>-->
<!--                        <div class="font-medium text-sm text-gray-500">-->
<!--                            {{ $page.props.user.email }}-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            <div class="mt-3 space-y-1">-->
<!--                <JetResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">-->
<!--                    Profile-->
<!--                </JetResponsiveNavLink>-->

<!--                &lt;!&ndash; Authentication &ndash;&gt;-->
<!--                <form method="POST" @submit.prevent="logout">-->
<!--                    <JetResponsiveNavLink as="button">-->
<!--                        Log Out-->
<!--                    </JetResponsiveNavLink>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
    </nav>
</template>
