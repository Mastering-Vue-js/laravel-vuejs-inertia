<script setup>
import { reactive } from 'vue'
import { router, useForm } from '@inertiajs/vue3'
import Layout from '../components/Layout.vue';

const form = useForm({
    full_name: null,
    password: null,
    email: null,
})

function submit() {
    // router.post('/contact', form)
    form.post('/contact');
    form.reset();
}

</script>
<template>
    <Layout>
        <h1>
            This is contact page
        </h1>
        <p v-if="$page.props.flash.message">{{ $page.props.flash.message }}</p>
        <form @submit.prevent="submit">
            <div>
                <label for="full_name">Name:</label>
                <input id="full_name" v-model="form.full_name" />
                <p v-if="form.errors.full_name">{{ form.errors.full_name }}</p>
            </div>
            <div>
                <label for="email">Email:</label>
                <input id="email" v-model="form.email" />
                <p v-if="form.errors.email">{{ form.errors.email }}</p>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" v-model="form.password" />
                <p v-if="form.errors.password">{{ form.errors.password }}</p>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </Layout>
</template>