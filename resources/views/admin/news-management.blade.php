@extends('layouts.admin')
@section('title')
    @parent Управление статьями
@endsection
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Управление статьями</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Управление статьями</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Список статей</h2></div>
                        <div class="col-sm-4">
                            <a href="{{ route('admin.news-create') }}" type="button" class="btn btn-dark add-new"><i class="fa fa-plus"></i> Добавить статью</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">

                            <div class="row">
                                <div class="col">id</div>
                                <div class="col-7">Название статьи</div>
                                <div class="col-2">Действия</div>
                            </div>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $item)

                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col">{{ $item->id }}</div>
                                    <div class="col-6">{{ $item->name }}</div>
                                    <div class="col table-buttons">
                                        <a href="{{ route('admin.news-edit', $item) }}" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.news-destroy', $item->id) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </div>
                                </div>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {{ $news->links() }}

            </div>
        </div>
    </div>

@endsection


