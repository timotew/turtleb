@extends('adminlte::page')

@section('title', 'Turtle')

@section('content_header')
    <h1>Gold Coin Packages</h1>
    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php?p=dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Gold Coin Packages</li>
                                    </ol>
@stop

@section('content')
<div class="container-fluid">

<div class="row">
     <div class="col-12">
         <div class="card-box table-responsive">
             <!-- <h4 class="m-t-0 header-title">Gold Coins Packages List</h4> -->
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
             <p class="text-muted font-14 text-right">

                 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal1"> Add Gold Coins <i class="fa fa-plus m-l-5"></i> </button>
                <!--  <a href="index.php?p=advertisements-add" class="btn btn-primary waves-effect waves-light"> Add Conversion <i class="fa fa-plus m-l-5"></i> </a> -->
             </p>



             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Title</th>
                     <th>Gold Coins</th>
                     <th>Amount</th>

                     <th>Action</th>
                 </tr>
                 </thead>


                 <tbody>
                 @foreach ($coins as $coin)
                 <tr>
                 <td>{{ $loop->index+1  }}</td>
                     <td>{{ $coin->title }}</td>
                     <td>{{ $coin->unit }}</td>
                     <td>{{ $coin->amount }}</td>

                     <td>
                         <!-- <button type="button" class="btn btn-sm btn-icon waves-effect btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i> </button> -->
                         <button type="button" class="btn btn-sm btn-icon waves-effect btn-warning" data-toggle="modal" data-target="#myModal"> <i class="fa fa-edit"></i> </button>
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

<!-- sample modal content -->
             <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Gold Coins</h4>
                         </div>
                         <div class="modal-body">
                           <form action="{{ route('gold-coin.store') }}" method="post">
                               @csrf
                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="title" class="col-form-label">Title</label>
                                     <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="Title one">
                                 </div>

                             </div>

                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="gold" class="col-form-label">Number of Gold Coins</label>
                                     <input name="unit" type="text" class="form-control" placeholder="No. of Gold Coins" value="5">
                                 </div>
                                 <div class="form-group col-md-6">
                                     <label for="sliver" class="col-form-label">Price</label>
                                     <input name="amount" type="text" class="form-control" placeholder="Price" value="1000" />
                                 </div>
                             </div>

                             <div class="text-center">
                                 <button type="submit" class="btn btn-primary">Edit</button>
                             </div>



                           </form>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->



<!-- sample modal content -->
             <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title" id="myModalLabel">Gold Coins</h4>
                         </div>
                         <div class="modal-body">
                         <form action="{{ route('gold-coin.store') }}" method="post">
                               @csrf
                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="title" class="col-form-label">Title</label>
                                     <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                                 </div>

                             </div>

                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="gold" class="col-form-label">Number of Gold Coins</label>
                                     <input name="unit" type="text" class="form-control" placeholder="No. of Gold Coins">
                                 </div>
                                 <div class="form-group col-md-6">
                                     <label for="sliver" class="col-form-label">Price</label>
                                     <input name="amount" type="text" class="form-control" placeholder="Price"/>
                                 </div>
                             </div>

                             <div class="text-center">
                                 <button type="submit" class="btn btn-primary">Add</button>
                             </div>



                           </form>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->







</div> <!-- container -->
@stop