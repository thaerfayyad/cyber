@extends('site.layouts.app')

@section('content')
   <div class="container-fluid">
       @include('admin.include.alerts.success')
       @include('admin.include.alerts.errors')
   </div>
    <Div class="attachment_div">
        <div class="row hero_form">
            <div class=" col-sm-12 col-md-7" style="padding: 15px; background-color: #fff;">
                <div class="front_form">
                    <h2>Add attachment</h2>
                </div >
                <p class="p_destption">
                    This is a form that he can upload attachments to it to be reviewed by the admin and then approved and shared with the public                    </p>
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('attachment.store')}}">
                    @csrf

                    <div class="form-group">
                        <label for="name">
                            *  Attachment title:</label>
                        <input type="text" class="form-control" id="name" name="title"  required >
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="text">
                            * Attachment Type:</label>

                        <div class="dropdown form-control">
                            <select name="book" required>
                                <option disabled value="">Select The Book's Type</option>
                                <option  class="books_link" value="1">Books</option>
                                <option  class="exams_link" value="2">Resources</option>
                                <option  class="resources_link" value="3">Exams</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="name">
                            Description:</label>
                        <textarea class="form-control" type="textarea" name="details"
                                  id="message" placeholder="Write a short description about attachment"
                                  maxlength="6000" rows="7" required></textarea>
                        @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="name">
                           * Attachment Upload:</label>
                        <input type="file" class="form-control" id="bookFile" name="bookFile" required >

                    </div>



                    <button type="submit" class="btn btn-lg  pull-right"
                            id="btnContactUs" style=" color:#fff;
                         background-image: linear-gradient(to right, #8252fa 0%, #eca2f1 100%), radial-gradient(circle at top left, #8252fa, #eca2f1);">Send →</button>

                </form>

            </div>

            <div class=" col-md-5  img_form">
                <img class="img-fluid" src="{{asset('site/img/f-img1.png')}}" alt="">
            </div>
        </div>
    </Div>
@stop
