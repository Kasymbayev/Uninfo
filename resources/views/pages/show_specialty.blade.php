@extends('main_index')

@section('content')

    <div class="content" style="background: #fff;">

        <div class="container">
            <div class="specialty_blocks_show">
                <div class="specialty_inf_show">
                    <h3>{{$specialities->specialty_name}} - {{$specialities->specialty_cipher}}</h3>
                    <p>Направление: <span>{{$specialities->direction->direction}}</span></p>
                    <p>Ученая степень: <span>{{$specialities->qualification->qualification}}</span></p>
                    <p>Профильные предметы: <span>{{$specialities->subject->subject}}</span></p>
                    <div class="learn_specialty">
                        <small><h4>Университеты обучающие эту специальность:<br></h4></small>
                            <span>
                            {!!
                                $specialities
                                ->university()
                                ->pluck('title')
                                ->implode('<br>')
                            !!}
                        </span>
                    </div>
                </div>
                <span class="watermark">UniSpecialty</span>
            </div>
        </div>
    </div>

@endsection