<template>
    <div>
        <form method="POST" @submit.prevent="submit">
            <input type="hidden" name="_token" v-bind:value="csrf">
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
        </form>
    </div>
</template>

<script>
export default ({
    props: ['csrf'],
    data() {
        return {
            fields: {},
        }
    },
    methods: {
        submit() {
            const axios = require('axios').default;
            axios.post('store', this.fields)
            .then(response => {
                this.fields = {};
                alert('Caricamento riuscito');

            }).catch(error => {
                console.log('Error', error.response.data);
                // alert('Caricamento non riuscito. Uno o più dati sbagliati o mancanti.');

                if (!this.fields.name) {
                    alert(error.response.data.errors.name);
                }
                if (!this.fields.surname) {
                    alert(error.response.data.errors.surname);
                }
                if (error.response.data.errors.mail = []) {
                    alert(error.response.data.message);
                }
            
            });
        }
    },
})
</script>
