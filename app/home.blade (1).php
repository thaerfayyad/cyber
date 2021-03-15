@extends('layout.admin.app')
@section('content')
    <div class="container-fluid">
        <!--  jquery links-->
        <link rel="stylesheet" type="text/css" href="jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script type="text/javascript" src="jquerymobile/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="jquerymobile/jquery.mobile-1.0a1.min.js"></script>

        <!-- links cdn for sweetalert-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


          <!--  Data Tables links-->
        <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <div  class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="text-align: center"> Statistic <i class="fas fa-plus-square"></i></h2>
                            <div class="row">
                                <div class="col-8">
                                    <table class="table" id="example">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">X</th>
                                            <th scope="col">Y</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="aaaa">
                                            @foreach ($charts as $index=>$chart)
                                                <tr>
                                                    <th scope="row">{{ $index+1 }}</th>
                                                    <td>{{ $chart->x }}</td>
                                                    <td>{{ $chart->y }}</td>
                                                    <td>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4" >
                                    <div style="padding: 2% 2% 2% 2%">
                                        <div class="form-group">
                                          <label for="x-axis"> X Axis</label>
                                          <input type="text" class="form-control" id="x-axis"  placeholder="enter-x-axis">
                                        </div>
                                        <div class="form-group">
                                          <label for="y-axis">Y Axis</label>
                                          <input type="text" class="form-control" id="y-axis" placeholder="enter-y-axis">
                                        </div>
                                        <button  class="btn btn-primary" id="myInsert">Insert</button>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
    //javascript for Data Tables
    $(document).ready(function() {
        $('#example').DataTable();
    });

    //ajax for insert data
    $("#myInsert").click( function(){
        var x = $("#x-axis").val();
        var y = $("#y-axis").val();

        if(x == '' &&  y != '' ){
            swal("Warning!", "Please insert value of x", "warning");
        }
        if(y == '' && x != '' ){
            swal("Warning!", "Please insert value of y", "warning");
        }

        if(y == '' && x == '' ){
            swal("Warning!", "Please insert value of y and x", "warning");
        }

        if( x != '' && y != ''){

            $.ajax({
                url: "{{ route('statistic.store.new.value') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    x:x,
                    y:y,
                },
                success:function(response){
                    swal("success!", "success", "success");
                    var tr =
                                `  <tr>
                                        <th scope="row">${response.index}</th>
                                        <td>${response.success.x}</td>
                                        <td>${response.success.y}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" id="${response.success.id}">Delete</button>
                                        </td>
                                    </tr>
                                `;
                    $(".aaaa").append(tr);
                                     // console.log(response.success.x);

                },
            });
                    // swal("success!", "success", "success");
                }


            });

</script>
@stop
 @push('style')
 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
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
