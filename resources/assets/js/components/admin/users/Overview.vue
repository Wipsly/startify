<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Overview</h3>
            <ul>
                <li v-for="user in users">{{ user.name }}</li>
            </ul>
        </div>
        <div class="block-content">
            <v-client-table :data="users" :columns="columns"></v-client-table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                columns: ['id', 'name'],
                users: null
            }
        },
        mounted() {
            axios.get('/api/getAllUsers')
                    .then(response => {
                        this.users = response.data
                        console.log(response.data)
                    });
        }
    }
</script>
