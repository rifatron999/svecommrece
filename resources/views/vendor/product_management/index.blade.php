@extends('vendor.master')
@section('title','Product Management')
@section('Product_management','active')
@section('content')
    <div class="container-fluid">
         <ul class="nav nav-tabs">
            <li class="active " ><a data-toggle="tab" href="#Products">Products</a></li>
            <li class="" ><a data-toggle="tab" href="#Create">Create</a></li>
        </ul>
        <div class="tab-content">
           {{-- <div id="Brands" class="tab-pane fade in active">

                <div class="row">
                    <div class="col-md-12 text-center " style="overflow: auto">
                        <p class="small-heading">My Brands </p>
                        @if($brands->count() !== 0 )
                        @foreach ($brands as $s)
                            <div class="col-md-4 news mb-2 mar-bott">
                                <div class="head img_hover">
                                    @if(empty($s->image))
                                    <img src="{{ asset('assets/vendor/images/icon/no_image.jpg') }}" class="img" alt="">
                                    @else
                                    <img src="{{ asset('assets/vendor/images/brands/') }}/{{$s->image}}" class="img" alt="">
                                    @endif

                                    <div class="overlay">
                                        <a class="btn btn-default btn-xs" href="{{route('brandRemove',Crypt::encrypt($s->id))}}"  title="Remove" onclick="return confirm('Delete this?')"><i class="fa fa-trash"></i></a>
                                        <a class="btn btn-success"  href="{{route('brandManagementEdit',Crypt::encrypt($s->id))}}" title="Edit"><i class="fa fa-edit"></i></a>
                                        <sub><mark>{{$s->status}}</mark></sub>
                                    </div>
                                </div>
                                <div class=" text-center ">
                                    <h3><b>{{$s->name}}</b></h3>
                                    <h5><b>{!! $s->description !!}</b></h5>
                                </div>
                            </div>
                        @endforeach
                        {!! $brands->Links() !!}
                        @else
                            <h3 >Nothing to show</h3>
                        @endif

                    </div>

                </div>
            </div>--}}
            <div id="Create" class="tab-pane fade in ">
                <form method="post" enctype="multipart/form-data" action="{{ route('productAdd') }}">
                    @csrf
                    <div class="modal-body ">
                        <div class="form-group row">
                            <img src="{{ asset('assets/vendor/images/icon/no_image.jpg') }}" class="imgs center-block" alt="" id="image-preview">
                            {{--<label for="recipient-name" class=" label label-primary">Image</label>--}}
                            {{--<input name="image" type="file" class="form-control" onchange="previewImage(event)">--}}
                        </div>{{--1st row--}}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label  class=" label label-primary">Name</label>
                                <input name="name" type="text" class="form-control form-control-sm" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-primary">Category</label>
                                <select  title="Choose Category" name="category_id" class="form-control">
                                    @foreach($categories as $s)
                                        @if($s->parent_id === NULL)
                                            <optgroup label="{{$s->name}}">
                                                @foreach($categories as $s2)
                                                    @if($s2->parent_id === $s->id)
                                                        <option value="{{$s2->id}}">{{$s2->name}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-primary">Brand</label>
                                <select name="brand_id" class="form-control">
                                    @foreach($brands as $s)
                                        <option value="{{$s->id}}" >{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>{{--2nd row--}}
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label  class=" label label-primary">Price</label>
                                <div class="input-group">
                                    <input name="price" type="number" class="form-control form-control-sm" value="{{ old('price') }}" required>
                                    <span class="input-group-addon "> <b>৳</b></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-default">Offer Price</label>
                                <div class="input-group">
                                    <input name="offer_price" type="number" class="form-control form-control-sm" value="{{ old('offer_price') }}" >
                                    <span class="input-group-addon "> <b>৳</b></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-default">Offer Percentage</label>
                                <div class="input-group">
                                    <input name="offer_percentage" type="number" class="form-control form-control-sm" value="{{ old('offer_percentage') }}" >
                                    <span class="input-group-addon "> <b>%</b></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-default">Stock</label>
                                <input name="stock" type="number" class="form-control form-control-sm" value="{{ old('stock') }}" >
                            </div>
                        </div>{{--3rd row--}}
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label  class=" label label-default">Color</label>
                                <input name="color" type="text" class="form-control form-control-sm" value="{{ old('color') }}" >
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-default">Capacity/Size</label>
                                <input name="size_capacity" type="text" class="form-control form-control-sm" value="{{ old('size_capacity') }}" >
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-default">Model</label>
                                <input name="model" type="text" class="form-control form-control-sm" value="{{ old('model') }}" >
                            </div>
                            <div class="col-sm-3">
                                <label  class=" label label-primary">Status</label>
                                <select name="status" class="form-control" title="Select Status">
                                    <option value="Available" >Available</option>
                                    <option value="Out of Stock" >Out of Stock</option>
                                    <option value="Disable" >Distable</option>
                                </select>
                            </div>
                        </div>{{--4th row--}}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label  class=" label label-primary">Description</label>
                                <textarea  name="description" class="form-control basic-example" >{{ old('description') }}</textarea>
                            </div>
                            <div class="col-sm-6">
                                <label  class=" label label-default">Specification</label>
                                <textarea id="" name="specification" class="form-control basic-example" >{{ old('specification') }}</textarea>
                            </div>
                        </div>{{--5th row--}}
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success  center-block">+ Add Product</button>
                            </div>
                        </div>{{--6th row--}}
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
