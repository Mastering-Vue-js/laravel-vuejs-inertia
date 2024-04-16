<script setup>
import Layout from '../components/Layout.vue';
defineProps({ users: Object })
</script>
<template>
    <Layout>
        <h1>
            This is home page
        </h1>
        <p> {{ users }}</p>
    </Layout>
</template>