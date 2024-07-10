<script setup>

import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogoVue from '@/Components/ApplicationLogo.vue';



defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>

    <Head title="Welcome" />
    <div>
        <div class="flex justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="w-full max-w-2xl lg:max-w-7xl">
                <header class=" bg-primary-300">
                    <nav v-if="canLogin">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                        </Link>
                        <template v-else>
                            <div class="flex justify-between px-4 md:px-8 h-16 md:h-20">
                                <ApplicationLogoVue class="h-20 w-20 ml-4" />
                                <div class="flex flex-row gap-4 md:gap-12">
                                    <div class="py-6 hidden lg:block">
                                        <Link :href="route('login')"
                                            class="bg-primary-500 p-3 px-8 text-slate-100 font-bold">
                                        Pedir mi
                                        crédito
                                        ya
                                        <fa icon="arrow-right" class="ml-2" />
                                        </Link>

                                    </div>
                                    <div class="py-6">
                                        <Link v-if="canRegister" :href="route('register')"
                                            class="font-semibold rounded-md px-3 py-8 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Registrarse
                                        </Link>
                                    </div>
                                    <div class="py-6">
                                        <Link :href="route('login')"
                                            class="font-semibold rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Ingresar
                                        </Link>
                                    </div>
                                    <div
                                        class="flex flex-row gap-2 bg-primary-500 px-2 h-1/2 items-center justify-between mt-4 rounded-md p-0.5">
                                        <p class="hidden lg:block py-8">Menu</p>
                                        <fa icon="bars" class="text-2xl text-black dark:text-white py-8" />
                                    </div>

                                </div>

                            </div>

                        </template>
                    </nav>
                </header>

                <main class="mt-6 h-screen">

                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70 bg-primary-300">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>
