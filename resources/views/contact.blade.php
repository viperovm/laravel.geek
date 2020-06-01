@extends('layouts.app')

@section('title')
    @parent Agreement
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Contact Us
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
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    aria-describedby="name"
                                    placeholder="Name *"
                                />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    aria-describedby="email"
                                    placeholder="Email *"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    aria-describedby="Subject"
                                    placeholder="Subject"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                      <textarea
                          class="form-control textarea"
                          placeholder="Message"
                          id="message"
                      ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-dark font-weight-bold"
                                >Submit</a
                                >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 mb-2 mb-lg-2">
                <div class="contact-right-padding">
                    <div class="row">
                        <div class="col-sm-12  mb-2 mb-lg-2">
                            <h1>GET IN TOUCH</h1>
                            <p class="mb-4 fs-15">
                                This text can be added in the category Description field
                                in dashboard
                            </p>
                            <p class="mb-0 font-weight-bold fs-14">
                                ADDRESS
                            </p>
                            <p class="mb-4 font-weight-medium fs-14">
                                329 South Street Court - Albany, NY 83741
                            </p>
                            <p class="mb-0 font-weight-bold fs-14">
                                PHONE
                            </p>
                            <p class="mb-4 font-weight-medium fs-14">
                                (123) 456 - 7890
                            </p>
                            <p class="mb-0 font-weight-bold fs-14">
                                EMAIL
                            </p>
                            <p class="mb-4 font-weight-medium fs-14">
                                info@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
