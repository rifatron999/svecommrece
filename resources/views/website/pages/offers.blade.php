@extends('website.master')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Grab your offer</h1>
        <div class="row">
            <div class="col-md-12">
                <img class="mb-3" src="{{ asset('assets/website/images/offers/offer1.png') }}" width="100%" height="400px" alt="">
            </div>
            <div class="col-md-12">
                <img class="mb-3"  src="{{ asset('assets/website/images/offers/offer2.jpg') }}" width="100%" height="400px"  alt="">
            </div>
            <div class="col-md-12">
                <img class="mb-3"  src="{{ asset('assets/website/images/offers/offer3.png') }}" width="100%" height="400px"  alt="">
            </div>
            <div class="col-md-12">
                <img class="mb-3"  src="{{ asset('assets/website/images/offers/offer4.jpg') }}" width="100%" height="400px"  alt="">
            </div>
            <div class="col-md-12">
                <img class="mb-3"  src="{{ asset('assets/website/images/offers/offer5.png') }}" width="100%" height="400px"  alt="">
            </div>
        </div>
    </div>
@endsection
