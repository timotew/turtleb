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
                                        <a href="{{ route('notification.email.create') }}" class="btn btn-primary waves-effect waves-light"> Add Notification <i class="fa fa-plus m-l-5"></i> </a>
                                    </p>
                                    @if(count($errors) > 0)
              <div class="alert alert-danger" >
                  <button type="button" class="close" data-dismiss="alert"aria-hidden="true">×</button>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </div>
                @endif
                @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
                                    <form role="form" action="{{ route('notification.email.store') }}" method="post">
                                        @csrf
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control" placeholder="To">
                                                </div>

                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="body" class="summernote">



                                                    </textarea>
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