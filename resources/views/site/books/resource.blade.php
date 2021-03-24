@extends('site.layouts.app')
@section('title', 'Resources')
@section('content')

    <section class="library_section">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <Div class="left_list">
                        <div class="Title_library">
                            <h4 class="Library_Name">Library</h4>
                        </div>
                        <a href="{{route('exercises.book.home')}}"><div class="Exam_tab">
                                <i class="fa fa-file icon1" aria-hidden="true"></i>
                                <p class="title_tab examtab">Exercises</p>
                            </div>
                        </a>
                        <a href="{{route('book.home')}}">
                            <div class="books_tab">
                                <i class="fa fa-book icon1" aria-hidden="true"></i>
                                <p class="title_tab resource_tab">Books</p>
                            </div>
                        </a>
                        <a href="{{route('resources.book.home')}}">
                            <div class="resource_tab">
                                <i class="fa fa-folder-open icon1" aria-hidden="true"></i>
                                <p class="title_tab resource_tab">Resources</p>
                            </div>
                        </a>
                    </Div>
                </div>

                <div class="col-sm-12 col-md-8">
                    <Div class="table_exam">
                        <div class="Exams_title">
                            <h4 class="Ex_Name">Resources</h4>
                        </div>

                        @isset($resources)


                            @foreach($resources as $book)
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
                                        <a href="{{route('book.download',$book->id)}}" class="fa fa-download download" aria-hidden="true"></a>

                                    </Div>

                                </div>
                            @endforeach

                        @endisset


                    </Div>

                </div>

            </div>
        </div>
    </section>

@stop


