<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Security</h3>
        </div>
        <div class="block-content">
            <!-- Begin Form -->
            <form @submit.prevent="updateUserSecurtiy" @keydown="form.errors.clear($event.target.name)" class="form-horizontal">
                <!-- Begin Alerts -->
                <alert-error :form="form"></alert-error>
                <alert-success :form="form" message="Your password has been updated."></alert-success>
                <!-- End Alerts -->

                <!-- Begin Form Field Password -->
                <div class="form-group" :class="{ 'has-error': form.errors.has('password') }">
                    <label for="name" class="col-md-1 control-label">Password</label>
                    <div class="col-md-10">
                        <input v-model="form.password" type="password" name="form.password" class="form-control" id="password">
                        <has-error :form="form" field="password"></has-error>
                    </div>
                </div>
                <!-- End Form Field Password -->

                <!-- Begin Form Field Password Confirmation-->
                <div class="form-group" :class="{ 'has-error': form.errors.has('password_confirmation') }">
                    <label for="name" class="col-md-1 control-label">Confirm Password</label>
                    <div class="col-md-10">
                        <input v-model="form.password_confirmation" type="password" name="form.password_confirmation" id="password_confirmation" class="form-control">
                        <has-error :form="form" field="password_confirmation"></has-error>
                    </div>
                </div>
                <!-- End Form Field Password Confirmation -->

                <!-- Begin Form Submit -->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1">
                        <button :disabled="form.busy" type="submit" class="btn btn-primary">
                            <i v-if="form.busy" class="fa fa-fw fa-spinner fa-spin"></i>
                            <i v-else class="si si-refresh push-4-r"></i>
                            Update
                        </button>
                    </div>
                </div>
                <!-- End Form Submit -->

            </form>
            <!-- End Form -->
        </div>
    </div>
</template>

<script>
    import { Form, HasError, AlertError, AlertSuccess } from 'vform'

    export default {
        components: {
            Form,
            HasError,
            AlertError,
            AlertSuccess
        },
        data() {
            return {
                form: new Form({
                    password: null
                })
            }
        },
        methods: {
            updateUserSecurtiy() {
                this.form.post('/api/updateUserSecurity')
            }
        }
    }
</script>
