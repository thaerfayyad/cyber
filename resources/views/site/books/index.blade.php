@extends('site.layouts.app')

@section('content')
    <div class="col-sm-12 col-md-10">
        <Div class="table_exam">
            <div class="Exams_title">
                <h4 class="Ex_Name">Books</h4>
            </div>

            <!--================= booksTab=================-->
            @isset($books)
                @foreach($books as $book)
                    <div class="exam_tab">
                        <div class="div_examNUM">
                            <i class="fa fa-book exam_icon" aria-hidden="true"></i>

                        </div>
                        <div class="info_exam">
                            <div class="title_info">
                                <p class="title_exam">Book Title :</p> <p class="name_exams">{{$book->name}}</p>
                            </div>
                            <div class="title_info">
                                <p class="title_exam">Book Author :</p> <p class="name_exams">{{$book->author}}</p>
                            </div>

                            <div class="between">
                                <div class="Date_exam">
                                    <p class="title_exam">academic year :</p> <p class="name_exams">{{$book->year}} </p>
                                </div>
                                <p style="padding-left: 15px; padding-right: 15px;">|</p>
                                <div class="Date_version">
                                    <p class="title_exam">Semester:</p> <p class="name_exams">{{$book->getSemester()}}</p>
                                </div>
                            </div>
                        </div>

                        <Div class="icons_exam">
                            <i class="fa fa-download download" aria-hidden="true"></i>
                        </Div>

                    </div>
                @endforeach
            @endisset


            </div>
            <!--================= Exam Tab=================-->
        </Div>

    </div>

@stop
