@extends('site.layouts.app')

@section('content')


    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="banner_content">
                            <h2 style=" text-transform: capitalize">
                                Antenna Campus <br>
                                Cybersecurity science
                            </h2>
                            <p> attacks. In order to be able to be
                            </p>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="{{route('about')}}"><span>Read more</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="chart_div">
                            <div class="first_chart row">
                                <div class="col-sm-12 col-md-6">
                                    <img src="{{asset('site/img/chart4.png')}}" class="chart-img">
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <img src="{{asset('site/img/chart4.png')}}" class="chart-img">
                                </div>

                                <hr>

                                <div class="col-sm-12 col-md-6">
                                    <img src="{{asset('site/img/chart4.png')}}" class="chart-img">
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <img src="{{asset('site/img/chart4.png')}}" class="chart-img">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>chart</h1>
    <canvas id="canvas" height="280" width="600"></canvas>
    <!--================End Home Banner Area =================-->



    <!--================ Srart Brand Area ===============-->
    <section class="brand_area section_gap" id="Suggestion">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 text-center">
                    <div class="main_title">
                        <p class="top_title">Suggested Attachments</p>
                        <h2 style="color: #8D5BF9;">The best books available on the site have been suggested to you</h2>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel brand-carousel">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="{{asset('site/img/book_.jpg')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->

    <!--================ Srart Brand Area ===============-->
    <section class="brand_area section_gap" id="Suggestion">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 text-center">
                    <div class="main_title">
                        <p class="top_title">Weekly news</p>
                        <h2 style="color: #8D5BF9;">
                            The most important cybersecurity news and updates is displayed on a weekly basis
                        </h2>
                    </div>

                    <div class="review">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel brand-carousel">

                        <a href="./New-details.html">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <div class="div-news">
                                        <Div class="title-new">
                                            <h5>Title New</h5>
                                        </Div>
                                        <div class="new-pr">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                minima distinctio! Iure, et iste. Illum ipsa ea officiis cupiditate?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>


                        <a href="./New-details.html">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <div class="div-news">
                                        <Div class="title-new">
                                            <h5>Title New</h5>
                                        </Div>
                                        <div class="new-pr">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                minima distinctio! Iure, et iste. Illum ipsa ea officiis cupiditate?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->



    <!--================Footer Area =================-->
    <section class="footer_area" id="contact">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-6">

                    <div class="form_contanct">
                        <div class="heading_contact">
                            <h3 class="heading_form">Contact Us</h3>
                            @include('admin.include.alerts.success')
                            @include('admin.include.alerts.errors')
                        </div>

                        <form class="form" action="{{route('store.contact')}}" method="POST">
                            @csrf
                            <div class="inputs_contact">
                                <input type="text" class="input-contact" placeholder="name" name="name" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="inputs_contact">
                                <input type="email" class="input-contact" placeholder="email" name="email" required >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="inputs_contact">
							<textarea class="input_msg" placeholder="Write your massage" name="message"  required>

								</textarea>
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="btn_contact">
                                <button class="btn_msg"> Send</button>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="contant_info">
                        <img src="{{asset('site/img/f-img1.png')}}">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================End Footer Area =================-->
@stop

