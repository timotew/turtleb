@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Turtle Staff</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Turtle Staff</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Turtle Staff List</h4>
             <p class="text-muted font-14 text-right">

                 <a href="{{ route('staff.create') }}" type="button" class="btn btn-primary waves-effect waves-light"> Add Staff <i class="fa fa-plus m-l-5"></i> </a>
                <!--  <a href="index.php?p=advertisements-add" class="btn btn-primary waves-effect waves-light"> Add Conversion <i class="fa fa-plus m-l-5"></i> </a> -->
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Email</th>
                     <th>Permissions</th>
                     <th>Last Login</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 @foreach ($users as $user)
                 <tr>
                     <td>{{ $loop->index+1  }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->phone }}</td>
                     <td>{{ $user->email }}</td>
                     <td></td>
                     <td>{{ $user->lastLogin }}</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-light waves-effect">Disable</button>
                     </td>
                     <td>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button> -->
                         <a href="{{ route('staff.create') }}" class="btn btn-sm btn-icon waves-effect btn-warning" > <i class="fa fa-edit"></i> </a>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>
                @endforeach


                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <!-- end row -->







</div> <!-- container -->
@stop