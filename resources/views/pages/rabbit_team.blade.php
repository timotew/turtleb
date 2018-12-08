@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Rabbit Team</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Rabbit Team</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Rabbit Team</h4>
             <p class="text-muted font-14 text-right">
                 <a href="index.php?p=rabbit-team-post" class="btn btn-primary waves-effect waves-light"> Add Post <i class="fa fa-plus m-l-5"></i> </a>
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Post Title</th>
                     <th>Likes</th>
                     <th>Views</th>
                     <th>Comments</th>
                     <th>Share</th>
                     <th>Location</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>Post Name</td>

                     <td>1000</td>
                     <td>50000</td>
                     <td>500</td>
                     <td>258</td>
                     <td>Kakinada</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
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
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Post Title</h4>
                         </div>
                         <div class="modal-body">
                             <div>
                         <p class="mb-0"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <b>Petey Cruiser</b></p>
                     </div>

                      <hr/>



                         <h5 class="mb-3">Description</h5>

                             <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                             <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                             <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>



                     <div class="clearfix"></div>



                             <hr/>

<h5 class="mb-3">Images</h5>
                             <div class="row">
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>

                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                 </div>

                 <hr/>



                         <h5 class="mb-3">Description</h5>

                             <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                             <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                             <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>



                     <div class="clearfix"></div>
                 <hr/>

<h5 class="mb-3">Videos</h5>
                             <div class="row">
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>

                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                 </div>



                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->

</div> <!-- container -->
@stop