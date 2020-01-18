@extends('vendor.master')
@section('title','Brand Management')
@section('Brand_management','active')
@section('content')
    {{--<div class="container-fluid">
         <ul class="nav nav-tabs">
            <li class="active " ><a data-toggle="tab" href="#Categories">Categories</a></li>
            <li class="" ><a data-toggle="tab" href="#new">Create</a></li>
        </ul>
        <div class="tab-content">
            <div id="Categories" class="tab-pane fade in active">

                <div class="row">
                    <div class="col-md-12 text-center form-style" style="overflow: auto">
                        <p class="small-heading"><a class="btn btn-success" data-toggle="modal" data-target="#modal_category_add" onclick="setParentId({{$parent_id}})" data-whatever="@mdo"><i class="fas fa-plus"> Add Category</i></a></p>
                        @foreach ($categories as $s)

                            <div class="col-md-4 news mb-2 mar-bott">
                                <div class="head img_hover">
                                    <a class="btn btn-primary btn-xs" href="{{route('subCategoryView',$s->id)}}">
                                        @if(empty($s->image))
                                        <img src="{{ asset('assets/vendor/images/icon/no_image.jpg') }}" class="img" alt="" title="Click to see Sub-Category">
                                        @else
                                        <img src="{{ asset('assets/vendor/images/categories/') }}/{{$s->image}}" class="img" alt="" title="Click to see Sub-Category">
                                        @endif
                                    </a>
                                    <div class="overlay">
                                        <a class="btn btn-danger btn-xs" href="{{route('categoryRemove',$s->id)}}"  title="Remove" onclick="return confirm('Delete this?')"><i class="fa fa-trash"></i></a>
                                        <a class="btn btn-success" data-toggle="modal" data-target="#modal_category_update" onclick="setCatUpdate('{{$s->id}}','{{$s->name}}','{{$s->description}}')" data-whatever="@mdo" title="Edit"><i class="fa fa-edit"></i></a>
                                        <sub>{{$s->status}}</sub>
                                    </div>
                                </div>
                                <div class=" text-center ">
                                    <h3><b>{{$s->name}}</b></h3>
                                    <h5><b>{{$s->description}}</b></h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="new" class="tab-pane fade in   ">
                create
            </div>
        </div>
    </div>--}}
@endsection
