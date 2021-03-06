@extends('site.layouts.app')
@section('content')
    <section class="section_gap big_features" id="OSI_Model">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <p class="top_title">Discover&learn</p>
                        <h2>OSI MODEL</h2>
                        <p>Seven layers about the OSI model, which we'll get to know better below</p>
                    </div>
                </div>
            </div>
    <div class="row features_content">
        <div class="col-lg-2 offset-lg-1">
            <div class="big_f_left">
                <img class="img-fluid" src="{{asset('site/img/f-img1.png')}}" alt="">
            </div>
        </div>
        <div class="col-lg-6 offset-lg-2">
            <div class="buttons_div">
                <button class="layer_osi action1">Application Layer</button>
                <button class="layer_osi action2">Presentation Layer</button>
                <button class="layer_osi action3">Session Layer</button>
                <button class="layer_osi action4">Transport Layer</button>
                <button class="layer_osi action5">Network Layer</button>
                <button class="layer_osi action6">Data Link Layer</button>
                <button class="layer_osi action7">Physical Layer</button>

            </div>
        </div>
        <div class="border-line"></div>
        <img class="shape1"src="{{asset('site/img/shape1.png')}}" alt="">
        <img class="shape2"src="{{asset('site/img/shape2.png')}}" alt="">
        <img class="shape3"src="{{asset('site/img/shape1.png')}}" alt="">
    </div>
            <section class="recent_update_area" id="#Twoopetion">
                <div class="container">
                    <div class="recent_update_inner">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="threats-tab" data-toggle="tab" href="#threats" role="tab" aria-controls="home" aria-selected="true">
                                    <span class="lnr lnr-screen"></span>
                                    <h6> THREATS</h6>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="Protocols-tab" data-toggle="tab" href="#Protocols" role="tab" aria-controls="Protocols"
                                   aria-selected="false">
                                    <span class="lnr lnr-screen"></span>
                                    <h6>PROTOCOLS</h6>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane" id="Protocols" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="line">Title Layer PROTOCOLS</p>
                                <div class="row recent_update_text align-items-center">

                                    <div class="col-lg-9">

                                        <div class="common_style row">

                                            <div class="col-sm-12 col-md-4">
                                                <h4 class="title_first">LOREM IPSUM DOLOR</h4>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  Ut wisi enim ad minim veniam, quis nostrud.

                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <h4 class="title_first">LOREM IPSUM DOLOR</h4>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  Ut wisi enim ad minim veniam, quis nostrud.

                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <h4 class="title_first">LOREM IPSUM DOLOR</h4>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  Ut wisi enim ad minim veniam, quis nostrud.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="chart_img">
                                            <img class="img-fluid" src="{{asset('site/img/f-img2.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane active" id="threats" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row recent_update_text align-items-center">
                                    <div class="col-lg-5">
                                        <div class="common_style">
                                            <p class="line">Title Layer threats</p>
                                            <h3>State machine diagram for  <br /> Constant jamming attack</h3>
                                            <div class="DFD_Model">
                                                <img src="{{asset('site/img/DFD.jpg')}}" class="dfd_img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <div class="chart_img">
                                            <img class="img-fluid" src="{{asset('site/img/chart.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section

@stop
