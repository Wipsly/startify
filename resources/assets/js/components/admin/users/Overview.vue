<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Overview</h3>
        </div>
        <div class="block-content">
            <v-client-table :data="users" :columns="columns" :options="options" v-if="ready"></v-client-table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: null,
                ready: false,
                columns: ['id', 'name', 'email', 'edit'],
                options: {
                    headings: {
                        id: 'Number',
                        name: 'Names',
                        email: 'Email',
                        edit: 'Action'
                    },
                    templates: {
                        edit: function(row) {
                            return "<a href='#!/${row.id}/edit'><i class='glyphicon glyphicon-edit'></i></a>"
                        }
                    }
                }
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
