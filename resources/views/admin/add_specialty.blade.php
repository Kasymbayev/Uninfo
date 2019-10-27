@extends('admin_index')
@section('title','Добавить специальность')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Добавить специальность</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('admin_add_specialty')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="uni_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="specialty_name">Название специальности</label>
                                    <input type="text" id="specialty_name" class="form-control" name="specialty_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="specialty_chiper">Шифр специальности</label>
                                    <input type="text" id="specialty_chiper" class="form-control" name="specialty_chiper" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="university">Выберите университет</label>
                                    <select name="university_id" id="university" class="form-control" multiple>
                                        @foreach($universities as $university)
                                            <option value="{{$university->id}}">{{$university->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="specialty_direction">Выберите направление специальности</label>
                                    <br>
                                    <select name="specialty_direction" id="specialty_direction" class="form-control">
                                        @foreach($direction as $direct)
                                            <option value="{{$direct->id}}">{{$direct->direction}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="specialty_qualification">Выберите квалификацию специальности</label>
                                    <select name="specialty_qualification" id="specialty_qualification" class="form-control">
                                        @foreach($qualifications as $qualification)
                                            <option value="{{$qualification->id}}">{{$qualification->qualification}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="subjects">Выберите профильные предметы</label>
                                    <select name="subjects" id="subjects" class="form-control">
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->subject}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить специальность</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop