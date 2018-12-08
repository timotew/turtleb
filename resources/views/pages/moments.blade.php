@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Moments</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Moments</li>
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
                     <th>Posted by User</th>
                     <th>Posted on</th>
                     <th>Likes</th>
                     <th>Views</th>
                     <th>Comments</th>
                     <th>Share</th>
                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 <tr>
                     <td>1</td>
                     <td>Krish</td>
                     <td>29-11-2018</td>
                     <td>50000</td>
                     <td>500</td>
                     <td>258</td>
                     <td>302</td>
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

                                 <div class="row">
                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                 </div>


                                 <div class="row">
                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                 </div>


                                 <div class="row">
                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                 </div>


                                 <div class="row">
                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-md-4">
                                         <a href="assets/images/small/img-2.jpg" class="image-popup">
                                             <div class="portfolio-masonry-box">
                                                 <div class="portfolio-masonry-img">
                                                     <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail" style="height: 200px;">
                                                 </div>
                                                 <div class="portfolio-masonry-detail">
                                                     <h4 class="font-18">Traditional Building</h4>
                                                     <p>Photography</p>
                                                 </div>
                                             </div>
                                         </a>
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