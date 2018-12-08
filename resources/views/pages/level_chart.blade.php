@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Level Chart</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Level Chart</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <!-- <h4 class="m-t-0 header-title">Level Chart List</h4> -->
             <p class="text-muted font-14 text-right">


                 <button type="button" class="btn btn-icon waves-effect btn-primary" data-toggle="modal" data-target="#myModal1"> Level Chart <i class="fa fa-plus m-l-5"></i> </button>
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Levels</th>
                     <th>Male</th>
                     <th>Female</th>
                     <th>Coins</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>LV1</td>

                     <td>Male Level Name</td>
                     <td>Female Level Name</td>
                     <td>500</td>
                     <td>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button> -->
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning" data-toggle="modal" data-target="#myModal"> <i class="fa fa-edit"></i> </button>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>

                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <!-- end row -->

<!-- sample modal content -->
             <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Level Chart</h4>
                         </div>
                         <div class="modal-body">
                          <form action="">
                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="Ad Display Date" class="col-form-label">Level Title</label>
                                     <input class="form-control" type="text" name="" value="LV1">
                                 </div>
                             </div>
                             <div class="form-row">
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Male Level</label>
                                     <input type="text" class="form-control" id="" placeholder="Male Level">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Female Level</label>
                                     <input type="text" class="form-control" id="" placeholder="Female Level">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Coins</label>
                                     <input type="text" class="form-control" id="" placeholder="Coins">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Edit</button>
                             </div>
                         </form>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->


             <!-- sample modal content -->
             <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Level Chart</h4>
                         </div>
                         <div class="modal-body">
                          <form action="">
                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="Ad Display Date" class="col-form-label">Level Title</label>
                                     <input class="form-control" type="text" name="" value="LV1">
                                 </div>
                             </div>
                             <div class="form-row">
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Male Level</label>
                                     <input type="text" class="form-control" id="" placeholder="Male Level">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Female Level</label>
                                     <input type="text" class="form-control" id="" placeholder="Female Level">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="" class="col-form-label">Coins</label>
                                     <input type="text" class="form-control" id="" placeholder="Coins">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                             </div>
                         </form>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->

</div> <!-- container -->
@stop