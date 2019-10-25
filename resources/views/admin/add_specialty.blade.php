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
                    <form action="/" method="post">

                        <div class="uni_form">
                            <label for="specialty_name">Название специальности</label>
                            <br>
                            <input type="text" id="specialty_name" class="form-control" name="specialty_name" required>
                            <br>
                            <label for="specialty_chiper">Шифр специальности</label>
                            <br>
                            <input type="text" id="specialty_chiper" class="form-control" name="specialty_chiper" required>
                            <br>
                            <label for="category_of_university">Выберите университет</label>
                            <br>
                            <select name="category_of_university" id="category_of_university" class="form-control" multiple>
                                <option value="">Международный университет информационных технологий</option>
                                <option value="">Казахский национальный университет имени Аль-Фараби</option>
                            </select>

                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить специальность</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop