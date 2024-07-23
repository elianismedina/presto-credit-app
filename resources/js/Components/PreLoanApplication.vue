<script setup>
import { Link } from '@inertiajs/inertia-vue3';
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
    <div>
        <section class="mb-2 rounded-md flex flex-col justify-center items-center bg-slate-100 h-full">

            <div class="mb-2 mt-2 p-4">
                <v-label class="font-bold mb-4">¿Cuánto dinero necesitas?</v-label>

                <div class="mt-6 mb-2">
                    <v-slider v-model="slider" thumb-label="always" :max="max" :min="min" :step="10000"
                        class="align-center" hide-details track-color="blue" thumb-color="black">
                    </v-slider>
                    <v-text-field v-model="slider" density="compact" style="width: 230px" type="number" hide-details
                        single-line variant="outlined"></v-text-field>
                </div>
                <p class="text-sm">Ingresa múltiplos de $10.000</p>
            </div>
            <div class="md:px-24 md:py-4 mb-8">
                <Link :href="route('dashboard')"
                    class="bg-primary-500 p-3 px-8 text-slate-100 font-bold w-full text-center">
                Pedir mi
                crédito
                ya
                <fa icon="arrow-right" class="ml-2" />
                </Link>
            </div>
        </section>
    </div>
</template>
