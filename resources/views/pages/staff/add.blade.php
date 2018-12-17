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
  <form action="{{ route('staff.store') }}" method="post">
  @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Name" class="col-form-label">Name</label>
                                                            <input name="name" required type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Phone" class="col-form-label">Phone</label>
                                                            <input name="phone" required type="number" class="form-control" placeholder="Phone">
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Email" class="col-form-label">Email</label>
                                                            <input name="email" required type="email" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Password" class="col-form-label">Password</label>
                                                            <input name="password" required type="text" class="form-control" placeholder="Password"/>
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
                                                                <input name="users[read]" id="checkbox1" type="checkbox">
                                                                <label  for="checkbox1">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="users[write]" id="checkbox2" type="checkbox">
                                                                <label for="checkbox2">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Advertisements</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="advert[read]" id="checkbox3" type="checkbox">
                                                                <label for="checkbox3">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="advert[write]" id="checkbox4" type="checkbox">
                                                                <label for="checkbox4">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Special Offers</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="offers[read]" id="checkbox5" type="checkbox">
                                                                <label for="checkbox5">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="offers[write]" id="checkbox6" type="checkbox">
                                                                <label for="checkbox6">
                                                                   Write
                                                                </label>
                                                            </div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Silver Coins</th>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="coin[read]" id="checkbox7" type="checkbox">
                                                                <label for="checkbox7">
                                                                   Read
                                                                </label>
                                                            </div></td>
                                            <td><div class="checkbox checkbox-warning">
                                                                <input name="coin[write]" id="checkbox8" type="checkbox">
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