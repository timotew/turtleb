@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Add Special Offers</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="index.php?p=special-offers">Special Offers</a></li>
                                        <li class="breadcrumb-item active">Add Special Offer</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">



<!-- Form row -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Add Special Offer</h4>
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
            <form action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Select User" class="col-form-label">Select User</label>
                        <select name="user" class="form-control select2">
                        @foreach ($users as $user)
                        <option value="{{ $user->_id }}">{{ $user->name }}</option>
                        @endforeach
            </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="Ad Display Date" class="col-form-label">Offer Available Date</label>
                        <input class="form-control input-daterange-datepicker" type="text" name="date" value="10/29/2018 - 12/31/2018"/>
                </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Location <a href="#" data-toggle="modal" data-target="#myModal">(Select location on map)</a></label>
                        <input  name="location" type="text" class="form-control" id="inputEmail4" placeholder="Select your location">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Total Vouchers" class="col-form-label">Total Vouchers</label>
                        <input name="total_voucher" type="text" class="form-control" id="inputEmail4" placeholder="Total Vouchers Number">

                    </div>
                    <div class="form-group col-md-4">
                    <label for="Ad Display Date" class="col-form-label">Gold Coins to buy voucher</label>
                        <input name="gold_voucher"  type="text" class="form-control" id="inputEmail4" placeholder="Gold Coins">
                </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Price to buy voucher</label>
                        <input name="price_voucher" type="text" class="form-control" id="inputEmail4" placeholder="Price">
                    </div>

                </div>


                <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="inputEmail4" class="col-form-label">Offer Title</label>
                        <input name="title" type="text" class="form-control" id="inputEmail4" placeholder="Advertisements Title">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="NameValue" class="col-form-label">Name Value</label>
                        <input name="name_value" type="text" class="form-control" id="NameValue" placeholder="Name Value">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">Tags</label>
                        <input name="tags" type="text" class="form-control"  data-role="tagsinput" placeholder="add tags"/>
                    </div>


                </div>
                <div class="form-group">
                    <label for="Content" class="col-form-label">Content</label>
                    <textarea name="content" class="form-control" rows="5"></textarea>
                </div>


                <div class="form-group col-md-6">
                                <p class="mb-2 mt-4 font-weight-bold">Select Multiple Images and Upload</p>
                                <input name="images" type="file" class="filestyle" data-placeholder="No files" data-btnClass="btn-light" multiple>
                </div>

                <div class="form-group col-md-6">
                                <p class="mb-2 mt-4 font-weight-bold">Upload Videos</p>
                                <input name="videos" type="file" class="filestyle" data-placeholder="No files" data-btnClass="btn-light" multiple>
                </div>


                <button type="submit" class="btn btn-primary">Publish Offer</button>
            </form>
        </div>
    </div>
</div>
<!-- end row -->

<!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Map</h4>

                        </div>
                        <div class="modal-body">



Map here








                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


</div> <!-- container -->
@stop