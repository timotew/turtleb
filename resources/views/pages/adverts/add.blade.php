@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>New Advertisements</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.php?p=advertisements">Advertisements</a></li>
        <li class="breadcrumb-item active">New Advertisements</li>
    </ol>
@stop

@section('content')
<div class="container-fluid">



<!-- Form row -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">New Advertisements</h4>


            <form action="#">

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Select User" class="col-form-label">Select User</label>
                        <select class="form-control select2">
                <option>Select</option>
                <option>Kishore</option>
                            <option>Ravi</option>
                            <option>Aishu</option>

            </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="Ad Display Date" class="col-form-label">Ad Display Date</label>
                        <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="10/29/2018 - 12/31/2018"/>
                </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Location</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Location">
                    </div>

                </div>
                <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="inputEmail4" class="col-form-label">Advertisements Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Advertisements Title">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="NameValue" class="col-form-label">Name Value</label>
                        <input type="text" class="form-control" id="NameValue" placeholder="Name Value">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">Tags</label>
                        <input type="text" class="form-control" value="Tag 1,Tag 2,Tag 3" data-role="tagsinput" placeholder="add tags"/>
                    </div>

                </div>
                <div class="form-group">
                    <label for="Content" class="col-form-label">Content</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group col-md-6">
                                <p class="mb-2 mt-4 font-weight-bold">Upload Banner Image</p>
                                <input type="file" class="filestyle" data-placeholder="No file" data-btnClass="btn-light">
                </div>

                <div class="form-group col-md-6">
                                <p class="mb-2 mt-4 font-weight-bold">Select Multiple Images and Upload</p>
                                <input type="file" class="filestyle" data-placeholder="No files" data-btnClass="btn-light" multiple>
                </div>

                <div class="form-group col-md-6">
                                <p class="mb-2 mt-4 font-weight-bold">Upload Videos</p>
                                <input type="file" class="filestyle" data-placeholder="No files" data-btnClass="btn-light" multiple>
                </div>






                <button type="submit" class="btn btn-primary">Publish Advertisement</button>
            </form>
        </div>
    </div>
</div>
<!-- end row -->



</div> <!-- container -->
@stop