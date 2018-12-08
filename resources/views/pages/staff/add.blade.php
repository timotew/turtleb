@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Add Staff</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.php?p=staff">Turtle Staff</a></li>
        <li class="breadcrumb-item active">Add Turtle Staff</li>
    </ol>
@stop

@section('content')
<div class="container-fluid">

                       <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Add Turtle Staff</h4>

  <form action="#">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Name" class="col-form-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Phone" class="col-form-label">Phone</label>
                                                            <input type="Number" class="form-control" placeholder="Phone">
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Email" class="col-form-label">Email</label>
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Password" class="col-form-label">Password</label>
                                                            <input type="text" class="form-control" placeholder="Password"/>
                                                        </div>
                                                    </div>


                                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Permission</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Users</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox1" type="checkbox">
                                                                <label for="checkbox1">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox2" type="checkbox">
                                                                <label for="checkbox2">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Advertisements</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox3" type="checkbox">
                                                                <label for="checkbox3">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox4" type="checkbox">
                                                                <label for="checkbox4">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Special Offers</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox5" type="checkbox">
                                                                <label for="checkbox5">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox6" type="checkbox">
                                                                <label for="checkbox6">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Silver Coins</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox7" type="checkbox">
                                                                <label for="checkbox7">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input id="checkbox8" type="checkbox">
                                                                <label for="checkbox8">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        </tbody>
                                    </table>



                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Add User</button>
                                                    </div>



                                                  </form>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->





                    </div> <!-- container -->
@stop