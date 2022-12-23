@extends('frontend.layouts.app')

@section('content')
    <section id="hero-section" class="text-center ormal-padding{">
        <img src="{{ asset('assets/decoration-1.svg') }}" alt="decoration 1" class="decor-1">
        <div class="row">
            <div class="col-12">
                <p class="label mb-3">
                    Frontend Engineer
                </p>
                <p class="title">
                    Dimas Rafi
                </p>
                <p class="description mx-auto">
                    I am a computer engineering student at Diponegoro University, I have an interest in website development, design, and UI/UX. I always try to make mini projects in my spare time to improve my skills in website development.
                </p>
                <a href="#" class="btn-arrow text-decoration-none d-flex justify-content-center">
                    <p class="my-auto">
                        Let's Talk
                    </p>
                    <img src="{{ asset('assets/arrow-icon.svg') }}" alt="arrow icon">
                </a>
            </div>
        </div>
        <img src="{{ asset('assets/decoration-2.svg') }}" alt="decoration 1" class="decor-2">
    </section>

    <section id="tech-section">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between tech-wrapper">
                    <img src="{{ asset('assets/tech/html-logo.svg') }}" alt="html logo">
                    <img src="{{ asset('assets/tech/css-logo.svg') }}" alt="css logo">
                    <img src="{{ asset('assets/tech/react-logo.svg') }}" alt="react logo">
                    <img src="{{ asset('assets/tech/laravel-logo.svg') }}" alt="laravel logo">
                    <img src="{{ asset('assets/tech/javascript-logo.svg') }}" alt="javascript logo">
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio-section">
        <div class="box-wrapper">
            <div class="row mb-2">
                <div class="col-lg-6 col-12 text-left">
                    <p class="title">
                        My Portofolio
                    </p>
                </div>
                <div class="col-lg-6 col-12 my-auto">
                    <a href="#" class="btn-arrow text-decoration-none d-flex justify-content-lg-end justify-content-start">
                        <p class="my-auto">
                            See All
                        </p>
                        <img src="{{ asset('assets/arrow-icon.svg') }}" alt="arrow icon">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card-porto">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/dummy-porto.png') }}">
                        </div>
                        <div class="content p-4">
                            <p class="title-porto">
                                VPN MOBILE APP
                            </p>
                            <p class="category-porto">
                                Mobile App
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section">
        <img src="{{ asset('assets/decoration-3.svg') }}" alt="decoration 1" class="decor-3">
        <div class="row">
            <div class="col-lg-6 col-12">
                <p class="title">
                    Want to make a collaboration ? Let’s have a talk
                </p>
                <a href="#" class="btn-arrow text-decoration-none d-flex justify-content-start mb-lg-0 mb-4">
                    <p class="my-auto">
                       Contact Me
                    </p>
                    <img src="{{ asset('assets/arrow-icon.svg') }}" alt="arrow icon">
                </a>
            </div>
            <div class="col-lg-6 col-12 text-lg-end text-center">
                <div class="image">
                    <img src="{{ asset('assets/contact-image.jpg') }}" alt="laptop half open" class="image-child">
                </div>
            </div>
        </div>
    </section>
@endsection