@extends('website.master')
@section('content')
    <section id="banner">
        <div class="">
            <img style="width: 100%" src="{{ asset('assets/website/images/banner.jpg') }}" alt="">
        </div>
    </section>
    <section id="why_us">
        <div class="container">
            <h1 class="text-center mt-5 mb-3">Why us</h1>
            <p class="text-center">Nobin Bangladesh is an online shop in Dhaka, Bangladesh. We believe time is valuable to our fellow
                Dhaka residents, and that they should not have to waste hours in traffic, brave bad weather and wait in
                line just to buy basic necessities like eggs! This is why Nobin Bangladesh delivers everything you need right
                at your door-step and at no additional cost.</p>
        </div>
    </section>
    <section id="we_have">
        <div class="container">
            <h1 class="text-center mt-5 mb-3">Products We Have</h1>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('pages.subCatgProductSearch',[$category->id]) }}" target="_blank">
                            <div class="card" >
                            <img class="card-img-top p-2" src="{{ asset('assets/vendor/images/categories') }}/{{ $category->image }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><b>{{ $category->name }}</b></p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{route('pages.home')}}" class="btn btn-success text-center">See more Products</a>
        </div>
    </section>
    <section id="we_deliver" class="mt-5 mb-3">
        <div class="row">
            <div class="col-md-6">
                <div class="map-img text-center">
                    <img src="{{ asset('assets/website/images/map.png') }}" class="p-3" style="width: 300px;height: 300px" alt="">
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="map-text">
                    <h5>We Deliver</h5>
                    <h5>All Over</h5>
                    <h1 style="color: blue">Bangladesh</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="people_love_us" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="people_icon text-center p-3">
                        <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <div class="people_title text-center">
                        <h2>Fast Delivery</h2>
                        <p>No waiting in traffic, no haggling, no worries carrying groceries, they're delivered right at your door.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="people_icon text-center p-3">
                        <i class="fa fa-user-clock fa-3x"></i>
                    </div>
                    <div class="people_title text-center">
                        <h2>24 hr service</h2>
                        <p>No waiting in traffic, no haggling, no worries carrying groceries, they're delivered right at your door.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="people_icon text-center p-3">
                        <i class="fa fa-shopping-bag fa-3x"></i>
                    </div>
                    <div class="people_title text-center">
                        <h2>Best Quality Product</h2>
                        <p>No waiting in traffic, no haggling, no worries carrying groceries, they're delivered right at your door.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
