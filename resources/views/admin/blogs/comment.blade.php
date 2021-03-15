@extends('layout.admin.app')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title">All Of The Comments </h2>
                        <div class="table-responsive">

                            <table id="file_export" class="table table-striped table-bordered display">
                                @include('admin.include.alerts.success')
                                @include('admin.include.alerts.errors')

                                <thead >
                                <tr>

                                 <th>id</th>
                                 <th>operations</th>
                                 <th>user Name</th>
                                 <th>comment</th>
                                 <th>date</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($items as $key => $val)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>
                                            <form action="{{ route('comments.destroy',$val->id) }}" method="post" class="form-check-inline" >
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger waves-effect waves-light" type="submit" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                        </td>

                                        <td>{{@$val->user->name}}</td>

                                        <td>{{@$val->comment}} </td>
                                        <td>{{@$val->created_at}}</td>


                                    </tr>
                                @endforeach

                                </tbody>

@stop
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
@endpush
