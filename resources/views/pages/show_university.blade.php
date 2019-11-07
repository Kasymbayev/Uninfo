@extends('main_index')

@section('content')

    <div class="content" style="background: #fff;">

        <div class="container">
            <div class="university_information">
                <div class="row">
                    <div class="col-md-6 uni_info">
                        <h2>{{$universities->title}} <small>({{$universities->abbreviation}})</small></h2>
                        <div class="row">
                            <div class="col-md-12 uni_descr">
                            <span>
                                {{$universities->description}}
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 uni_img">
                        <img src="{{ asset('public/images/university_img/'.$universities->university_img) }}" alt="">
                    </div>
                </div>
                <div class="main_inf">
                    <div class="row">
                            <div class="more_inf">
                                <div class="col-md-7">
                                    <h4><strong>Ректор</strong>: {{$universities->rector}}</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>Аббревиатура</strong>: {{$universities->abbreviation}}</h4>
                                </div>
                            </div>
                            <div class="more_inf">
                                <div class="col-md-7">
                                    <h4><strong>Категория</strong>: {{$universities->university_category}}</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>Код университета</strong>: {{$universities->university_code}}</h4>
                                </div>
                            </div>
                            <div class="more_inf">
                                <div class="col-md-7">
                                    <h4><strong>Адрес</strong>: {{$universities->address}}</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>Военная кафедра</strong>: {{$universities->military_dep}}</h4>
                                </div>
                            </div>
                            <div class="more_inf">
                                <div class="col-md-7">
                                    <h4><strong>Телефон</strong>: {{$universities->phone_number}}</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>Факс</strong>: {{$universities->fax_number}}</h4>
                                </div>
                            </div>
                            <div class="more_inf">
                                <div class="col-md-7">
                                    <h4><strong>E-mail</strong>: {{$universities->email}}</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>Сайт</strong>: <a href="{{$universities->website}}">Нажми меня</a></h4>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="specialities">
                    <div class="learn_specialty">
                        <h4>Специальности университета</h4>
                        <p><span>•</span> {!! $universities->specialty()->pluck('specialty_name')->implode('<br>')!!} - {!! $universities->specialty()->pluck('specialty_cipher')->implode('')!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection