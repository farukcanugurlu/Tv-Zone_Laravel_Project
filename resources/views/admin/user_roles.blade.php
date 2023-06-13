@extends('layouts.admin_msg')

@section('content')

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail User Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <tr>
                    <th style="width: 200px">Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                </tr>

                <tr>
                    <th>Name & Surname</th>
                    <td>{{$data->name}}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td> <table>
                            @foreach ($data->roles as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td> <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id ])}}"
                                            onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>   </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                <tr>
                    <th >Add Role</th>
                    <td>
                        <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <select name="roleid">
                                @foreach ($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                        </form>
                    </td>
                </tr>


            </table>
        </div>
        <!-- /.card-body -->
    </div>

</section>
<!-- /.content -->

@endsection
