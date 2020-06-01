@extends('layouts.admin')
@section('title')
    @parent Управление пользователями
@endsection
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <h2>
                    Страница управления пользователями
                </h2>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="newsTitle">Имя пользователя</label>
                                    <input name="title" type="text" class="form-control" id="newsTitle"
                                           value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-primary" value="Добавить пользователя"
                                           id="addNews">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
