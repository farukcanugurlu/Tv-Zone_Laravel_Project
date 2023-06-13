@extends('layouts.admin_msg')

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="active">New Anno</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-2">

                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-10">

                    <!-- form start -->
                    <form role="form" action="{{route('admin_anno_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Anno</label>
                            </div>

                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" id="title" value="{{$data->title}}" name="title" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <textarea id="detail" value="{{$data->detail}}" name="detail" ></textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit Anno</button>
                        </div>
                    </form>


                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
