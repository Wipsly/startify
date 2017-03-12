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
            console.log(this.$store.user.name)
            if(this.$store.user.name == null)
                this.$swal({
                    title: 'Welcome to Startify!',
                    type: 'success',
                    timer: 1500,
                    showConfirmButton: false
                })
        }
    }
</script>
