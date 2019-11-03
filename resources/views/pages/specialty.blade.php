@extends('main_index');

@section('content')

    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-left: 15px;">
                    <h3>Специальности на UNINFO</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="filter">
                        <ul>
                            <li>
                                <a href="#">Бакалавриат</a>
                                <a href="#">Магистратура</a>
                                <a href="#">Докторантура PhD</a>
                                <a href="#">Резидентура</a>
                                <a href="#">По профильным предметам</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @foreach($specialities as $speciality)
                    <div class="specialty_blocks">
                        <div class="specialty_inf">
                            <h3>{{$speciality->specialty_name}} - {{$speciality->specialty_cipher}}</h3>
                            <p>Направление: <span>{{$speciality->direction->direction}}</span></p>
                            <p>Ученая степень: <span>{{$speciality->qualification->qualification}}</span></p>
                            <p>Профильные предметы: <span>{{$speciality->subject->subject}}</span></p>
                        </div>
                        <span class="watermark">UniSpecialty</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@stop