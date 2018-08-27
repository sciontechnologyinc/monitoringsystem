<template>
            <form id="form_validation" action="./api/teacherlist" method="POST" @submit.prevent="addNewFetcher()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model ="fetcher.name" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model ="fetcher.surname" name="surname" required>
                                        <label class="form-label">Surname</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" v-model ="fetcher.email" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model ="fetcher.gender" name="gender" required>
                                        <label class="form-label">Gender</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model ="fetcher.birthday" name="birthday" required>
                                        <label class="form-label">Birthday</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" v-model="fetcher.rfidno" name="rfidno" required>
                                            <label class="form-label">RFID No.</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="address" v-model="fetcher.address" required>
                                            <label class="form-label">Address</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" v-model="fetcher.contactno" name="contactno" required>
                                            <label class="form-label">Contact No.</label>
                                        </div>
                                        <div class="help-info">Numbers only</div>
                                    </div>
                                <button class="btn btn-primary waves-effect" type="submit" >SAVE</button>
                            </form>
</template>

<script>
    export default {
        data(){
            return{
                fetcher:{
                    name: '',
                    surname:'',
                    email:'',
                    gender:'',
                    birthday:'',
                    rfidno:'',
                    address:'',
                    contactno:''
                    }
            }
        },
        methods:{
            addNewFetcher(){
                var app = this;
                var newFetcher = app.fetcher;

                axios.post('/api/fetchers', newFetcher)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });
            }
        }
    }
</script>
