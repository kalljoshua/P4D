@extends('...layouts.layout')
@section('title')
    P4D || Create File
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create File</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashoard</a></li>
                        <li class="breadcrumb-item active">Create File</li>
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
                        <form action="{{ route('add-file') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body col-md-8 justify-content-center">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        placeholder="File Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File Year</label>
                                    <input type="text" class="form-control" name="year" id="exampleInputEmail1"
                                        placeholder="File Year">
                                </div>
                                <div class="form-group">
                                    <select name="sectorId" id="sector-id" class="form-control">
                                        <option value="">Select Sector</option>
                                        @foreach ($sectors as $sector)
                                            <option value="{{ $sector->id }}">
                                                {{ $sector->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="file_type" id="file_type" class="form-control">
                                        <option value="">Select File Type</option>
                                        <option value="plan">Plan</option>
                                        <option value="budget">Budget</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select image to upload</label>
                                    <input type="file" class="form-control" name="file" id="fileToUpload">
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
