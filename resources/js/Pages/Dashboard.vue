<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Prestocredit a 1 cuota
            </h2>
        </template>

        <div class="h-full mt-4 md:grid md:grid-cols-3">
            <div class="flex-col items-center mb-4 hidden md:flex">
                <h1 class="text-3xl font-bold">Mis productos</h1>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 col-span-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
