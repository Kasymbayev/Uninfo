@extends('admin_index')
@section('title','Университеты')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>База Университетов</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="action-button">
                            <a href="{{route('admin_add_university')}}">Добавить университет</a>
                        </div>
                    </div>
                </div>

                <table class="table table-responsive-md" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Код</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($universities as $university)
                        <tr>
                            <th scope="row">{{$university->id}}</th>
                            <td width="350">
                                {{$university->title}}
                            </td>
                            <td width="50">{{$university->university_category}}</td>
                            <td width="275">{{$university->address}}</td>
                            <td width="100">{{$university->phone_number}}</td>
                            <td>{{$university->university_code}}</td>
                            <td>
                                <div class="uni_action">
                                    <a href="{!! route('university.edit',['id' => $university->id]) !!}" class="action-edit" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ action('UniversityController@delete', $university->id) }}"class="action-delete" title="Удалить"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection