@extends('layouts.master')

@section('title','MMSJ | Tickets & Pricing')

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
        <div class="container">
            <div class="row">
                <!-- <div class="breadcumb">
                    <h2>Zoo Fee and Charges</h2>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Breadcumb Area End Here -->


    @if (session('locale') == 'en')
         <!-- Opening Hours Start Here -->
        <div class="openning-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Ticket and Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="opening-hours">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SNo.</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Fare</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr>
                                            <th class="text-center">1</th>
                                            <td>Zoo Visit By Walk</td>
                                            <td class="text-center">20/- Per Person</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">2</th>
                                            <td>Zoo Visit By Bicycle (Provided By Management)</td>
                                            <td class="text-center">30/- Per Person</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">3</th>
                                            <td>Zoo Visit By Golf Cart (Provided By Management)</td>
                                            <td class="text-center">50/- Per Person</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">4</th>
                                            <td>Safari Visit (By Management Vehicle)</td>
                                            <td class="text-center">50/- Per Person</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="{{asset('public/assets/images/4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Opening Hours End Here -->
    @endif

    @if (session('locale') == 'hi')
         <!-- Opening Hours Start Here -->
        <div class="openning-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>टिकट और मूल्य</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="opening-hours">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">क्रमांक</th>
                                            <th class="text-center">विवरण</th>
                                            <th class="text-center">किराया</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr>
                                            <th class="text-center">1</th>
                                            <td>चिड़ियाघर मैं पैदल घूमना</td>
                                            <td class="text-center">20 / - प्रति व्यक्ति</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">2</th>
                                            <td>चिड़ियाघर मैं साईकल से घूमना (प्रबंधन द्वारा प्रदान)</td>
                                            <td class="text-center">30 / - प्रति व्यक्ति</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">3</th>
                                            <td>चिड़ियाघर मैं गोल्फ गाड़ी से घूमना (प्रबंधन द्वारा प्रदान)</td>
                                            <td class="text-center">50 / - प्रति व्यक्ति</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">4</th>
                                            <td>सफारी यात्रा (प्रबंधन वाहन द्वारा)</td>
                                            <td class="text-center">50 / - प्रति व्यक्ति</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="{{asset('public/assets/images/4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Opening Hours End Here -->
    @endif

@endsection
