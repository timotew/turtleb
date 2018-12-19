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





                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Email Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($notifications as $notification)
                                        <tr>
                                            <td>{{ $notification->subject }}</th>
                                            <td>{{ $notification->content }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon waves-effect btn-info"> <i class="fa fa-eye"></i> </button>
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



                    </div> <!-- container -->
@stop