<template>
     <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="250px">Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Department</th>
                                        <th>Address</th>
                                        <th>Contact No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Department</th>
                                        <th>Address</th>
                                        <th>Contact No.</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody v-for = "teacherlist in teacherlists" :key="teacherlist.id"> 
                                    <tr>
                                        <td>{{teacherlist.name}} {{teacherlist.surname}}</td>
                                        <td>{{teacherlist.email}}</td>
                                        <td>{{teacherlist.gender}}</td>
                                        <td>{{teacherlist.birthday}}</td>
                                        <td>{{teacherlist.department}}</td>
                                        <td>{{teacherlist.address}}</td>
                                        <td>{{teacherlist.contactno}}</td>
                                        <td class="form-group">
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
                teacherlists: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
                axios.get('./api/teacherlist')
                .then(response => this.teacherlists = response.data);
        }
    }
</script>