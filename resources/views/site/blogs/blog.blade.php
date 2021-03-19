@extends('site.layouts.app')

@section('content')
    <br><br><br><br><br> <br>

    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @isset($items)
                            @foreach($items as $item)
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">

                                    <ul class="blog_meta list">
                                        <li><a href="#"><i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{$item->created_at->format('y/m/d')}}<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">comment of post<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post" style="word-wrap: break-word;">
                                    <img src="{{url('/uploads/images/blogs/'.$item->image)}}" alt="{{$item->image}}" title=""  width="350"  >
                                    <div class="blog_details">
                                        <h5 ><h2>{{$item->title}}</h2></h5>
                                        <p > {{$item->description}} <br>.</p> <br>
                                        <a href="{{route('blogs.details.page' ,$item->id)}}" class="primary_btn"><span>View More</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                            @endforeach


                        @endisset


                        <nav class="blog-pagination justify-content-center d-flex">

                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


                        <aside class="single-sidebar-widget newsletter_widget">

                            <div class="comment-form">
                                    @guest
                                @else
                                <form action="{{route('user.blog.Store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="widget_title">New Post</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" placeholder="Title OF Blog"  required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="description" placeholder="Description Of Blog" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="formFileLg" class="form-label">Upload a photo</label>
                                        <input type="file"  name="image"  class="form-control  form-control-lg">
                                    </div>
                                    <input type="hidden" name="user_id"  value="{{ Auth::user()->id }}">
                                    <br>

                                    <button class="primary-btn primary_btn"><span>Publish</span></button>
                                </form>
                                @endguest
                            </div>

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="blog-pagination justify-content-center d-flex">
        {{ $items->links() }}
        <div>


@stop
