@extends('site.layouts.app')

@section('content')
    <br><br><br><br><br> <br>
      <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @if(is_null($items))
                            <h3 style="text-align: center"> No Posts</h3>
                        @else
                            @foreach($items as $item)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Books</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{url('/uploads/images/blogs/'.$item->image)}}" alt="{{$item->image}}" title=""    >
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>{{$item->title}}</h2></a>
                                        <p> {{$item->description}}.</p>
                                            <a href="{{route('blogs.details.page' ,$item->id)}}" class="primary_btn"><span>View More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <div class="center pagination">
                                {{ $items->links() }}
                            <div>
                        @endif

                        {{-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}

                    </div>
                </div>
                </div>
            </div>
    </section>
    <!--================Blog Area =================-->


@stop
