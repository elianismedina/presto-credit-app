<script setup>

import { Link } from '@inertiajs/inertia-vue3';
import { Head, defineProps } from '@inertiajs/inertia-vue3';
import ApplicationLogoVue from '@/Components/ApplicationLogo.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

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
<script>
export default {
    data() {
        return {
            min: 150000,
            max: 1200000,
            slider: 150000,
        }
    },
}</script>

<template>

    <Head title="Welcome" />
    <div>
        <div class="flex justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="w-full max-w-2xl lg:max-w-full">

                <header class=" bg-slate-100">
                    <nav v-if="canLogin">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                        </Link>
                        <template v-else>
                            <div class="flex justify-between px-6 md:px-16 h-16 md:h-20">
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

                <main
                    class="flex flex-col items-center justify-start h-full bg-gradient-to-b from-primary-300 to-primary-700">
                    <section>
                        <div class="ml-6 py-8">
                            <h2 class="text-2xl font-bold md:text-6xl">Prestocredit es dinero <br> sin enredos.</h2>
                        </div>
                        <p class="text-md
                         md:text-lg md:ml-48 ml-6">
                            Pide tu cupo de crédito en 15 minutos y recibe el dinero en <strong>1 día hábil</strong> .
                            <br> Desde <strong>$150.000</strong> hasta
                            <strong>$1.200.000</strong>.
                            <br>
                            <span class="hidden lg:block">Sin trámites, filas, anticipos ni cargos ocultos.</span>
                        </p>
                        <div class="text-lg md:text-xl py-4 font-bold underline md:ml-48 ml-6">
                            <Link
                                class="ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                :href="route('login')">¿Cómo funciona tu cupo de crédito?</Link>
                        </div>
                    </section>
                    <section
                        class=" mb-4 rounded-md flex flex-col justify-center items-center bg-slate-100 h-full w-4/5 md:h-2/5 md:grid md:grid-cols-3 md:gap-2 md:max-w-5xl">

                        <div class="mb-2 mt-2 md:px-12 md:col-span-2">
                            <v-label class="font-bold mb-4">¿Cuánto dinero necesitas?</v-label>

                            <div class="mt-2 mb-2">

                                <v-slider v-model="slider" thumb-label="always" :max="max" :min="min" :step="10000"
                                    class="align-center" hide-details track-color="blue" thumb-color="black">
                                </v-slider>
                                <v-text-field v-model="slider" density="compact" style="width: 230px" type="number"
                                    hide-details single-line variant="outlined"></v-text-field>
                            </div>
                            <p class="text-sm">Ingresa múltiplos de $10.000</p>
                        </div>
                        <div class="mt-8 md:px-12">
                            <Link :href="route('applications.create')"
                                class="bg-primary-500 p-3 px-8 text-slate-100 font-bold w-full text-center">
                            Pedir mi
                            crédito
                            ya
                            <fa icon="arrow-right" class="ml-2" />
                            </Link>
                        </div>
                    </section>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70 bg-primary-300">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>
