@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>User Money Transfers</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">User Money Transfers</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">


                       <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 m-b-30 header-title">User Money Transfers</h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Transactions ID</th>
                                            <th>To User</th>
                                            <th>Date of Transfer</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#000001</th>
                                            <td>Mark</td>
                                            <td>29-11-2018</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <td>#000002</th>
                                            <td>Ben</td>
                                            <td>09-11-2018</td>
                                            <td>1000</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>





                        </div>
                        <!-- end row -->



                    </div> <!-- container -->
@stop