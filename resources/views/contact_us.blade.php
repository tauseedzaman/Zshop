@extends('layouts.app')
@section('content')
    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    @livewire('contact-us')<!-- ./End Contact Form -->
                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 " >
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contact-short-info" >
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Phone: +880-31-000-000</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: +880-31-000-000</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>Email: hello@example.com</span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                <li><a class="fb-icon" href="https://www.facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->



                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>


@endsection
