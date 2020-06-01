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
                    <p class="text-secondary fs-15">
                        This text can be added in the category Description field in
                        dashboard
                    </p>
                </div>

            </div>
        </div>

        <div class="editors-news">

            <div class="row">

                <div class="col-lg-6  mb-5 mb-sm-2">

                        <div class="position-relative image-hover">
                            <img
                                src="{{ $content['news'][0]->thumb_43 }}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{ $content['news'][0]->name }}</span>
                        </div>
                        <a class="color-black" href="{{ route('news.one', [$content['news'][0]->slug, $content['news'][0]->id]) }}">
                            <h1 class="font-weight-600 mt-3">
                                {{ $content['news'][0]->title }}
                            </h1>
                            <p class="fs-15 font-weight-normal">
                                {{ $content['news'][0]->excerpt }}
                            </p>
                        </a>

                </div>


                <div class="col-lg-6  mb-5 mb-sm-2">
                    <div class="row">

                        @for($i=0;$i<4;$i++)

                            <div class="col-sm-6  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img
                                        src="{{ $content['news'][$i]->thumb_169 }}"
                                        class="img-fluid"
                                        alt="world-news"
                                    />
                                    <span class="thumb-title">{{ $content['news'][$i]->name }}</span>
                                </div>
                                <a class="color-black" href="{{ route('news.one', [$content['news'][$i]->slug, $content['news'][$i]->id]) }}">
                                    <h5 class="font-weight-600 mt-3">
                                        {{ $content['news'][$i]->title }}
                                    </h5>
                                    <p class="fs-15 font-weight-normal">
                                        {{ $content['news'][$i]->excerpt }}
                                    </p>
                                </a>
                            </div>

                        @endfor

                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-sm-12">
                <h5 class="text-muted font-weight-medium mb-3">Еще новости из раздела {{ $content['category_name'] }}</h5>
            </div>
        </div>
        <div class="row mb-4">

            @for($i=4;$i<$content['count'];$i++)
                <div class="col-sm-3  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                        <img
                            src="{{ $content['news'][$i]->thumb_square }}"
                            class="img-fluid"
                            alt="world-news"
                        />
                        <span class="thumb-title">{{ $content['news'][$i]->name }}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                        {{ $content['news'][$i]->title }}
                    </h5>
                </div>
            @endfor
        </div>

    </div>
@endsection
