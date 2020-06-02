@extends('layouts.admin')
@section('title')
    @parent Редактирование категории
@endsection
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.category-management') }}">Управление категориями</a></li>
                            <li class="breadcrumb-item active">Редактирование категории</li>
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

                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.category-store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название категории</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{ $category->name ?? old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Псевдоним категории</label>
                                    <input name="slug" type="text" class="form-control" id="slug" value="{{ $category->slug ?? old('slug') }}">
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


