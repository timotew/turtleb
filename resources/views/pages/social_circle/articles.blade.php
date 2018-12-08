@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Social Circle</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Social Circle</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Social Circle Articles</h4>
             <!-- <p class="text-muted font-14 text-right">


                 <a href="index.php?p=special-offer-add" class="btn btn-primary waves-effect waves-light"> Add Property <i class="fa fa-plus m-l-5"></i> </a>

                 <div class="clearfix"></div>
             </p>
-->


             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Title</th>
                     <th>Category</th>
                     <th>Posted By</th>
                     <th>Posted Date</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>Article Title</td>
                     <td>Category One</td>
                     <td>Krish</td>
                     <td>22-11-2018</td>

                     <td>Draft</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning"> <i class="fa fa-edit"></i> </button> -->
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>Article Title 2</td>
                     <td>Category One</td>
                     <td>Suresh</td>
                     <td>12-11-2018</td>

                     <td>Published</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning"> <i class="fa fa-edit"></i> </button> -->
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-danger"> <i class="fa fa-trash-o"></i> </button>
                     </td>
                 </tr>
                 <tr>
                     <td>3</td>
                     <td>Article Title 3</td>
                     <td>Category One</td>
                     <td>Ramesh</td>
                     <td>02-11-2018</td>

                     <td>Blacklisted</td>
                     <td>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning"> <i class="fa fa-edit"></i> </button> -->
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
                             <h4 class="modal-title" id="myModalLabel">Article Title<br/><small><b>Posted Date:</b> 22-11-2018</small></h4>

                         </div>
                         <div class="modal-body">
                             <div>
                         <p class="mb-3"><img src="/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"><b>User Name</b></p>
                     </div>

                      <hr/>
                         <div class="row">
                                 <div class="col-md-6">
                                     <p class="mb-0"><b>No.of Views:</b> 1000</p>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <p class="mb-0"><b>No.of Likes:</b> 500</p>
                                 </div>
                         </div>
                         <div class="row">
                                 <div class="col-md-6">
                                     <p class="mb-0"><b>No.of Shares:</b> 200</p>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <p class="mb-0"><b>Comments:</b> 150</p>
                                 </div>
                         </div>
<hr/>
                         <h5 class="mb-3">Description</h5>

                             <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                             <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>



                     <div class="clearfix"></div>



                             <hr/>
                              <h5 class="mb-3">Tags</h5>

                             <p>Tag 1, Tag 2, Tag 3</p>
                             <hr/>
                              <h5 class="mb-3">Coins Rewards</h5>

                             <table class="table table-bordered">
                                 <thead>
                                 <tr>
                                     <th>S.No</th>
                                     <th>Name</th>
                                     <th>Coins Reward</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Ravi</td>
                                         <td>10</td>
                                     </tr>
                                 </tbody>
                             </table>



                     <div class="clearfix"></div>



                             <hr/>

<h5 class="mb-3">Images</h5>
                             <div class="row">
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>

                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                 </div>
                 <hr/>

<h5 class="mb-3">Videos</h5>
                             <div class="row">
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>

                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                     </div>
                     <div class="col-md-2"><img src="/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
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