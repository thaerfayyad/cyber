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
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" >
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href="{{route('index')}}"  style=" font-size: 20px;text-transform: capitalize">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false"  style=" font-size: 20px;text-transform: capitalize">Discover & learn</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('resources.home')}}" style=" font-size: 15px;text-transform: capitalize">Resources</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('student.index')}}"  style="font-size: 15px; text-transform: capitalize">Student library</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('general.index')}}"  style="font-size: 15px; text-transform: capitalize">General library</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('layers.page')}}"  style="font-size: 15px; text-transform: capitalize">Network Layer</a></li>

                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link"  href="{{route('blogs.home.page')}}"  style=" font-size: 20px;text-transform: capitalize">Blog</a></li>
                        <li class="nav-item"><a class="nav-link"  href="{{route('about')}}"  style="font-size: 20px; text-transform: capitalize">About As</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('createContact')}}" style="font-size: 20px; text-transform: capitalize">Contact</a></li>
                    </ul>
                    @guest
                    <a  class="primary_btn "  href="{{route('signup')}}" style="font-size: 20px;text-transform: capitalize ;width: 100px;height: 50px " >Sign Up</a>
                    <div class="dropdown user_name_div">
                    @endguest
                        @guest
                          @else
                            <div class="dropdown user_name_div">
                                <a class="btn  btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="Profile.html">Account</a>
                                    <a class="dropdown-item" href="{{route('getout')}}">Logout </a>
                                </div>
                            </div>

                        @endguest



                    </div>
                    @guest
                    @else
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{route('attachment.create')}}" class="primary_btn " style=" text-transform: capitalize" > Add attachment</a></li>
                    </ul>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
