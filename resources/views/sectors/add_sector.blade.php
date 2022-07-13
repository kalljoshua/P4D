@extends('...layouts.layout')
@section('title')
    P4D || Add Sector
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Sector Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Sector Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('post-sector') }}" method="POST">
                            @csrf
                            <div class="card-body col-md-8 justify-content-center">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sector Name</label>
                                    <input type="hidden" name="status" value="1">
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        placeholder="Sector Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select District</label>
                                    <select class="form-control selectpicker" name="districtId">
                                        <option value="">--Select--</option> 
                                        @foreach ($districts as $district)
                                            <option value="{{ $district['id'] }}"> {{ $district['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('extra_js')
<script>
$(function() {
    $('.selectpicker').selectpicker();
  });
</script>
@endsection