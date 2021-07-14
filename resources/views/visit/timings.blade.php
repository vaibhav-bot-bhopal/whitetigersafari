@extends('layouts.master')

@section('title','MMSJ | Visiting hours')

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
                            <h2>Visiting hours</h2>
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
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Timings</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr>
                                            <th class="text-center">1</th>
                                            <td>1<sup>st</sup> November to 31<sup>st</sup> March</td>
                                            <td class="text-center">9:30 AM to 4:30 PM</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">2</th>
                                            <td>1<sup>st</sup> April to 31<sup>st</sup> October</td>
                                            <td class="text-center">9:00 AM to 5:00 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="text-center" style="font-weight: 700; font-size: 16px;">
                                MMSJ White Tiger Safari and Zoo, Mukundpur will remain closed every Sunday as their weekly holiday. In addition to the weekly holiday, Diwali and Holi will also be observed as Public Holiday.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="{{asset('public/assets/images/visit.jpg')}}" alt="">
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
                            <h2>खुलने का समय</h2>
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
                                            <th class="text-center">तारीख</th>
                                            <th class="text-center">समय</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- On cells (`td` or `th`) -->
                                        <tr>
                                            <th class="text-center">1</th>
                                            <td>1 नवंबर से 31 मार्च तक</td>
                                            <td class="text-center">सुबह 9:30 बजे से शाम 4:30 बजे तक</td>
                                        </tr>

                                        <tr>
                                            <th class="text-center">2</th>
                                            <td>1 अप्रैल से 31 अक्टूबर तक</td>
                                            <td class="text-center">सुबह 9:00 बजे से शाम 5:00 बजे तक</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="text-center" style="font-weight: 700; font-size: 16px;">
                                मुकुंदपुर व्हाइट टाइगर सफारी और चिड़ियाघर, हर बुधवार को साप्ताहिक अवकाश के रूप में बंद रहेगा। साप्ताहिक अवकाश के अलावा, दिवाली और होली को सार्वजनिक अवकाश के रूप में भी मनाया जाएगा।
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="{{asset('public/assets/images/visit.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Opening Hours End Here -->
    @endif

@endsection
