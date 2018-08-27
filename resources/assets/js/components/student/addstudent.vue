<template>
            <form id="form_validation" action="./api/teacherlist" method="POST" @submit.prevent="addNewStudent()">
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
                                 <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="grade" v-model= "grade" required>
                                            <label class="form-label">Grade</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="section" v-model= "section" required>
                                            <label class="form-label">Section</label>
                                        </div>
                                </div>
                                 <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="schoolyear" v-model= "schoolyear" required>
                                            <label class="form-label">School Year</label>
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
                                            <input type="text" class="form-control" name="fetcher" v-model= "fetcher" required>
                                            <label class="form-label">Fetcher</label>
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
                grade:'',
                section:'',
                schoolyear:'',
                contactno:'',
                fetcher:''
            }
        },
        methods:{
            addNewStudent(){
                axios.post('./api/students',{
                    name:this.name,
                    surname:this.surname,
                    email:this.email,
                    gender:this.gender,
                    birthday:this.birthday,
                    grade:this.grade,
                    section:this.section,
                    schoolyear:this.schoolyear,
                    contactno:this.contactno,
                    fetcher:this.fetcher,
                }).then(response => {
                    console.log(response);
                }).catch(error =>{
                    console.log(error);
                })
            }
        }
    }
</script>
