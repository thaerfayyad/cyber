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
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                                        <i class="ti-shopping-cart text-white"></i>
                                    </span>
                        </div>
                        <div>
                        Products

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
                                        <i class="mdi mdi-currency-usd text-white"></i>
                                    </span>
                        </div>
                        <div>
                            Vendors

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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Top Selling Products</h4>
                                <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                            </div>
                            <div class="ml-auto">
                                <div class="dl">
                                    <select class="custom-select">
                                        <option value="0" selected="">Monthly</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">License</th>
                                <th class="border-top-0">Support Agent</th>
                                <th class="border-top-0">Technology</th>
                                <th class="border-top-0">Tickets</th>
                                <th class="border-top-0">Sales</th>
                                <th class="border-top-0">Earnings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-danger">Angular</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-info text-white">MA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Monster Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>Venessa Fern</td>
                                <td>
                                    <label class="label label-info">Vue Js</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-success text-white">MP</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-success">Bootstrap</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-purple text-white">AA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Ample Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-purple">React</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                    </div>

                </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Chats</h4>
                        <div class="chat-box scrollable position-relative" style="height:475px;">
                            <!--chat Row -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>

@endsection
@push('style')

@endpush
@push('script')

@endpush
