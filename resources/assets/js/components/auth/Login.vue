<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form @submit.prevent="login" class="form-horizontal">

                            <div class="form-group">
                                <label for="username" class="col-md-3 control-label">Username</label>
                                <div class="col-md-6">
                                    <input v-model="form.username" type="text" name="username" id="username" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    username: null
                },
                errors: {}
            }
        },

        methods: {
            login() {
                axios.post('/api/test', this.form)
                        .then(response => {
                            console.log(response.data);
                        })
                        .catch(error => {
                            this.errors = error.response.data;
                        });
            }
        }
    }
</script>
