@extends('site.layouts.app')
@section('content')
    <section class="section_gap big_features" id="OSI_Model">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <p class="top_title">Discover&learn</p>
                        <h2>OSI MODEL</h2>
                        <p>Seven layers about the OSI model, which we,ll get to know better below</p>
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
                        <button class="layer_osi action1" id="1">Application Layer</button>
                        <button class="layer_osi action2" id="2" >Presentation Layer</button>
                        <button class="layer_osi action3" id="3" >Session Layer</button>
                        <button class="layer_osi action4" id="4" >Transport Layer</button>
                        <button class="layer_osi action5" id="5" >Network Layer</button>
                        <button class="layer_osi action6" id="6" >Data Link Layer</button>
                        <button class="layer_osi action7" id="7" >Physical Layer</button>

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
                                                <h4 class="title_first"></h4>
                                                <p class="description">

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
                                            <p class="line"></p>
                                            <h3></h3>
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
            </section>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript">
                $(".layer_osi").click( function(){

                    var id = this.id;
                    //alert(id);
                    $.ajax({
                        url: "{{ route('get.layer') }}",
                        type:"get",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id:id,
                        },
                        success:function(response){
                            console.log(response.success);


                            var protocols = `
                <p class="line">Title Layer PROTOCOLS</p>
                                <div class="row recent_update_text align-items-center">

                                    <div class="col-lg-9">

                                        <div class="common_style row">

                                            <div class="col-sm-12 col-md-4">
                                                <h4 class="title_first">${response.success.title_protocol}</h4>
                                                <p class="description">
                                                    ${response.success.descriptions_protocol}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                `;

                            var threats =
                                `
                <div class="row recent_update_text align-items-center">
                                    <div class="col-lg-5">
                                        <div class="common_style">
                                            <p class="line">${response.success.title_threats}</p>
                                            <h3>${response.success.descriptions_threats}</h3>
                                            <div class="DFD_Model">
                                                <img src="{{asset('uploads/images/layers/${response.success.img_threats}')}}" class="dfd_img" width="350px">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                `;

                            $('#threats').empty();
                            $('#threats').append(threats);
                            $('#Protocols').empty();
                            $('#Protocols').append(protocols);



                        }
                    });
                });

            </script>

@stop


