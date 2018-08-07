@extends('admin.master.template')

@section('content')
     <section class="content">
         <div id="test">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>
                <task-list></task-list>
                <task-form></task-form>
            </div>
         </div>
    </section>
@endsection