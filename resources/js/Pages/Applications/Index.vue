<script>
export default {
    name: 'ApplicationsIndex',
};
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

const { user } = usePage().props;
defineProps({
    applications: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <AppLayout title="Applications">
        <div class="p-6 bg-white rounded-lg shadow">
            <h1 class="text-2xl font-semibold text-gray-800">Applications</h1>
            <p class="mt-2 text-sm text-gray-600">List of all applications</p>
        </div>
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200 rounded-md shadow-md">
                    <div class="flex justify-between">
                        <Link :href="route('applications.create')"
                            class="text-slate-100 bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded-md">
                        Create Application
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
