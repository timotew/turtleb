@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Users</h1>
    <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
         <li class="breadcrumb-item active">Users</li>
     </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Users List</h4>
             <!-- <p class="text-muted font-14 m-b-30">
                 The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
             </p> -->


             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Name</th>
                     <th>Age</th>

                     <th>Gender</th>
                     <th>Email ID</th>
                     <th>Phone</th>
                     <th>Location</th>
                     <th>Date of Reg.</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>Kishore</td>
                     <td>28</td>
                     <td>Male</td>
                     <td>bvvkishore@gmail.com</td>
                     <td>9866667335</td>
                     <td>Kakinada</td>
                     <td>24-06-1990</td>
                     <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Status <span class="caret"></span> </button>
                             <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="#">Active</a>
                                 <a class="dropdown-item" href="#">Deactive</a>
                             </div>
                         </div>
             </td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>Ravi</td>

                     <td>25</td>
                     <td>Male</td>
                     <td>ravi@gmail.com</td>
                     <td>7799499779</td>
                     <td>Kakinada</td>
                     <td>24-06-1990</td>
                     <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Status <span class="caret"></span> </button>
                             <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="#">Active</a>
                                 <a class="dropdown-item" href="#">Deactive</a>
                             </div>
                         </div>
             </td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>
                 <tr>
                     <td>3</td>
                     <td>Aishu</td>

                    <td>24</td>
                     <td>Female</td>
                     <td>aishu@gmail.com</td>
                     <td>9441782487</td>
                     <td>Kakinada</td>
                     <td>29-05-2013</td>
                     <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Status <span class="caret"></span> </button>
                             <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="#">Active</a>
                                 <a class="dropdown-item" href="#">Deactive</a>
                             </div>
                         </div>
             </td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>

                     </td>
                 </tr>

                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <!-- end row -->



</div> <!-- container -->
@stop