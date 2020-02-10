@extends('website.master')
@section('content')
    <div class="container-fluid nav-space">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116883.28847218456!2d90.32219097726825!3d23.725875580788735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8d73a64e709%3A0x65a4e99bd5bb0ebd!2sOld%20Dhaka%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1580291322432!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div>
        <div class="container text-center">
            <h1 class="heading mt-3 mb-5">Get in Touch</h1>
            <div class="row margin_top">

                <div class="col-md-6">
                    <form>
                        <input name="name" type="text" class="feedback-input" placeholder="Name" />
                        <input name="email" type="text" class="feedback-input" placeholder="Email" />
                        <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                        <input type="submit" class="submit" value="SUBMIT"/>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact_list">
                        <ul>
                            <li>
                                <span><i class="fas fa-map-marked-alt"></i></span>
                                <span >: Old town dhaka </span>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <span >: nobin Bangladesh@gmail.com</span>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <span >: 021234567</span>
                            </li>
                            <li>
                                <span><i class="fas fa-mobile-alt"></i></span>
                                <span >:02145996588</span>
                            </li>
                            <li>
                                <span><i class="fas fa-mobile-alt"></i></span>
                                <span >: 01978-665140-50</span>
                            </li>
                            <li>
                                <span><i class="fas fa-mobile-alt"></i></span>
                                <span >: 0123456789</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
