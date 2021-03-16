@extends('site.layouts.app')

@section('content')
    <br><br><br><br><br> <br>

    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @isset($items)

                            <h3 style="text-align: center"> No Items Available</h3>

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
                                <div class="blog_post">
                                    <img src="{{url('/uploads/images/blogs/'.$item->image)}}" alt="{{$item->image}}" title=""  width="500"  >
                                    <div class="blog_details">
                                        <a href="single-blog.html"><h2>{{$item->title}}</h2></a>
                                        <p> {{$item->description}}.</p>
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
                                <form>
                                    <h4 class="widget_title">New Post</h4>
                                    <div class="form-group">

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="formFileLg" class="form-label">Upload a photo</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" />
                                    </div>
                                    <br>

                                    <a href="#" class="primary-btn primary_btn"><span>Publish</span></a>
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
