@extends('layouts.app')

@section('title')
    @parent {{ $content['category_name'] }} | {{ $content['news']->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="news-post-wrapper">
                    <div class="news-post-wrapper-sm ">
                        <h1 class="text-center">
                            {{ $content['news']->title }}
                        </h1>
                        <div class="text-center">
                            <a href="{{ route('news.category', $content['slug']) }}" class="btn btn-dark font-weight-bold mb-4">{{ $content['category_name'] }}</a>
                        </div>
                        <p
                            class="fs-15 d-flex justify-content-center align-items-center m-0"
                        >
                            @if($content['news']->created_at != null)
                            {{ $content['news']->created_at }}
                                @else
                                23 Февраля, 2018 г.
                            @endif
                        </p>
                        <p class="pt-4 pb-4">
                            {{ $content['news']->excerpt }}
                        </p>
                        <img
                            src="{{ $content['news']->thumb_169_big }}"
                            alt="news"
                            class="img-fluid mb-4  justify-content-center align-items-center"
                        />
                        <div class="news-post-wrapper-sm ">
                            <p class="pt-4 pb-4 mb-4">
                                {{ $content['news']->text }}
                            </p>
                        </div>
                        <div class="bg-dark border-radius-6 px-4 py-3 mt-4">
                            <p class="text-white font-weight-medium">
                                {{ $content['news']->excerpt }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
