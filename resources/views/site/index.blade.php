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
                                <h1>CHART</h1>
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

    @isset($books)
        @foreach($books as $book)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel brand-carousel">
                                <div class="single-brand-item d-table">
                                    <div class="d-table-cell">
                                        <a href="{{route('book.download',$book->id)}}" class="fa fa-download download" aria-hidden="true"></a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        @endisset
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
                </div>
            </div>

            @isset($items)
          @foreach($items as $item)
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel brand-carousel">
                        <a href="{{route('blogs.details.page',$item->id)}}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <div class="div-news">
                                        <Div class="title-new">
                                            <h5>{{$item->title}}</h5>
                                        </Div>
                                        <div class="new-pr">
                                            <p>{{$item->short_description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endisset
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

