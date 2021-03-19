@extends('site.layouts.app')

@section('content')
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
@endsection
