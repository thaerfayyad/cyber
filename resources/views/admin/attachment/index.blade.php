@extends('layouts.admin.app')

@section('content')




    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ __('admin/request.user.title') }}</h2>

                        <div class="table-responsive">


                            <table id="file_export" class="table table-striped table-bordered display">

                                <thead >

                                <tr>

                                    <th>{{@__('admin/request.user.id')}}</th>

                                    <th>{{@__('admin/request.user.name')}}</th>
                                    <th>{{@__('admin/request.user.role')}}</th>
                                    <th>{{@__('admin/request.user.status')}}</th>


                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($users as $key => $val)
                                    @if( @$val->UserInfo->role->name != 'admin')
                                        <tr>

                                            <td>{{$key+=1}}</td>

                                            <td>{{$val->name}}</td>
                                            <td>
                                                @if(LaravelLocalization::setLocale()=='ar')
                                                    {{@$val->UserInfo->role->label}}
                                                @else

                                                    {{  @$val->UserInfo->role->name}}

                                                @endif
                                            </td>


                                            <td>


                                                    <input type="hidden" id="txt-{{$val->UserID}}"  value="{{ $val->active }}">
                                                    <button id="btn-{{$val->UserID}}" class="btn btn-sm {{$val->active==0 ?'btn-danger':'btn-success'}}"  onclick="activeUser({{$val->UserID}})">{{$val->active==1?'accept':'reject'}}</button>


                                                    <button disabled="disabled" class="btn btn-sm {{$val->active==0 ?'btn-danger':'btn-success'}}" style="color: #000">{{$val->active==1?'accept':'reject'}}</button>
                                            </td>



                                        </tr>
                                    @endif

                                @endforeach
                                <script src="">
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                </script>




                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('style')
    <link href="{{asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush
@push('script')

    <script>
        $(document).ready(function() {
            // alert("hhhhhhhh");
            // $().change(function() {
            //     var active = $(this).prop('checked') == true ? 1 : 0;
            //     var UserID = $(this).data('id');
            //      alert(active);
            //     $.ajax({
            //         type: "GET",
            //         dataType: "json",
            //         url: '/changeStatus',
            //         data: {'active': active, 'UserID': UserID},
            //         success: function(data){
            //             console.log(data.success)
            //         }
            //     });
            // })
        })
        function activeUser(id) {
            var url='{{URL::to(LaravelLocalization::setLocale().'/admin/changeStatus')}}';

            // alert(url);
            var active =$('#txt-'+id).val();
            var activate=0;
            if(active==0){
                activate=1;
            }if(active==1){
                activate=0;

            }
            var UserID = id;
            // alert(activate);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: url,
                data: {active: activate, id: UserID},

                success: function(data){
                    // alert(data);
                    // alert("Success !");
                    location.reload();

                    if(data.user.active==0)  {
                        $('#btn-'+id).removeClass('btn-danger').addClass( "btn-success" );

                    }else{
                        $('#btn-'+id).removeClass('btn-success').addClass( "btn-danger" );

                    }

                }
            });

        }
    </script>




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




    {{--        });--}}
    {{--    </script>--}}
@endpush
