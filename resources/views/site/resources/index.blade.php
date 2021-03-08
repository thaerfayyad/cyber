

@extends('site.layouts.app')
@section('title', 'Resources')

@section('content')


<div class="col-sm-12 col-md-8">
    <Div class="table_exam">
        <div class="Exams_title">
            <h4 class="Ex_Name">Resources</h4>
        </div>
        @foreach($items as $item)
            <div class="exam_tab">

                <div class="div_examNUM">
                    <i class="fa fa-globe exam_icon" aria-hidden="true"></i>

                </div>
                <div class="info_exam">
                    <div class="title_info">
                        <p class="title_exam">Resourse Title :</p> <p class="name_exams">{{$item->title}}</p>
                    </div>

                    <div class="between">
                        <div class="Date_exam">
                            <p class="title_exam">Resource Field :</p> <p class="name_exams">{{$item->filed}}</p>
                        </div>
                        <p style="padding-left: 15px; padding-right: 15px;">|</p>
                        <div class="Date_version">
                            <p class="title_exam">Date added:</p> <p class="name_exams">{{$item->created_at}}</p>
                        </div>

                    </div>
                </div>

                <Div class="icons_exam">
                    <i class="" aria-hidden="true">
                        <a href="https://{{$item->link}}"  target="_blank">
                            <img src="{{asset('/uploads/images/icons/'.$item->icon)}}" alt="" title=""   class="" width="75" height="auto">
                        </a>
                    </i>
                </Div>

            </div>
    @endforeach
        <!--================= Exam Tab=================-->

    </Div>

</div>


@stop
