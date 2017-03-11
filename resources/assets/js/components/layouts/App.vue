<template>
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
        <app-sidebar></app-sidebar>
        <app-header></app-header>
        <app-content></app-content>
    </div>
</template>

<script>
    import AppSidebar from './AppSidebar.vue'
    import AppHeader from './AppHeader.vue'
    import AppContent from './AppContent.vue'

    export default {
        components: {
            AppSidebar,
            AppHeader,
            AppContent
        },
        mounted() {
            this.$events.listen('updateUserPersonal', form => (
                this.$store.user.name = form)
            );
            axios.get('/api/getAuthUser')
                    .then(response => {
                        this.$store.user.name = response.data.name;
                    });
        }
    }
</script>


