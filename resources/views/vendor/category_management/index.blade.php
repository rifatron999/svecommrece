@extends('vendor.master')
@section('title','Category Management')
@section('Category_management','active')
@section('content')
    <div class="container-fluid">
         <ul class="nav nav-tabs">
            <li class="active " ><a data-toggle="tab" href="#Categories">Categories</a></li>
            <li class="" ><a data-toggle="tab" href="#new">Create</a></li>
        </ul>
        <div class="tab-content">
            <div id="Categories" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-12 text-center form-style" style="overflow: auto">
                        <p class="small-heading"></p>
                        <form>
                            <table class="table table-striped col-md-12 table-bordered ">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col"class="text-center"></th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col"class="text-center">Description</th>
                                    <th scope="col"class="text-center">Image</th>
                                    <th scope="col"class="text-center">Status</th>
                                    <th scope="col" class="text-center">Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $s )
                                    <td>{{$s->id}}</td>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->description}}</td>
                                    <td>{{$s->image}}</td>
                                    <td>{{$s->status}}</td>
                                    <td>{{$s->operations}}</td>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <div id="new" class="tab-pane fade in   ">
                create
            </div>
        </div>
    </div>
@endsection
