@extends('admin_index')
@section('title','Документы')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>Документы</h4>
                        </div>
                    </div>
                </div>

                <table class="table" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">ИИН</th>
                        <th scope="col">ВУЗ</th>
                        <th scope="col">Специальность</th>
                        <th scope="col">Номер сертификата</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($documents as $document)
                        <tr>
                            <th scope="row">{{$document->id}}</th>
                            <td>{{$document->username}}</td>
                            <td>{{$document->userlastname}}</td>
                            <td>{{$document->address}}</td>
                            <td>{{$document->phone}}</td>
                            <td>{{$document->iin}}</td>
                            <td>{{$document->university}}</td>
                            <td>{{$document->specialty}}</td>
                            <td>{{$document->serial_certificate}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@stop