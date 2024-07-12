<script>
export default {
    name: 'ApplicationsForm',
};

</script>
<script setup>
defineProps({
    form: {
        type: Object,
        required: true,
    },
    updating: {
        type: Boolean,
        required: false,
        default: false,
    },
});
defineEmits(['submit']);
</script>
<template>
    <div>
        ApplicationForm
    </div>
</template>
