@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Ask Me</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Ask Me</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Ask Me</h4>
             <p class="text-muted font-14 text-right">
                 <!-- <a href="index.php?p=rabbit-team-post" class="btn btn-primary waves-effect waves-light"> Add Post <i class="fa fa-plus m-l-5"></i> </a> -->
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>User Name</th>
                     <th>Question</th>
                     <th>Likes</th>
                     <th>Views</th>
                     <th>Comments</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>Krish</td>
                     <td>How to reach shimla from delhi by bus?</td>
                     <td>50000</td>
                     <td>500</td>
                     <td>258</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>

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
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Ask Me </h4>
                         </div>
                         <div class="modal-body">






                             <div>



                 <div class="media m-b-20">
                     <div class="d-flex mr-3">
                         <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="images/users/avatar-2.jpg"> </a>
                     </div>
                     <div class="media-body">
                         <h5 class="mt-0">Doyle Bell</h5>
                         <p class="font-13 text-muted mb-0">
                            <b> How to reach shimla from delhi by bus?</b>
                         </p>
                         <!-- <a href="" class="text-success font-13">Reply</a> -->

                         <div class="media m-t-20 m-b-20">
                             <div class="d-flex mr-3">
                                 <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="images/users/avatar-3.jpg"> </a>
                             </div>
                             <div class="media-body">
                                 <h5 class="mt-0">Elena Vancamp</h5>
                                 <p class="font-13 text-muted mb-0">
                                     <a href="" class="text-dark">@Doyle</a>
                                     Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                     ante sollicitudin commodo. Cras purus odio.
                                 </p>
                                 <!-- <a href="" class="text-success font-13">Reply</a> -->
                             </div>
                         </div>


                         <div class="media m-t-20 m-b-20">
                             <div class="d-flex mr-3">
                                 <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="images/users/avatar-3.jpg"> </a>
                             </div>
                             <div class="media-body">
                                 <h5 class="mt-0">Elena Vancamp</h5>
                                 <p class="font-13 text-muted mb-0">
                                     <a href="" class="text-dark">@Doyle</a>
                                     Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                     ante sollicitudin commodo. Cras purus odio.
                                 </p>
                                 <!-- <a href="" class="text-success font-13">Reply</a> -->
                             </div>
                         </div>


                         <div class="media m-t-20 m-b-20">
                             <div class="d-flex mr-3">
                                 <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="images/users/avatar-3.jpg"> </a>
                             </div>
                             <div class="media-body">
                                 <h5 class="mt-0">Elena Vancamp</h5>
                                 <p class="font-13 text-muted mb-0">
                                     <a href="" class="text-dark">@Doyle</a>
                                     Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                     ante sollicitudin commodo. Cras purus odio.
                                 </p>
                                 <!-- <a href="" class="text-success font-13">Reply</a> -->
                             </div>
                         </div>
                     </div>
                 </div>







             </div>



                     <div class="clearfix"></div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->

</div> <!-- container -->
@stop