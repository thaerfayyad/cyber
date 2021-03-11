@extends('site.layouts.app')

@section('content')

    <section class="blog_area single-post-area section_gap" style="margin-top: 5%; margin-bottom: 5%;">
        <div class="">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-5">

                            <div class="feature-img">
                                <img class="img-fluid" src="{{asset('/uploads/images/posts/'.$item->image)}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7 blog_details new-textp">
                            <h2>{{$item->title}}</h2>
                            <p class="excert">
                                {{$item->description}}
                               </p>

                        </div>

                    </div>



                </div>

            </div>

        </div>
        </div>
    </section>
@stop
