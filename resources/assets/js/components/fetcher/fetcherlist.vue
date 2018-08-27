<template>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>RFID No.</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>RFID No.</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody v-for = "fetcher in fetchers" :key= "fetcher.id">
                            <tr>
                                <td>{{ fetcher.name }} {{fetcher.surname}}</td>
                                <td>{{ fetcher.gender}}</td>
                                <td>{{fetcher.birthday}}</td>
                                <td>{{fetcher.rfidno}}</td>
                                <td>{{fetcher.address}}</td>
                                <td>{{fetcher.contactno}}</td>
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
                fetchers: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
                axios.get('./api/fetchers')
                .then(response => this.fetchers = response.data);
        }
    }
</script>