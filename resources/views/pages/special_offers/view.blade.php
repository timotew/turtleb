@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Special Offers</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Special Offers</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 header-title">Special Offers List</h4>
             <p class="text-muted font-14">
                 <a href="merchant-view.php" class="btn btn-dark waves-effect waves-light float-left"> Merchant View <i class="fa fa-user-secret m-l-5"></i> </a>

                 <a href="{{ route('offer.create') }}" class="btn btn-primary waves-effect waves-light float-right"> Add Special Offer <i class="fa fa-plus m-l-5"></i> </a>

                 <div class="clearfix"></div>
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Title</th>
                     <th>User</th>
                     <th>Location</th>
                     <th>Expiry Date</th>
                     <th>Total Vouchers</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 @foreach ($offers as $offer)
                 <tr>
                 <td>{{ $loop->index+1  }}</td>
                     <td>{{ $offer->title }}</td>
                     <td>{{ $offer->user->name }}</td>
                     <td>{{ $offer->location }}</td>
                     <td>{{ $offer->endDate }}</td>
                     <td>{{ $offer->total_voucher }}</td>
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
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning"> <i class="fa fa-edit"></i> </button>
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

<!-- sample modal content -->
             <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Offer Title<br/><small><b>Location:</b> Kakinada</small></h4>

                         </div>
                         <div class="modal-body">
                             <div>
                         <p class="mb-3"><img src="/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"><b>User Name</b></p>
                     </div>

                      <hr/>
                         <div class="row">
                                 <div class="col-md-6">
                                     <p class="mb-0"><b>Count of Vouchers:</b> 1000</p>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <p class="mb-0"><b>Status:</b> Enable</p>
                                 </div>
                         </div>
                         <div class="row">
                                 <div class="col-md-6">
                                     <p class="mb-0"><b>Gold Coins to buy voucher:</b> 10</p>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <p class="mb-0"><b>Price to buy voucher:</b> 1000</p>
                                 </div>
                         </div>
                         <div class="row">
                                 <div class="col-md-6">
                                     <p class="mb-0"><b>Publish Date:</b> 01/11/2018</p>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <p class="mb-0"><b>Expiry Date:</b> 31/12/2018</p>
                                 </div>
                         </div>
<hr/>
                         <h5 class="mb-3">Description</h5>

                             <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                             <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>



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