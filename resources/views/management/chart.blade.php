@extends('layouts.master')

@section('title','MMSJ | Website-Under-Maintenance')

@push('css')
    <style>
        header .header-top .header-top-right ul li {
            color: #000000!important;
            font-weight: 600!important;
        }

        header .header-top .header-top-right ul li a{
            color: #000000!important;
            font-weight: 600!important;
        }

        header .main-header ul li.active a {
            color: #000000;
        }

        header .main-header ul li a {
            display: block;
            text-decoration: none;
            font-family: "Architects Daughter", cursive;
            color: #000000;
            font-weight: 600!important;
            padding: 20px 25px;
            font-size: 22px;
            font-weight: 300;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
    </style>
@endpush

@section('content')
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area two">
            <!-- <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <h2>Website Under <br>Construction</h2>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Breadcumb Area End Here -->

        @if (session('locale') == 'en')
            <!-- Opening Hours Start Here -->
            <div class="openning-area gallery-open bg-error">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="section-title">
                                <h2>Organizational Chart</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row rm-mrgn">
                        {{-- <div class="home-services-area gallery-area"> --}}
                            <div class="container ">
                                <div class="row rm-mrgn">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-services widget">
                                            <div class="services-image heig">
                                                <img src="{{asset('public/assets/images/blog/Organizational-Chart-en.png')}}" alt="" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <!-- Opening Hours End Here -->
        @endif

        @if (session('locale') == 'hi')
            <!-- Opening Hours Start Here -->
            <div class="openning-area gallery-open bg-error">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="section-title">
                                <h2>संगठनात्मक चार्ट</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row rm-mrgn">
                        {{-- <div class="home-services-area gallery-area"> --}}
                            <div class="container ">
                                <div class="row rm-mrgn">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-services widget">
                                            <div class="services-image heig">
                                                <img src="{{asset('public/assets/images/blog/Organizational Chart-hi.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <!-- Opening Hours End Here -->
        @endif

@endsection
