<script setup>

import PreLoanApplication from '@/Components/PreLoanApplication.vue';
</script>

<template>
    <div>
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-4 lg:p-8">
            <h1 class="text-2xl font-extrabold">CRÉDITO PRESTOCREDIT</h1>
            <div class="flex flex-row gap-4 items-center justify-between">
                <p class="font-semibold">Cupo disponible</p>
                <p class="bg-primary px-4 font-bold text-lg">$650.000</p>
            </div>
            <p class="mb-8 mt-4">Ten presente que tu nueva solicitud de crédito no podrá sobrepasar tu cupo
                aprobado.
            </p>
            <PreLoanApplication />
        </div>
    </div>
</template>
