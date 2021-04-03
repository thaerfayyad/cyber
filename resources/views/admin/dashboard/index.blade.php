@extends('layout.admin.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card-group">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <h1> News <i>  {{  '"'.$news .'"' }}</i></h1>
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-wallet text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <h2> Library <i>  {{'"' . $book .'"' }}</i></h2>
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="ti-post text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <h1> Blog <i>  {{ '"' . $blog . '"' }}</i></h1>

                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="ti-user text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <h1> Users <i>{{ '"' . $users . '"' }}</i></h1>

                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Column -->


        </div>
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{ asset('admin/assets/images/image.png') }}" alt="user" style="width: 1300px; height:auto;">
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Top Selliing Products -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Top Selliing Products -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- =================================================== -->
    </div>

@endsection
@push('style')

@endpush
@push('script')

@endpush
