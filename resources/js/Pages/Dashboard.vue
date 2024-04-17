<script setup>
import Uploader from "@/Components/Uploader.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";

onMounted(() => {
    Echo.channel("videos").listen("Test", (e) => {
        console.log(e);
    });
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <Uploader />
    </AuthenticatedLayout>
</template>
