<template>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Personal</h3>
        </div>
        <div class="block-content">
            <!-- Begin Form -->
            <form @submit.prevent="updateUserPersonal" @keydown="form.errors.clear($event.target.name)" class="form-horizontal">
                <!-- Begin Alerts -->
                <alert-error :form="form"></alert-error>
                <alert-success :form="form" message="Success!"></alert-success>
                <!-- End Alerts -->

                <!-- Begin Form Field Name -->
                <div class="form-group" :class="{ 'has-error': form.errors.has('name') }">
                    <label for="name" class="col-md-1 control-label">Name</label>
                    <div class="col-md-10">
                        <input v-model="form.name" type="text" name="form.name" id="name" class="form-control">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                </div>
                <!-- End Form Field Name -->

                <!-- Begin Form Submit -->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1">
                        <button type="submit" class="btn btn-primary">Update</button>
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
                    name: null
                })
            }
        },
        mounted() {
            axios.get('/api/getAuthUser')
                    .then(response => {
                        this.form.name = response.data.name;
                    });
        },
        methods: {
            updateUserPersonal() {
                this.form.post('/api/updateUserPersonal')
                this.$events.fire('updateUserPersonal', this.form.name);
            }
        }
    }
</script>
