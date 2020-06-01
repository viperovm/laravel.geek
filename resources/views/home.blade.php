@extends('layouts.app')

@section('title')
    @parent Главная страница
@endsection

@section('content')
    <div class="container">
        <!-- Most commented -->
        <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">

                @foreach($content['most_commented'] as $item)

                    <a class="d-flex justify-content-between  mb-3 mb-lg-0 thumb-menu-item"
                       href="{{ route('news.one', [$item->slug, $item->id]) }}">
                        <div>
                            <img
                                src="{{ $item->thumb_43 }}"
                                alt="thumb"
                                class="banner-top-thumb"
                            />
                        </div>
                        <span class="m-0">
                                {{ $item->title }}
                            </span>
                    </a>

                @endforeach

            </div>
        </div>
        <!-- End Most commented -->
        <!-- Popular Articles with slider -->
        <div class="row">
            <!-- Slider -->
            <div class="col-lg-8">
                <div class="owl-carousel owl-theme" id="main-banner-carousel">

                    @for($i=0;$i<4;$i++)

                        <div class="item">
                            <div class="carousel-content-wrapper mb-2">
                                <a class="carousel-content" href="{{ route('news.one', [$content['slider'][$i]->slug, $content['slider'][$i]->id]) }}">
                                    <h1 class="font-weight-bold">
                                        {{ $content['slider'][$i]->title }}
                                    </h1>
                                    <h5 class="font-weight-normal  m-0">
                                        {{ $content['slider'][$i]->excerpt }}
                                    </h5>
                                    <p class="text-color m-0 pt-2 d-flex align-items-center">
                                        <span class="fs-10 mr-1">{{ $content['slider'][$i]->views }}</span>
                                        <i class="mdi mdi-comment-outline"></i>
                                    </p>
                                </a>
                                <div class="carousel-image">
                                    <img src="{{ $content['slider'][$i]->thumb_169_big }}" alt="" />
                                </div>
                            </div>
                        </div>

                    @endfor


                </div>
            </div>
            <!-- End Slider -->
            <!-- Slider Aside -->
            <div class="col-lg-4">
                <div class="row">

                    @for($i=4;$i<10;$i++)

                        <div class="col-sm-6">
                            <div class="py-3 border-bottom">
                                <div class="d-flex align-items-center pb-2">
                                    <img
                                        src="assets/images/dashboard/Profile_1.jpg"
                                        class="img-xs img-rounded mr-2"
                                        alt="thumb"
                                    />
                                    <span class="fs-12 text-muted">Henry Itondo</span>
                                </div>
                                <a href="{{ route('news.one', [$content['slider'][$i]->slug, $content['slider'][$i]->id]) }}" class="fs-14 m-0 font-weight-medium line-height-sm color-black">
                                    {{ $content['slider'][$i]->title }}
                                </a>
                            </div>
                        </div>

                    @endfor
                </div>

            </div>
            <!-- End Slider Aside -->
        </div>
        <!-- End Popular Articles with slider -->
        <!-- Local News -->
        <div class="editors-news">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex position-relative float-left">
                        <h3 class="section-title">События в России</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                    <div class="col-lg-6  mb-5 mb-sm-2">


                        @for($i=0;$i<1;$i++)

                            <div class="position-relative image-hover">
                                <img
                                    src="{{ $content['local'][$i]->thumb_43 }}"
                                    class="img-fluid"
                                    alt="world-news"
                                />
                                <span class="thumb-title">{{ $content['local'][$i]->name }}</span>
                            </div>
                            <a class="color-black" href="{{ route('news.one', [$content['local'][$i]->slug, $content['local'][$i]->id]) }}">
                                <h1 class="font-weight-600 mt-3">
                                    {{ $content['local'][$i]->title }}
                                </h1>
                                <p class="fs-15 font-weight-normal">
                                    {{ $content['local'][$i]->excerpt }}
                                </p>
                            </a>

                        @endfor

                    </div>


                    <div class="col-lg-6  mb-5 mb-sm-2">
                        <div class="row">

                        @for($i=1;$i<5;$i++)

                            <div class="col-sm-6  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img
                                        src="{{ $content['local'][$i]->thumb_169 }}"
                                        class="img-fluid"
                                        alt="world-news"
                                    />
                                    <span class="thumb-title">{{ $content['local'][$i]->name }}</span>
                                </div>
                                <a class="color-black" href="{{ route('news.one', [$content['local'][$i]->slug, $content['local'][$i]->id]) }}">
                                    <h5 class="font-weight-600 mt-3">
                                        {{ $content['local'][$i]->title }}
                                    </h5>
                                    <p class="fs-15 font-weight-normal">
                                        {{ $content['local'][$i]->excerpt }}
                                    </p>
                                </a>
                            </div>

                        @endfor

                    </div>
                </div>
            </div>
        </div>
        <!-- End Local News -->
        <!-- Fresh News -->
        <div class="world-news">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex position-relative  float-left">
                        <h3 class="section-title">Самое свежее</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($content['most_fresh'] as $item)

                    <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img
                                src="{{ $item->thumb_square }}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{ $item->name }}</span>
                        </div>
                        <h5 class="font-weight-bold mt-3">
                            {{ $item->title }}
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            {{ $item->excerpt }}
                        </p>
                        <a href="{{ route('news.one', [$item->slug, $item->id]) }}" class="font-weight-bold text-dark pt-2"
                        >Читать статью</a
                        >
                    </div>

                @endforeach

            </div>
        </div>
        <!-- End Fresh News -->
        <!-- World News -->
        <div class="editors-news">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex position-relative float-left">
                        <h3 class="section-title">События в Мире</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6  mb-5 mb-sm-2">

                    @for($i=0;$i<1;$i++)

                        <div class="position-relative image-hover">
                            <img
                                src="{{ $content['world'][$i]->thumb_43 }}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{ $content['world'][$i]->name }}</span>
                        </div>
                        <a class="color-black" href="{{ route('news.one', [$content['world'][$i]->slug, $content['world'][$i]->id]) }}">
                            <h1 class="font-weight-600 mt-3">
                                {{ $content['world'][$i]->title }}
                            </h1>
                            <p class="fs-15 font-weight-normal">
                                {{ $content['world'][$i]->excerpt }}
                            </p>
                        </a>

                    @endfor

                </div>

                    <div class="col-lg-6  mb-5 mb-sm-2">
                        <div class="row">

                        @for($i=1;$i<5;$i++)

                            <div class="col-sm-6  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img
                                        src="{{ $content['world'][$i]->thumb_169 }}"
                                        class="img-fluid"
                                        alt="world-news"
                                    />
                                    <span class="thumb-title">{{ $content['world'][$i]->name }}</span>
                                </div>
                                <a class="color-black" href="{{ route('news.one', [$content['world'][$i]->slug, $content['world'][$i]->id]) }}">
                                    <h5 class="font-weight-600 mt-3">
                                        {{ $content['world'][$i]->title }}
                                    </h5>
                                    <p class="fs-15 font-weight-normal">
                                        {{ $content['world'][$i]->excerpt }}
                                    </p>
                                </a>
                            </div>

                        @endfor

                    </div>
                </div>
            </div>
        </div>
        <!-- End World News -->
        <!-- Popular News -->
        <div class="popular-news">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex position-relative float-left">
                        <h3 class="section-title">Выбор редакции</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">

                        @for($i=0;$i<3;$i++)

                            <div class="col-sm-4  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img
                                        src="{{ $content['publisher_choice'][$i]->thumb_square }}"
                                        class="img-fluid"
                                        alt="world-news"
                                    />
                                    <span class="thumb-title">{{ $content['publisher_choice'][$i]->name }}</span>
                                </div>
                                <a class="color-black" href="{{ route('news.one', [$content['publisher_choice'][$i]->slug, $content['publisher_choice'][$i]->id]) }}">
                                    <h5 class="font-weight-600 mt-3">
                                        {{ $content['publisher_choice'][$i]->title }}
                                    </h5>
                                </a>
                            </div>

                        @endfor

                    </div>
                    <div class="row mt-3">
                        @for($i=3;$i<6;$i++)

                            <div class="col-sm-4  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img
                                        src="{{ $content['publisher_choice'][$i]->thumb_square }}"
                                        class="img-fluid"
                                        alt="world-news"
                                    />
                                    <span class="thumb-title">{{ $content['publisher_choice'][$i]->name }}</span>
                                </div>
                                <a class="color-black" href="{{ route('news.one', [$content['publisher_choice'][$i]->slug, $content['publisher_choice'][$i]->id]) }}">
                                    <h5 class="font-weight-600 mt-3">
                                        {{ $content['publisher_choice'][$i]->title }}
                                    </h5>
                                </a>
                            </div>

                        @endfor
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="position-relative mb-3">
                        <img
                            src="assets/images/dashboard/star-magazine-15.jpg"
                            class="img-fluid"
                            alt="world-news"
                        />
                        <div class="video-thumb text-muted">
                            <span><i class="mdi mdi-menu-right"></i></span>LIVE
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex position-relative float-left">
                                <h3 class="section-title">Рейтинговые</h3>
                            </div>
                        </div>

                        @foreach($content['rating'] as $item)

                            <div class="col-sm-12">
                                <div class="border-bottom pb-3">
                                    <a href="{{ route('news.one', [$item->slug, $item->id]) }}" class="font-weight-600 mt-0 mb-0 color-black">
                                        {{ $item->title }}
                                    </a>
                                    <p class="text-color m-0 d-flex align-items-center">
                                        <span class="fs-10 mr-1">2 hours ago</span>
                                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                                        <span class="fs-10 mr-1">{{ $item->views }}</span>
                                        <i class="mdi mdi-comment-outline"></i>
                                    </p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular News -->

    </div>
@endsection
