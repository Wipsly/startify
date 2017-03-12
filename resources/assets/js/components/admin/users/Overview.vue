<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Personal</h3>
        </div>
        <div class="block-content">
           <p>Overview</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: null
            }
        },
        mounted() {
            axios.get('/api/getAllUsers')
                    .then(response => {
                        console.log(response.data)
                    });
        }
    }
</script>
