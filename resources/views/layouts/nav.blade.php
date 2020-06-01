<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>{{ $content['date'] }}</li>
                    <li>30°C, Москва</li>
                </ul>
                <div>
                    <a class="navbar-brand" href="{{ route('home') }}"
                    ><span class="logo">НОВОСТИ 24/7</span></a>
                </div>
                <div class="d-flex">
                    <ul class="navbar-right">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->isAdmin())
                                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                                            Админпанель
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <ul class="social-media">

                        <li>
                            <a href="#">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="navbar-bottom-menu">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                >
                    <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
                        <li>
                            <button class="navbar-close">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </li>
                        @foreach($content['categories_top'] as $category)
                            <li

                                @if($category->slug == $content['slug'])
                                class="nav-item active"><a class="nav-link active"
                                                           @else
                                                           class="nav-item"><a class="nav-link"
                                                                               @endif

                                                                               href="
                                                                               @if($category->slug == 'home')
                                                                               {{ route('home') }}
                                                                               @else
                                                                               {{ route('news.category', $category->slug) }}
                                                                               @endif

                                                                                   ">{{ $category->name }}</a>
                            </li>
                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- partial -->
    </div>
</header>



