@extends('layout.admin.app')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title">title <a href="{{route('books.create')}}" class="btn btn-info waves-effect waves-light">create <i class="fas fa-plus-square"></i></a></h2>
                        <div class="table-responsive">

                            <table id="file_export" class="table table-striped table-bordered display">
                                @include('admin.include.alerts.success')
                                @include('admin.include.alerts.errors')

                                <thead >
                                <tr>

                                 <th>Id</th>
                                 <th>Operations</th>
                                 <th>Status</th>
                                 <th>Title</th>
                                 <th>Author</th>
                                 <th>Year</th>
                                 <th>Book</th>
                                 <th>Semester</th>
                                 <th>Library</th>
                                 <th>details</th>
                                 <th>date</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($items as $key => $val)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>
                                            <a href="{{'/admin/books/'.$val->id.'/edit'}}" class="btn btn-info waves-effect waves-light"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('books.destroy',$val->id) }}" method="post" class="form-check-inline" >
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger waves-effect waves-light" type="submit" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                                <input type="hidden" id="txt-{{$val->id}}"  value="{{ $val->status }}">
                                                <button id="btn-{{$val->id}}" class="btn btn-sm {{$val->status==1 ?'btn-success':'btn-danger'}}"  onclick="activeUser({{$val->id}})">{{$val->status==0?'reject' :'accept'}}</button>


{{--                                                <button disabled="disabled" class="btn btn-sm {{$val->status==0 ?'btn-danger':'btn-success'}}" style="color: #000">{{$val->status==1?'accept':'reject'}}</button>--}}

                                        </td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->author}}</td>
                                       <td>{{@$val->year}}</td>
                                       <td>{{@$val->getBook()}}</td>
                                       <td>{{@$val->getSemester()}}</td>
                                       <td>{{@$val->getLibrary()}}</td>
                                        <td>{{$val->details}}</td>
                                        <td>{{$val->created_at}}</td>


                                    </tr>
                                @endforeach
                                <script src="">
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                </script>



                                </tbody>
                                <script>
                                    $(document).ready(function() {
                                    })
                                    function activeUser(id) {
                                        var url='/changeStatus';

                                        // alert(url);
                                        var status =$('#txt-'+id).val();
                                        var activate=0;
                                        if(status==0){
                                            activate=1;
                                        }if(status==1){
                                            activate=0;

                                        }
                                        var UserID = id;
                                        // alert(activate);
                                        $.ajax({
                                            type: "GET",
                                            dataType: "json",
                                            url: url,
                                            data: {status: activate, id: id},

                                            success: function(data){
                                                // alert(data);
                                                // alert("Success !");
                                                location.reload();

                                                if(data.user.status==0)  {
                                                    $('#btn-'+id).removeClass('btn-danger').addClass( "btn-success" );

                                                }else{
                                                    $('#btn-'+id).removeClass('btn-success').addClass( "btn-danger" );

                                                }

                                            }
                                        });

                                    }
                                </script>


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
