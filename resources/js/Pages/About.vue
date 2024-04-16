<script setup>
import Layout from '../components/Layout.vue';
defineProps({ about: Object })
</script>
<template>
    <Layout>
        <h1>
            This is about page
        </h1>
        <p>{{ about }}</p>
    </Layout>
</template>