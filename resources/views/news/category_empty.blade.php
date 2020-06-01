@extends('layouts.app')

@section('title')
    @parent {{ $content['category_name'] }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center mb-5">
                    <h1 class="text-center mt-5">
                        {{ $content['category_name'] }}
                    </h1>
                    <h5 class="text-secondary fs-15">
                        В этой категории пока нет новостей
                    </h5>
                </div>

            </div>
        </div>
    </div>
@endsection
