@extends('layouts.admin')

@section('title','Messages List')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Messages</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Messages</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </div>

 <section class="content">

     <div class="card">
         <div class="card-header">
             <a href="#" type="button" class="btn btn-block btn-info" style="opacity: .8">Add Product</a>
         </div>
     </div>

     <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
             <thead>
               tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Subject</th>
                 <th>Message</th>
               </tr>
             </thead>
             <tbody>
             @foreach($datalist as $rs)
                 <tr>
                     <td>{{$rs->id}}</td>
                     <td>{{$rs->name}}</td>
                     <td>{{$rs->email}}</td>
                     <td>{{$rs->subject}}</td>
                     <td>{{$rs->message}}</td>
                     <td>{{$rs->status}}</td>
                     <td><a href="{{route('admin_message_edit',['id' =>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                      <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a>
                     </td>
                     <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure')"> <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>

                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
 </section>
