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
                                    <select name="university" id="university" class="form-control" multiple>
                                        <option value="">Международный университет информационных технологий</option>
                                        <option value="">Казахский национальный университет имени Аль-Фараби</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="specialty_nap">Выберите направление специальности</label>
                                    <br>
                                    <select name="specialty_nap" id="specialty_nap" class="form-control">
                                        <option value="">Технические науки и технологии</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="specialty_qualification">Выберите квалификацию специальности</label>
                                    <select name="specialty_qualification" id="specialty_qualification" class="form-control">
                                        <option value="">Бакалавр</option>
                                        <option value="">Магистратура</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="subjects">Выберите профильные предметы</label>
                                    <select name="subjects" id="subjects" class="form-control">
                                        <option value="">Математика и Физика</option>
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