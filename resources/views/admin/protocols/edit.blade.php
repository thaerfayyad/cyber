@extends('layout.admin.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-success text-lg-center">Add The Layers</h4>

                    </div>


                    <hr>
                    @include('admin.include.alerts.success')
                    @include('admin.include.alerts.errors')

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('layers.update',$layer->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Select:</label>
                                        <div class="col-sm-8">
                                            <select  name="layer">
                                                <option >Select The Layer</option>
                                                <option value="1" @if($layer->layer == 1) selected @endif>Application Layer</option>
                                                <option value="2" @if($layer->layer == 2) selected @endif>Presentation Layer</option>
                                                <option value="3" @if($layer->layer == 3) selected @endif>Session Layer</option>
                                                <option value="4" @if($layer->layer == 4) selected @endif>Transport Layer</option>
                                                <option value="5" @if($layer->layer == 5) selected @endif>Network Layer</option>
                                                <option value="6" @if($layer->layer == 6) selected @endif>Data Link Layer</option>
                                                <option value="7" @if($layer->layer == 7) selected @endif>Physical Layer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title text-center text-primary">add the threats threats</h4>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title_threatse" name="title_threats" placeholder="title of threats"  value="{{$layer->title_threats}}" >

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">threat</label>
                                        <div class="col-sm-9">
                                            <textarea name="descriptions_threats" id="" cols="50" rows="5" placeholder="descriptions the threats">{{$layer->descriptions_threats}}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 text-right control-label col-form-label">image of threat</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="img_threats" placeholder="image of threats" ><br>
                                            <img src="{{url('/uploads/images/layers'.'/'.$layer->img_threats)}}" alt="" title="" width="85" style="float: right ; margin-right:initial">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title text-center text-primary">add the  protocol</h4>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title_protocol" class="form-control" placeholder="title of protocol" value="{{$layer->title_protocol}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Details</label>
                                        <div class="col-sm-9">
                                            <textarea name="descriptions_protocol" id="" cols="50" rows="5" placeholder="descriptions the protocol">{{$layer->descriptions_protocol}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="form-group m-b-0 text-center">
                                <button type="submit" class="btn btn-info waves-effect waves-light">update</button>

                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>

    </div>


@endsection
@push('style')
    <link href="{{asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush
@push('script')
    <script src="{{asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{asset('admin/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
    <script type="text/javascript">

@endpush
