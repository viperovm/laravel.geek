@extends('layouts.app')

@section('title')
    @parent About Us
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        About Us
                    </h1>
                    <p class="text-secondary fs-15 mb-5 pb-3">
                        This text can be added in the category Description field in
                        dashboard
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                        <img
                            src="{{ asset('assets/images/contact.jpg') }}"
                            class="img-fluid"
                            alt="world-news"
                        />
                    </div>
                </div>
                <div class="col-lg-6 mb-2 mb-lg-2">
                    <div class="row">
                        <div class="col-sm-12  mb-2 mb-lg-2">
                            <h1>OUR MISSION</h1>
                            <p class="mb-3">WHY CHOOSE US</p>
                            <p class="mb-4">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.
                            </p>
                            <p class="mb-4">
                                Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum. Sed
                                ut perspiciatis unde omnis.
                            </p>
                            <p class="fs-15 font-weight-600">
                                VIEW MORE INFORMATION
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6  mb-2 mb-lg-2">
                    <p class="fs-15 font-weight-normal mb-4 mt-5">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                    </p>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum. Sed ut
                        perspiciatis unde omnis.
                    </p>
                </div>
                <div class="col-lg-6  mb-5 mb-sm-2">
                    <p class="fs-15 font-weight-normal mb-4 mt-5">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                    </p>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum. Sed ut
                        perspiciatis unde omnis.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
