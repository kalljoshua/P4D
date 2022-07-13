<div class="modal fade" id="modal-edit-country">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit {{ $country['name'] }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="{{ route('edit-country', ['country_id' => $country['id']]) }}" method="POST">
                                @csrf
                                <div class="card-body col-md-8 justify-content-center">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Country Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            placeholder="Country Name" value="{{ $country['name'] }}">
                                    </div>
                                    
                                </div>
                                <!-- /.card-body -->
    
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                </div>
            </div>
            <div class="modal-footer ">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
