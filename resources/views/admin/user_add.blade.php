@extends('layouts.admin_msg')

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="active">New Entity</li>
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
                    <form role="form" action="{{route('admin_users_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >New User</label>
                            </div>

                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" id="name" name="name" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" id="email" name="email" class="form-control"   >
                            </div>
                            <div class="form-group">
                                @csrf
                                <label >Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add User</button>
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
