<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">User</h3>
        </div>
        <div class="block-content">
            <p>{{ username }}</p>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                username: null
            }
        },
        mounted() {
            axios.get('/api/user')
                    .then(response => {
                        console.log(response.data);
                        this.username = response.data.name;
                    });
        }
    }
</script>
