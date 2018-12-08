@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Wallet Deposit</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Wallet Deposits</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">
                        <!-- <div class="row">
                            <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="fa fa-money float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Your wallet Balance</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="fa fa-money float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Add Money</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="fa fa-money float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Withdraw Money</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>

                                        </div>
                                    </div>
                        </div> -->

                       <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 m-b-30 header-title">Transactions</h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Transactions ID</th>
                                            <th>User</th>
                                            <th>Date of Deposits</th>
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