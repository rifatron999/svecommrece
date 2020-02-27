@extends('vendor.master')
@section('title','Contact Management')
@section('Contact_management','active')
@section('content')
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="active " ><a data-toggle="tab" href="#ask_a_question"> Ask a question </a></li>
            <li class="" ><a  data-toggle="tab" href="#complain"> Complain </a> </li>
            <li class="" ><a  data-toggle="tab" href="#suggestion"> Suggestion </a> </li>
            <li class="" ><a  data-toggle="tab" href="#contact"> Contact </a> </li>

        </ul>
        <div class="tab-content">
            <div id="ask_a_question" class="tab-pane fade in active">
                <div class="row">
                    @if(!$ask_a_question->isEmpty())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($ask_a_question as $a_question)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td>{{$a_question->name}}</td>
                                    <td>{{ $a_question->email }}</td>
                                    <td>{{ $a_question->phone }}</td>
                                    <td>{{ $a_question->address }}</td>
                                    <td>{{ Str::limit($a_question->message, 50) }}</td>
                                    <td>
                                        @if($a_question->status == "Pending")
                                            <span class="label label-info">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Solved")
                                            <span class="label label-success">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Cancelled")
                                            <span class="label label-danger">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Processing")
                                            <span class="label label-primary">{{ $a_question->status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <a href="{{ route('contact_details',Crypt::encrypt($a_question->id) ) }}" title="Details" class="btn btn-primary"> <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="{{ route('contact_delete',Crypt::encrypt($a_question->id) ) }}" title="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div id="complain" class="tab-pane fade in " >
                <div class="row">
                    @if(!$complain->isEmpty())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($complain as $a_question)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td>{{$a_question->name}}</td>
                                    <td>{{ $a_question->email }}</td>
                                    <td>{{ $a_question->phone }}</td>
                                    <td>{{ $a_question->address }}</td>
                                    <td>{{ Str::limit($a_question->message, 50) }}</td>
                                    <td>
                                        @if($a_question->status == "Pending")
                                            <span class="label label-info">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Solved")
                                            <span class="label label-success">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Cancelled")
                                            <span class="label label-danger">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Processing")
                                            <span class="label label-primary">{{ $a_question->status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <a href="{{ route('contact_details',Crypt::encrypt($a_question->id) ) }}" title="Details" class="btn btn-primary"> <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="{{ route('contact_delete',Crypt::encrypt($a_question->id) ) }}" title="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div id="suggestion" class="tab-pane fade in " >
                <div class="row">
                    @if(!$suggestion->isEmpty())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($suggestion as $a_question)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td>{{$a_question->name}}</td>
                                    <td>{{ $a_question->email }}</td>
                                    <td>{{ $a_question->phone }}</td>
                                    <td>{{ $a_question->address }}</td>
                                    <td>{{ Str::limit($a_question->message, 50) }}</td>
                                    <td>
                                        @if($a_question->status == "Pending")
                                            <span class="label label-info">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Solved")
                                            <span class="label label-success">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Cancelled")
                                            <span class="label label-danger">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Processing")
                                            <span class="label label-primary">{{ $a_question->status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <a href="{{ route('contact_details',Crypt::encrypt($a_question->id) ) }}" title="Details" class="btn btn-primary"> <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="{{ route('contact_delete',Crypt::encrypt($a_question->id) ) }}" title="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div id="contact" class="tab-pane fade in " >
                <div class="row">
                    @if(!$contact->isEmpty())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($contact as $a_question)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td>{{$a_question->name}}</td>
                                    <td>{{ $a_question->email }}</td>
                                    <td>{{ $a_question->phone }}</td>
                                    <td>{{ $a_question->address }}</td>
                                    <td>{{ Str::limit($a_question->message, 50) }}</td>
                                    <td>
                                        @if($a_question->status == "Pending")
                                            <span class="label label-info">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Solved")
                                            <span class="label label-success">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Cancelled")
                                            <span class="label label-danger">{{ $a_question->status }}</span>
                                        @elseif($a_question->status == "Processing")
                                            <span class="label label-primary">{{ $a_question->status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <a href="{{ route('contact_details',Crypt::encrypt($a_question->id) ) }}" title="Details" class="btn btn-primary"> <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="{{ route('contact_delete',Crypt::encrypt($a_question->id) ) }}" title="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
