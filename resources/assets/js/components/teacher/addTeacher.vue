<template>
            <form id="form_validation" action="./api/teacherlist" method="POST" @submit.prevent="addNewTeacher()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model = "name" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model = "surname" name="surname" required>
                                        <label class="form-label">Surname</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" v-model = "email" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model = "gender" name="gender" required>
                                        <label class="form-label">Gender</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" v-model = "birthday" name="birthday" required>
                                        <label class="form-label">Birthday</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="radio" name="gender" v-model= "gender" id="male" class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" v-model= "gender" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div> -->
                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" v-model= "birthday">
                                        <label class="form-label">Birthday</label>
                                    </div>
                                </div> -->
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="department" v-model= "department" required>
                                            <label class="form-label">Department</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="address" v-model= "address" required>
                                            <label class="form-label">Address</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" v-model= "contactno" name="contactno" required>
                                            <label class="form-label">Contact No.</label>
                                        </div>
                                        <div class="help-info">Numbers only</div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" v-model= "password" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" >SAVE</button>
                            </form>
</template>

<script>
    export default {
        data(){
            return{
                name: '',
                surname:'',
                email:'',
                gender:'',
                birthday:'',
                department:'',
                address:'',
                contactno:'',
                password:''
            }
        },
        methods:{
            addNewTeacher(){
                axios.post('./api/teacherlist',{
                    name:this.name,
                    surname:this.surname,
                    email:this.email,
                    gender:this.gender,
                    birthday:this.birthday,
                    department:this.department,
                    address:this.address,
                    contactno:this.contactno,
                    password:this.password,
                }).then(response => {
                    console.log(response);
                }).catch(error =>{
                    console.log(error);
                })
            }
        }
    }
</script>
