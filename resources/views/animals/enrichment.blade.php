@extends('layouts.master')

@section('title','MMSJ | Enrichment')

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

        .remember-area .image {
            padding: 20px 0 30px 0;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area two">
    </div>
    <!-- Breadcumb Area End Here -->

    @if (session('locale') == 'en')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Enrichment</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area" style="padding-top: 0px;">
                            <div class="single-sponser" style="margin-top: 0px;">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="text-center" style="font-weight: 700;">Seasonal special arrangements for upkeep of animals</h3>

                                        <p class="text-justify" style="font-weight: 500;">
                                            For winter seasons, the hot air blowers are used in night houses to keep the cell warm. The window panels kept closed in night but the fresh air circulation is maintained through ventilation system.
                                        </p>

                                        <p class="text-justify" style="font-weight: 500;">
                                            As summer is very hot in this region, every attempt is made inside the night house as well as the display area (arena) to reduce the summer stress. The air coolers are installed in the night house and cell. To reduce the effects of high temperature in arena the following new initiatives have been taken.
                                        </p>

                                        <ul>
                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">1) Sprinkler (Pop-up System) Installation in Herbivore Enclosures:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    It is done to combat the excessive heat during summers. It not only provides the cool environment to the animals but also keeps the native grass of enclosure green and alive which is consumed by the residents of that enclosure (Captive herbivores).
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/installation-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">2) Construction of Thatch Shed:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    Thatch sheds are made in the display area of all the animals (carnivores and herbivores) and the water is sprinkled every morning under these sheds to keep the animal comfortable during tough summer season.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/construction.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">3) Sprikler (Rain Gun System) Installation in Carnivore Enclosures:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    It is done to combat the excessive heat during summers. It not only provides the cool environment to the animals but also keeps the native grass of enclosure green and alive and provide natural environment to the resident.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/installation-3.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Remember End Here -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>??????????????????</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area" style="padding-top: 0px;">
                            <div class="single-sponser" style="margin-top: 0px;">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="text-center" style="font-weight: 700;">??????????????? ?????? ????????????-???????????? ?????? ????????? ??????????????? ??????????????? ????????????????????????</h3>

                                        <p class="text-justify" style="font-weight: 500;">
                                            ???????????????????????? ?????? ???????????? ?????? ?????????, ????????? ?????? ???????????? ???????????? ?????? ????????? ????????? ?????? ???????????? ????????? ???????????? ????????? ?????? ?????????????????? ?????? ??????????????? ???????????? ???????????? ????????? ????????? ????????? ?????????????????? ?????? ???????????? ????????? ????????? ???????????? ????????? ??????????????? ??????????????????????????? ?????????????????? ?????? ?????????????????? ?????? ???????????? ????????? ?????? ??????????????? ????????? ???????????? ?????????
                                        </p>

                                        <p class="text-justify" style="font-weight: 500;">
                                            ??????????????? ?????? ????????????????????? ????????? ??????????????? ???????????? ???????????? ???????????? ??????, ??????????????? ??????????????? ?????? ???????????? ?????? ?????? ???????????? ?????? ????????? ???????????? ???????????? ?????? ?????????-????????? ???????????????????????? ??????????????? (??????????????????) ?????? ???????????? ?????? ?????? ???????????? ?????????????????? ???????????? ???????????? ????????? ???????????? ???????????? ?????? ????????? ????????? ????????? ???????????? ???????????? ?????? ???????????? ?????????????????? ????????? ???????????? ?????????????????? ?????? ?????????????????? ?????? ?????? ???????????? ?????? ????????? ?????????????????????????????? ?????? ????????? ?????? ?????? ?????????
                                        </p>

                                        <ul>
                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">1) ???????????????????????? ???????????????????????? ????????? ?????????????????????????????? (?????????-?????? ??????????????????) ??????????????????????????????:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    ?????? ???????????????????????? ?????? ??????????????? ????????????????????? ??????????????? ?????? ?????????????????? ?????? ????????? ???????????? ???????????? ????????? ?????? ??? ???????????? ????????????????????? ?????? ???????????? ????????????????????? ?????????????????? ???????????? ?????? ??????????????? ??????????????? ?????? ???????????? ????????? ?????? ????????? ?????? ??????????????? ?????? ???????????? ?????? ??????????????? ???????????? ?????? ??????????????? ?????? ??????????????????????????? (???????????? ????????????????????????) ?????????????????? ???????????? ???????????? ?????????
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/installation-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">2) ??????????????? ????????? ?????? ?????????????????????:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    ????????? ????????????????????? (??????????????????????????? ?????? ????????????????????????) ?????? ???????????????????????? ????????????????????? ????????? ????????? ????????? ???????????? ???????????? ????????? ?????? ???????????? ??????????????? ?????? ???????????? ????????? ????????????????????? ?????? ???????????? ?????? ???????????? ?????? ????????? ?????? ???????????? ?????? ????????? ?????? ???????????? ???????????? ?????? ????????????????????? ???????????? ???????????? ?????????
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/construction.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">3) ??????????????????????????? ???????????????????????? ????????? ??????????????????????????? (????????? ?????? ??????????????????) ??????????????????????????????:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    ?????? ???????????????????????? ?????? ??????????????? ????????????????????? ??????????????? ?????? ?????????????????? ?????? ????????? ???????????? ???????????? ????????? ?????? ??? ???????????? ????????????????????? ?????? ???????????? ????????????????????? ?????????????????? ???????????? ?????? ??????????????? ??????????????? ?????? ???????????? ????????? ?????? ????????? ?????? ??????????????? ???????????? ?????? ?????? ?????????????????? ?????? ??????????????????????????? ????????????????????? ?????????????????? ???????????? ?????????
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/installation-3.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Remember End Here -->
    @endif

@endsection
