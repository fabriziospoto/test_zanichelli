<template>
    <div>
        <label for="exampleFormControlInput1" class="my-3">Nome</label>
        <input id="name" name="name" v-model="fields.name" class="form-control" type="text" placeholder="Mario">

        <label for="exampleFormControlInput1" class="my-3">Cognome</label>
        <input id="surname" name="surname" v-model="fields.surname" class="form-control" type="text" placeholder="Rossi">

        <label for="exampleFormControlInput1" class="my-3">E-Mail</label>
        <input id="mail" name="mail" v-model="fields.mail" class="form-control" type="text" placeholder="mario.rossi@mail.com">

        <div class="col-md-8 offset-md-4 my-3">
            <button type="submit" class="btn btn-primary">
                Invia
            </button>
        </div>
    </div>
</template>

<script>
export default ({
    data() {
        return {
            fields: {},
        }
    },
    methods: {
        submit() {
            axios.post('/api/tickets', this.fields).then(response => {
                this.fields = {};
            }).catch(error => {
                // if (error.response.status == 422) {
                //     this.errors = error.response.data.errors;
                // }
                console.log('Error', this.errors = error.response.data.errors);
            });
        }
    },
})
</script>
