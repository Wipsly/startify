<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Test</div>

                    <div class="panel-body">

                        <!-- Begin Form -->
                        <form @submit.prevent="login" @keydown="form.errors.clear($event.target.name)" class="form-horizontal">
                            <alert-error :form="form"></alert-error>
                            <alert-success :form="form" message="Success!"></alert-success>

                            <!-- Begin Form Field Username -->
                            <div class="form-group" :class="{ 'has-error': form.errors.has('username') }">
                                <label for="username" class="col-md-3 control-label">Username</label>
                                <div class="col-md-6">
                                    <input v-model="form.username" type="text" name="username" id="username" class="form-control">
                                    <has-error :form="form" field="username"></has-error>
                                </div>
                            </div>
                            <!-- End Form Field Username -->

                            <!-- Begin Form Submit -->
                            <div class="form-group">
                                <div class="col-md-3 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                </div>
                            </div>
                            <!-- End Form Submit -->

                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Form, HasError, AlertError, AlertSuccess } from 'vform'

    Vue.component('has-error', HasError)
    Vue.component('alert-error', AlertError)
    Vue.component('alert-success', AlertSuccess)

    export default {
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
