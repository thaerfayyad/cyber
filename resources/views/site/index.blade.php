@extends('site.layouts.app')
@section('title', 'Home')

@section('content')


    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row" style="padding: 100px;">
                    <div class="col-lg-5">
                        <div class="banner_content">
                            <h4 style=" text-transform: capitalize">
                                Antenna Campus <br>
                                Cybersecurity science
                            </h4>
                            <p> Looking for the latest cyber security threats trends
                            </p>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="{{route('about')}}"><span>Read more</span></a>

                            </div>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


                    <div class="col-lg-7">
                        <div class="chart_div">
                            <div class="first_chart row">
                                <div class="col-lg-8">

                                </div>
                            </div>
                           </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://www.jsdelivr.com/package/npm/chart.js?path=dist"></script>
    <div class="card" style="text-align: center; color: #00FF00;border: 2px solid;margin-top: 10px">
        <div class="card-body">
            <h2 class="card-title">chart</h2>
            <div class="row">
                <div class="col-1">
                </div>
                    <div class="col-10"> <p class="card-text">
                        <div class="row">
                            <div class="col-12">
                                <h3 style="color: {{$lab['yaxis'][1]}};float: left">{{$lab['yaxis'][0]}}</h3>
                            </div>


                        </div>
                            <p>


                            {!! $ChatBlade !!}

                        </p></div>
                <div class="col-12">
                    <h3 style="color: {{$lab['xaxis'][1]}};text-align: center;">{{$lab['xaxis'][0]}}  </h3>
                </div>
                <div class="col-1">

                </div>
            </div>



        </div>
    </div>





    <!--================End Home Banner Area =================-->


    <!--================Start  Suggested Banner Area =================-->

    <section class="section-news mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 text-center">
                <div class="main_title">
                    <h2 class="top_title"> Suggested books</h2><br>
                    <h4 style="color: #8D5BF9;">You can share us your favorite books, exercises and resources by add attachments after sign up</h4>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="div-scroll-news">
                        @isset($books)
                        @foreach( $books as $item)
                            <div class="new1 row" style="word-wrap: break-word;">
                                <div class="col-md-10 left-div">
                                   <h3>{{$item->name}}</h3>
                                    <p>{{$item->details}}</p>
                                </div>
                            </div>
                        @endforeach
                        @endisset

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_content  more-intorduction text-center">
                        <h2>
                            ANTENNA CAMPUS <br>
                            Cybersecurity science
                        </h2>
                        <p mt-5>
                            You can share us your own suggested  and Books by add attachment
                        </p>

                        <div class="mt-5 align-items-center">


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--================End Suggested Banner Area =================-->
    <!--================ Srart news Area ===============-->

    <section class="section-news mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 text-center">
                <div class="main_title">
                    <h2 class="top_title">latest news</h2> <br>
                    <h4 style="color: #8D5BF9;"> Browse the lates news and tools of cyber security</h4>
                </div>
            </div>
        </div>

        <div class="container">

                <div class="row">
                    <div class="col-md-8">
                        <div class="div-scroll-news">
                            @isset($items)
                            @foreach($items as$item)
                            <div class="new1 row" style="word-wrap: break-word;">
                                <div class="col-md-10 left-div">
                                    <a href="{{route('news.details.page',$item->id)}}"> <h3>{{$item->title}}</h3></a>
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                            @endforeach
                            @endisset

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_content  more-intorduction text-center">
                            <h2>
                                ANTENNA CAMPUS <br>
                                Cybersecurity science
                            </h2>
                            <p mt-5>
                                You can share us your own tools and news by contact us over contact page
                            </p>

                            <div class="mt-5 align-items-center">


                            </div>

                        </div>
                    </div>

            </div>

        </div>
    </section>
    <!--================ End news Area =================-->


    <!--================ Srart Brand Area ===============-->



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
    <footer>
        <div class="footer_last">
            <p>Copyright  <i class="fa fa-copyright" aria-hidden="true"></i>  {{date('Y')}} </p>
        </div>
    </footer>



{{--    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>--}}


@stop

