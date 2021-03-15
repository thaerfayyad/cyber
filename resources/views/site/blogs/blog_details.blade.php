@extends('site.layouts.app')

@section('content')

    <section class="blog_area single-post-area section_gap" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{url('/uploads/images/blogs/'.$item->image)}}"alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">

                                <ul class="blog_meta list">
                                    <li><a href="#">{{$item->title}}<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$item->title}}</h2>
                            <p class="excert">
                                {{$item->description}}
                            </p>

                        </div>

                    </div>
                    <h4 style="text-align: center"><span class="dqwdqwdqwd" >{{ count($comments) }} </span>Comments</h4>

                    <div class="comment-list">

                        @foreach ($comments as  $comment)
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="#" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">{{ App\User::find($comment->user_id)->name }}</a></h5>
                                        <p class="date"> {{ $comment->created_at->format('y/m/d') }}
                                        <p class="comment">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>


                    <div class="comment-form">
                        <input type="hidden" class="post_id" value="{{ $item->id }}">
                        <h4>Leave a Reply</h4>
                        <div>
                            <div class="form-group">
                                <textarea class="form-control mb-10 mycomment " rows="5" name="message" placeholder="Messege .... " required=""></textarea>
                            </div>
                            <button  class="primary-btn primary_btn mycomment_button" ><span>Post Comment</span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(".mycomment_button").click( function(){

            var post = $(".mycomment").val();
            var post_id = $(".post_id").val();


            $.ajax({
                url: "{{ route('add.post.comment') }}",
                type:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    post:post,
                    post_id:post_id,
                },
                success:function(response){
                    console.log(response.success);
                    var comment = `
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="#" alt="">
                            </div>
                            <div class="desc">
                                <h5><a href="#">${response.success.id}</a></h5>
                                <p class="date">${response.success.created_at} </p>
                                <p class="comment">
                                    ${response.success.comment}
                                </p>
                            </div>
                        </div>

                    </div>

                    `;




                    $('.comment-list').append(comment);
                    //swal("تم الحذف بنجاح", "success", "success");
                }
            });
        });
    </script>
@stop
