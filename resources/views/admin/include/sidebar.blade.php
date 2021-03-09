
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{asset('admin/assets/images/users/22.jpg')}}" alt="users" class="rounded-circle img-fluid" />
                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">  {{ Auth::user()->name }}</h5>
                            <a href="{{route('admin.logout')}}" title="Logout" class="btn btn-circle btn-sm">
                                <i class="ti-power-off"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End User Profile-->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Users  </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('users.index')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">book </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('books.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('books.index')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">resources</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('resources.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('resources.index')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Post</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('posts.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Comments</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index2.html" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">layer </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="index.html" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index2.html" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Contact-us </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('contact')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> index</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
@yield('script')
