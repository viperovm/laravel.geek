@extends('layouts.admin')
@section('title')
    @parent Управление категориями
@endsection
@section('content')



        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Управление категориями</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                                <li class="breadcrumb-item active">Управление категориями</li>
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
                            <div class="col-sm-8"><h2>Список категорий</h2></div>
                            <div class="col-sm-4">
                                <a href="{{ route('admin.category-create') }}" type="button" class="btn btn-dark add-new"><i class="fa fa-plus"></i> Добавить категорию</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">

                                <div class="row">
                                    <div class="col">id</div>
                                    <div class="col-7">Название категории</div>
                                    <div class="col-2">Действия</div>
                                </div>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)

                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col">{{ $item->id }}</div>
                                        <div class="col-6">{{ $item->name }}</div>
                                        <div class="col table-buttons">

                                            <a href="{{ route('admin.edit-category', $item->id) }}" class="btn btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form class="button-form" method="POST" action="{{ route('admin.destroy-category', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

@endsection


