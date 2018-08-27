<template>
            <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Section</th>
                                        <th>Contact</th>
                                        <th>Fetcher</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Section</th>
                                        <th>Contact</th>
                                        <th>Fetcher</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody v-for = "student in students" :key="student.id">
                                    <tr>
                                        <td> {{student.name}} {{student.surname}}</td>
                                        <td>{{student.grade}}</td>
                                        <td>{{student.section}}</td>
                                        <td>{{student.contactno}}</td>
                                        <td>{{student.fetcher}}</td>
                                        <td class="form-group">
                                            <span> <button class="btn btn-warning btn-sm">View</button> </span>
                                            <span> <button class="btn btn-primary btn-sm">Edit</button> </span>
                                            <span> <button class="btn btn-danger btn-sm">Delete</button> </span>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
</template> 
<script>
    export default {
        data(){
            return{
                students: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
                axios.get('./api/students')
                .then(response => this.students = response.data);
        }, 
        methods:{
            deleteStudents(){
                axios.post('./api/fetchers',{
                    name:this.name,
                    surname:this.surname,
                    email:this.email,
                    gender:this.gender,
                    birthday:this.birthday,
                    rfidno:this.rfidno,
                    address:this.address,
                    contactno:this.contactno,
                })
            }
        }
    }
</script>