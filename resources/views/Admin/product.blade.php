@extends('admin/layout')

@section('container')
    <div class="overview-wrap">
        <h2 style="color: rgb(19, 106, 191)">Products</h2>
        <a href="{{url('admin/product/manage_product')}}">    
            <button class=" signinbutton btn-hover">
                <i class="zmdi zmdi-plus"></i>add item</button>
        </a>
    </div>

    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->category}}</td>
                            <td>
                            @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            @endif
                            </td>
                            <td>
                                <a href="{{url('admin/product/manage_product/')}}/{{$list->id}}"><button type="button" class="btn btn-info">Edit</button></a>

                                <a href="{{url('admin/product/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
    
@endsection



