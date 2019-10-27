@extends('admin_index')
@section('title','Добавить квалификациию')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Добавить квалификацию</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('admin_add_qualification')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="uni_form">
                            <label for="qualification_name">Название квалификации</label>
                            <br>
                            <input type="text" id="qualification_name" class="form-control" name="qualification_name" required>

                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить квалификацию</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop