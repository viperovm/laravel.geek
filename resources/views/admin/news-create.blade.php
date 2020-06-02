@extends('layouts.admin')
@section('title')
    @parent Создание статьи
@endsection
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Добавление статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.news-management') }}">Управление статьями</a></li>
                            <li class="breadcrumb-item active">Добавление статьи</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">

                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.news-store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Псевдоним статьи</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Название статьи</label>
                                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Отрывок статьи</label>
                                    <textarea name="excerpt" rows="3" class="form-control" id="excerpt">{{ old('excerpt') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text">Текст статьи</label>
                                    <textarea name="text" rows="5" class="form-control" id="text">{{ old('text') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Изображение статьи</label>
                                    <input type="file" name="img">
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Категория статьи</label>
                                    <select name="category_id" class="form-control" id="category_id">



                                        @forelse($category as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @empty
                                            <h2>Нет категории</h2>
                                        @endforelse

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="author_id">Автор статьи</label>
                                    <select name="author_id" class="form-control" id="author_id">
                                        @forelse($author as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @empty
                                            <h2>Нет автора</h2>
                                        @endforelse

                                    </select>

                                </div>
                                <div class="form-check">
                                    <input name="is_local" class="form-check-input" type="checkbox" value="1"
                                           id="is_local">
                                    <label class="form-check-label" for="is_local">
                                        Статья локальная?
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="is_hidden" class="form-check-input" type="checkbox" value="1"
                                           id="is_hidden">
                                    <label class="form-check-label" for="is_hidden">
                                        Статья скрытая?
                                    </label>
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="form-control">
                                        Сохранить
                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


