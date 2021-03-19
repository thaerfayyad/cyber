@extends('layout.admin.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-success text-lg-center">Edit The Book</h4>

                    </div>
                    <hr>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <hr>
                    @include('admin.include.alerts.success')
                    @include('admin.include.alerts.errors')

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('books.update',$book->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" name="name" value="{{$book->name}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" name="author" value="{{$book->author}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Details</label>
                                        <div class="col-sm-9">
                                            <textarea name="details" id="" cols="40" rows="5">{{$book->details}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">yearFrom</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="file" name="year" value="{{$book->year}}"  placeholder="XXXX" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Select</label>
                                    <div class="col-sm-9">
                                        <select id="semester" name="book">
                                            <option disabled >Select The library of book</option>
                                            <option value="1" @if($book->book == 1) selected @endif>Book</option>
                                            <option value="2" @if($book->book == 2) selected @endif>Resources</option>
                                            <option value="3" @if($book->book == 3) selected @endif>Exercises</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Select</label>
                                    <div class="col-sm-9">
                                        <select id="semester" name="semester">
                                            <option disabled>Select The Semester</option>
                                            <option value="1" @if($book->semester == 1) selected @endif>Semester '1'</option>
                                            <option value="2" @if($book->semester == 2) selected @endif>Semester '2'</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Select</label>
                                    <div class="col-sm-9">
                                        <select id="semester" name="library">
                                            <optiond disabled >Select The Library</optiond>
                                            <option value="1" @if($book->library == 1) selected @endif>General</option>
                                            <option value="2" @if($book->library == 2) selected @endif>Student</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Book File</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="bookFile" name="bookFile" >
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <div class="card-body">
                            <div class="form-group m-b-0 text-center">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>

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
