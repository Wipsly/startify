<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Overview</h3>
        </div>
        <div class="block-content">
            <v-client-table :data="users" :columns="columns" v-if="ready"></v-client-table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                columns: ['id', 'name', 'email'],
                users: null,
                ready: false
            }
        },
        mounted() {
            axios.get('/api/getAllUsers')
                    .then(response => {
                        this.users = response.data
                        this.ready = true;
                        console.log(response.data)
                    });
        }
    }
</script>
