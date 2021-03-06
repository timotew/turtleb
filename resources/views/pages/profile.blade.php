@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Admin Profile</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Admin Profile</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-6">
         <div class="card-box">
             <h4 class="m-t-0 m-b-30 header-title">Personal Details</h4>
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
             <form class="form-horizontal" action="{{ route('admin.update', $user->_id) }}" method="post" enctype="multipart/form-data">
             @csrf
             @method('PUT')
                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Admin Username</label>
                                 <div class="col-8">
                                     <input name="email" type="email" value="{{ $user->email }}" class="form-control" readonly="" value="Username">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Name</label>
                                 <div class="col-8">
                                     <input name="name" value="{{ $user->name }}" required type="text" class="form-control" value="Name">
                                 </div>
                             </div>
                             <!-- <div class="form-group row">
                                 <label class="col-4 col-form-label" for="example-email">Email</label>
                                 <div class="col-8">
                                     <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                 </div>
                             </div> -->



                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Phone Number</label>
                                 <div class="col-md-8">
                                     <input value="{{ $user->phone }}" class="form-control" type="number" name="phone" required placeholder="Phone Number">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Profile Image</label>
                                 <div class="col-md-8">
                                     <input name="picture" type="file" class="filestyle" data-placeholder="No file" data-btnClass="btn-light">
                                 </div>
                             </div>



                             <div class="form-group mb-0 justify-content-end row">
                     <div class="col-8">
                         <button type="submit" class="btn btn-info waves-effect waves-light">Update Profile</button>
                     </div>
                 </div>



                         </form>

         </div>
     </div>



     <div class="col-6">
         <div class="card-box table-responsive">
             <h4 class="m-t-0 m-b-30 header-title">Change Password</h4>

             <form class="form-horizontal" action="{{ route('profile.password') }}" method="post" >
             @csrf

                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Old Password</label>
                                 <div class="col-8">
                                     <input name="old_password" type="password" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-4 col-form-label">New Password</label>
                                 <div class="col-8">
                                     <input name="new_password" type="password" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-4 col-form-label">Confirm Password</label>
                                 <div class="col-8">
                                     <input name="confirm_password" type="password" class="form-control">
                                 </div>
                             </div>

                             <div class="form-group mb-0 justify-content-end row">
                     <div class="col-8">
                         <button type="submit" class="btn btn-info waves-effect waves-light">Update Password</button>
                     </div>
                 </div>



                         </form>


         </div>
     </div>


 </div>
 <!-- end row -->



</div> <!-- container -->
@stop