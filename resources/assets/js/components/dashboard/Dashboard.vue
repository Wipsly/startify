<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Dashboard</h3>
        </div>
        <div class="block-content">
            <p>Hello {{ $store.user.name }}! </p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/getAuthUser')
                    .then(response => {
                        this.$store.user.name = response.data.name;
                    });
        }
    }
</script>
