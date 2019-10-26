@extends('admin_index')
@section('title','Университеты')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>База Университетов</h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="action-button">
                            <a href="{{route('admin_add_university')}}">Добавить университет</a>
                        </div>
                    </div>
                </div>

                <table class="table bg-primary" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Код</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($universities as $university)
                        <tr>
                            <th scope="row">{{$university->id}}</th>
                            <td>
                                {{$university->title}}
                            </td>
                            <td>
                                {{$university->description}}
                            </td>
                            <td>{{$university->university_category}}</td>
                            <td>{{$university->university_code}}</td>
                            <td>
                                <div class="uni_action">
                                    <a href="#">Редактировать</a>
                                    <a href="#">Удалить</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@stop