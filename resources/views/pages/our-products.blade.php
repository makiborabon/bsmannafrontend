@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-8" style="margin-top: 20px;">

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/LHS-Purple-Garden.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/LHS-Purple-Garden.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Liquid Hand Soap - Purple Garden </h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/LHS-Paradise-Scent.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/LHS-Paradise-Scent.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Liquid Hand Soap - Paradise Scent</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/LHS-Magnolia.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/LHS-Magnolia.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Liquid Hand Soap - Magnolia</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/LHS-Apple-Scent.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/LHS-Apple-Scent.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Liquid Hand Soap - Apple Scent</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/AF-Paradise-Scent.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/AF-Paradise-Scent.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Air Freshener - Paradise Scent</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{ asset('images/products/liquid/FSPRY-Angelic-Scent.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/FSPRY-Angelic-Scent.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Fabric Spry - Angelic Scent</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/FS-Botanical-Breeze.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/FS-Botanical-Breeze.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Fabric Softener - Botanical Breeze</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/Cleona-HandSanitizer.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/Cleona-HandSanitizer.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Cleona - HandSanitizer</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/Cleona-Ethyl-Alcohol.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/Cleona-Ethyl-Alcohol.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Cleona - Ethyl Alcohol</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/CA-Toilet-Bowl-Disinfectant-Cleaner.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/CA-Toilet-Bowl-Disinfectant-Cleaner.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Cleaning Agent - Toilet Bowl Disinfectant Cleaner</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/CA-Degreaser.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/CA-Degreaser.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Cleaning Agent - Degreaser</h5>
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a class="black-text" href="{{ asset('images/products/liquid/CA-All-Purpose-Disinfectant-Cleaner.JPG') }}"
                               data-size="1600x1067">
                                <img class="img-fluid" src="{{ asset('images/products/liquid/CA-All-Purpose-Disinfectant-Cleaner.JPG') }}" alt="Card image cap">
                                <h5 class="text-center my-3">Cleaning Agent - All Purpose Disinfectant Cleaner</h5>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        figure{
            float: left;
        }

        figure a{
            text-decoration: none !important;
        }
        figure:hover{
            opacity: .8;
        }
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%; }
        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease; }
        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1); }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }
    </style>
@endpush