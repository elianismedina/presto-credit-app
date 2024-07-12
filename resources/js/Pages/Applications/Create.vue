<script>
export default {
    name: 'ApplicationsCreate'
}
</script>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationForm from '@/Components/LoanApplications/ApplicationForm.vue';

const form = useForm({
    name: '',
    email: '',
    phone: '',
    message: '',
});
</script>
<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create loan application
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <ApplicationForm :form="form" @submit="form.post(route('applications.store'))" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>

</template>
