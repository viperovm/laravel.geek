@extends('layouts.admin')
@section('title')
    @parent Управление материалами
@endsection
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <h2>
                    Страница управления материалами
                </h2>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="newsTitle">Название новости</label>
                                    <input name="title" type="text" class="form-control" id="newsTitle"
                                           value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="newsCategory">Категория</label>
                                    <select name="category" class="form-control" id="newsCategory">
                                        @foreach($categories as $item)
                                            value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="newsText">Краткое описание новости</label>
                                    <textarea name="text" class="form-control" rows="5"
                                              id="newsExcerpt">{{ old('text') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="newsText">Текст новости</label>
                                    <textarea name="text" class="form-control" rows="5"
                                              id="newsText">{{ old('text') }}</textarea>
                                </div>
                                <div class="form-check">
                                    <input @if (old('isPrivate') == 1) checked @endif name="isPrivate"
                                           class="form-check-input" type="checkbox" value="1"
                                           id="newsPrivate">
                                    <label class="form-check-label" for="newsPrivate">
                                        Новость private?
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-primary" value="Добавить новость"
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

