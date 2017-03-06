<template>
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <transition name="fade" mode="out-in" :duration="300">
                <router-view></router-view>
            </transition>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</template>
