<footer>
    <div class="container">
        <div class="border-top footermenu">
            <div class="row">
                <div class="col-sm-12 col-lg-9">
                    <div class="categories-list-name">
                        Категории
                    </div>
                    <div class="row">

                        @foreach($content['categories_all'] as $category)
                            <a class="col-sm-12 col-lg-4"
                               href="
@if($category->slug == 'home')
                               {{ route('home') }}
                               @else
                               {{ route('news.category', $category->slug) }}
                               @endif
">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="categories-list-name">
                        Еще...
                    </div>
                    <div class="row">
                        @foreach($content['nav'] as $item)
                            <a class="col-lg-12" href="{{ route('site', $item->url) }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                    <div><span class="logo">НОВОСТИ 24/7</span></div>

                    <div class="d-flex justify-content-end footer-social">
                        <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
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
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div
                    class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                    <ul class="footer-horizontal-menu">
                        <li><a href="#">Terms of Use.</a></li>
                        <li><a href="#">Privacy Policy.</a></li>
                        <li><a href="#">Accessibility & CC.</a></li>
                        <li><a href="#">AdChoices.</a></li>
                        <li><a href="#">Advertise with us Transcripts.</a></li>
                        <li><a href="#">License.</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                    <p class="font-weight-medium">
                        © 2010-{{ date ( 'Y' ) }} <a href="https://www.novosti247.ru/" target="_blank"
                                                     class="text-dark"> Новости 24/7</a>, Inc. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- inject:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<!-- End custom js for this page-->
</body>
</html>
