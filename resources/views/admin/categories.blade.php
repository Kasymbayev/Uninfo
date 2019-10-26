@extends('admin_index')
@section('title','Админ | Категории')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>Категории</h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="action-button">
                            <a href="{{route('admin_add_category')}}">Добавить категорию</a>
                        </div>
                    </div>
                </div>

                <table class="table bg-primary" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category -> id}}</th>
                        <td>
                            {{$category -> category_name}}
                        </td>
                        <td>
                            <div class="uni_action">
                                <a href="#">Редактировать</a>  |  <a href="#">Удалить</a>
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