@extends('templates.master')
@section('title','Əlaqə')
@section('content')
    <div class="site-wrapper">
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <h3 class="ct_title">Mesaj göndər bizə</h3>
                            @if (Session::has('message_sent'))
                                <div class="alert alert-success">{{ Session::get('message_sent') }}</div> 
                            @endif
                            <form action="{{ route('contactPost') }}" method="POST" id="contact-form" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Ad</label>
                                            <input type="text" id="con_name" name="name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>E-poçt</label>
                                            <input type="email" id="con_email" name="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Messaj</label>
                                            <textarea id="con_message" name="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-btn">
                                            <button type="submit" class="btn btn-black w-100">send</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>

                    @foreach ($settings as $setting)

                        <div class="col-lg-6">
                            <div>
                                <iframe style="width:570px; height: 450px"
                                loading="lazy"
                                allowfullscreen
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC95dUvsO8X9iqlEqYMq5GOx0Yu0A7utRk&q={{ $setting->map_name }}">
                        </iframe>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </main>
        <div id="map"></div>
        <div class="contact-bottom-info inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <!--Contact Information Start-->

                    

                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <div class="content">
                                <h3 class="title">Telefon ilə əlaqə</h3>
                                <p>{{ $setting->contact_phone }} <br /></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <div class="content">
                                <h3 class="title">E-poçt ilə əlaqə</h3>
                                <p>{{ $setting->contact_email }} <br /></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <div class="content">
                                <h3 class="title">Adresimiz</h3>
                                <p>{{ $setting->contact_address }} <br /></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <div class="content">
                                <h3 class="title">Pustok Social</h3>
                                <ul class="social-list list-inline">
                                    <li class="single-social facebook"><a href="{{ $setting->social_facebook }}"><i class="ion ion-social-facebook"></i></a></li>
                                    <li class="single-social twitter"><a href="{{ $setting->social_twitter }}"><i class="ion ion-social-twitter"></i></a></li>
                                    <li class="single-social youtube"><a href="{{ $setting->social_instagram }}"><i class="ion ion-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach

                    <!--Contact Information End-->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('addcss')
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
@endsection
@section('addjs')
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection