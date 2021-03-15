<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('index')}}" ><img src="{{asset('site/img/logo2.png')}}" alt="" style="height:35px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href="{{route('index')}}"  style=" text-transform: capitalize">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false"  style=" text-transform: capitalize">Discover & learn</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('resources.home')}}" style=" text-transform: capitalize">Resources</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('student.index')}}"  style=" text-transform: capitalize">Student library</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('general.index')}}"  style=" text-transform: capitalize">General library</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('layers.page')}}"  style=" text-transform: capitalize">Network Layer</a></li>

                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link"  href="{{route('blogs.home.page')}}"  style=" text-transform: capitalize">Blog</a></li>
                        <li class="nav-item"><a class="nav-link"  href="{{route('about')}}"  style=" text-transform: capitalize">About As</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact" style=" text-transform: capitalize">Contact</a></li>


                    </ul>

                    <a  class="btn  btn-primary "  href="{{route('signup')}}">Sign Up</a>
                    <div class="dropdown user_name_div">

                        @guest
                        <a class="btn  btn-circle dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            user name

                          </a>
                          @else
                          {{ Auth::user()->name }}
                        @endguest


                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Profile.html"  style=" text-transform: capitalize">Account</a>
                            <a class="dropdown-item" href="login.html"  style=" text-transform: capitalize">Logout </a>
                        </div>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{route('attachment.create')}}" class="primary_btn " style=" text-transform: capitalize" > Add attachment</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
