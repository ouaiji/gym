<template>
    <app-layout>
        <div class="container mx-auto px-20 py-10">
            <p>This is Dashboard, welcome</p>
            <div class="" v-for="(row, index) in data" :key="index">
                <p>{{ row.id }}</p>
                <p>{{ row.name }}</p>
                <p>{{ row.email }}</p>
                <p>{{ row.created_at }}</p>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout
    },
    props: ["data"]
};
</script>
