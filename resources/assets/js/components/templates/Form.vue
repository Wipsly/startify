<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Example</h3>
        </div>
        <div class="block-content">

            <!-- Begin Form -->
            <form @submit.prevent="login" @keydown="form.errors.clear($event.target.name)" class="form-horizontal">
                <!-- Begin Alerts -->
                <alert-error :form="form"></alert-error>
                <alert-success :form="form" message="Success!"></alert-success>
                <!-- End Alerts -->

                <!-- Begin Form Field Username -->
                <div class="form-group" :class="{ 'has-error': form.errors.has('username') }">
                    <label for="username" class="col-md-1 control-label">Username</label>
                    <div class="col-md-10">
                        <input v-model="form.username" type="text" name="username" id="username" class="form-control">
                        <has-error :form="form" field="username"></has-error>
                    </div>
                </div>
                <!-- End Form Field Username -->

                <!-- Begin Form Submit -->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1">
                        <button type="submit" class="btn btn-primary">Test</button>
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
                    username: null
                })
            }
        },

        methods: {
            login() {
               this.form.post('/api/test')
                       .then(({ data }) => { console.log(data) })
            }
        }
    }
</script>
