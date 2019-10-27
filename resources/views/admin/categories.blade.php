@extends('admin_index')
@section('title','Админ | Категории')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Категории</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="action-button">
                            <a href="{{route('admin_add_category')}}">Добавить категорию</a>
                        </div>
                    </div>
                </div>

                <table class="table" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Категория</th>
                        <th scope="col" class="text-right">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category -> id}}</th>
                        <td>
                            {{$category -> category_name}}
                        </td>
                        <td class="text-right">
                            <div class="uni_action">
                                <a href="#" class="action-edit" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="action-delete" title="Удалить"><i class="fas fa-trash-alt"></i></a>
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