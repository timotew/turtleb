@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Email Notifications</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Email Notifications</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">

                                    <h4 class="m-t-0 header-title">Email Notifications</h4>
                                    <p class="text-muted font-14 text-right">
                                        <a href="index.php?p=notification-add" class="btn btn-primary waves-effect waves-light"> Add Notification <i class="fa fa-plus m-l-5"></i> </a>
                                    </p>





                                    <form role="form">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="To">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <div class="summernote">



                                                    </div>
                                                </div>

                                                <div class="form-group m-b-0">
                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button>
                                                        <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                    </div>
                                                </div>

                                            </form>

                                </div>
                            </div>





                        </div>
                        <!-- end row -->



                    </div> <!-- container -->
@stop