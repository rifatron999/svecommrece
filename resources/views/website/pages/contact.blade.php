@extends('website.master')
@section('content')
    <div class="container-fluid nav-space">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8066266429128!2d90.39153621498076!3d23.718598584605086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8de2eee84f5%3A0xb5aa5a87f6aa85a2!2s17%20Horonath%20Ghosh%20Rd%2C%20Dhaka%201211!5e0!3m2!1sen!2sbd!4v1581680539838!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span >: 17 Horonath Ghosh Rd, Lalbagh, Dhaka 1211 </span>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <span >: nobinbangladeshwebmail@gmail.com</span>
                            </li>
                            <li>
                                <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                <span >: 01877-717404</span>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
