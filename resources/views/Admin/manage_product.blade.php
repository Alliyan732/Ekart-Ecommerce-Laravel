@extends('admin/layout')

@section('container')

@if($id>0)
    {{$image_required=""}}
@else
    {{$image_required="required"}}
@endif



    <div class="overview-wrap">
        <h2 style="color: rgb(19, 106, 191)">Manage Products</h2>
    </div>
    
    <a href="{{url('admin/product')}}">
        <button type="button" class="btn btn-success signinbutton btn-hover">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1"> Name</label>
                                                <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="image" class="control-label mb-1"> Image</label>
                                                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}>
                                                @error('image')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="category" class="control-label mb-1"> Category</label>
                                                <select id="category" name="category" class="form-control" required>
                                                    <option value="select">Select Category</option>
                                                        <option value="new_collection">New Collection </option>
                                                        <option value="trending">Trending</option>
                                                        <option value="sale">Sale</option>
                                                        <option value="special_offers">Special Offers</option>
                                                </select>
                                            </div>                                           

                                            <div class="form-group">
                                                <label for="short_desc" class="control-label mb-1"> Short Desc</label>
                                                <textarea id="short_desc" name="short_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$short_desc}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="desc" class="control-label mb-1"> Desc</label>
                                                <textarea id="desc" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$desc}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="keywords" class="control-label mb-1"> Keywords</label>
                                                <textarea id="keywords" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$keywords}}</textarea>
                                            </div>


                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1"> Price</label>
                                                <input id="price" value="{{$price}}" name="price" type="text" class="form-control" aria-required="true" aria-invalid="false" required></input>
                                            </div>




                                            <div style="text-align: center;">
                                                <button id="payment-button" type="submit" class="signinbutton btn-hover" style="width: 40%">
                                                    Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>                        
                        </div>

        </div>
    </div>
                        
@endsection