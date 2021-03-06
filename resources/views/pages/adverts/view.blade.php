@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Advertisements</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Advertisements</li>
    </ol>
@stop

@section('content')
<div class="container-fluid">

                       <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Advertisements List</h4>
                                    <p class="text-muted font-14 text-right">
                                        <a href="{{ route('adverts.create') }}" class="btn btn-primary waves-effect waves-light"> Advertisement <i class="fa fa-plus m-l-5"></i> </a>
                                    </p>



                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Adv. Title</th>
                                            <th>Likes</th>
                                            <th>Views</th>
                                            <th>Comments</th>
                                            <th>Share</th>
                                            <th>Rewards</th>
                                            <th>User</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach ($adverts as $advert)
                                        <tr>
                                            <td>{{ $loop->index+1  }}</td>
                                            <td>{{ $advert->title }}</td>

                                            <td>{{ $advert->likes }}</td>
                                            <td>{{ $advert->views }}</td>
                                            <td>{{ $advert->comments }}</td>
                                            <td>{{ $advert->shares }}</td>
                                            <td>{{ $advert->rewards }}</td>
                                            <td>{{ $advert->user->name }}</td>
                                            <td>{{ $advert->location }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button>
                                                <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning" data-toggle="modal" data-target="#myModal"> <i class="fa fa-edit"></i> </button>
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
                                                    <h4 class="modal-title" id="myModalLabel">Ad Runs: From: 10/10/2018 - To: 31/12/2018</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                <p class="mb-0"><img src="images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <b>Petey Cruiser</b></p>
                                            </div>

                                             <hr/>



                                                <h5 class="mb-3">Advertisement Title</h5>

                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>



                                            <div class="clearfix"></div>


                                                    <img src="images/bg-1.jpg" class="img-responsive img-thumbnail" style="width: 100%; height: 150px;">
                                                    <hr/>

<h5 class="mb-3">Images</h5>
                                                    <div class="row">
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>

                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                        </div>
                                        <hr/>

<h5 class="mb-3">Videos</h5>
                                                    <div class="row">
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>

                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img">
                                            </div>
                                            <div class="col-md-2"><img src="images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img">
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