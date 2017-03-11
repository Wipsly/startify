<template>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#profile-nav" type="button">Profile</button>
            <div class="collapse navbar-collapse remove-padding" id="profile-nav">
                <div class="block block-bordered">
                    <div class="block-header bg-gray-lighter">
                        <h3 class="block-title">Profile</h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav nav-pills nav-stacked push">
                            <router-link tag="li" :to="{ name: 'profile-settings' }">
                                <a><i class="si si-user push-5-r"></i> Personal</span></a>
                            </router-link>
                            <router-link tag="li" :to="{ name: 'security-settings' }">
                                <a><i class="si si-lock push-5-r"></i> Security</span></a>
                            </router-link>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <transition name="fade" mode="out-in" :duration="300">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>
