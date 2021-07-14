@extends('layouts.master')

@section('title','MMSJ | Visitor-Amenities')

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
                    <h2>Director's Desk</h2>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Breadcumb Area End Here -->

    @if (session('locale') == 'en')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Visitors Amenities</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/DSC_0449.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <ul style="text-align: justify;">
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Vehicle Parking</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Drinking RO water</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Toilets at convenient locations</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Wheel chairs & ramps for differently abled persons</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Rest areas / sit-outs / visitors' sheds at various locations</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Cloak room near the entrance gate</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> First-aid (at entrance gate)</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Emission free battery operated vehicles</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Children Park and Public Garden</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Souvenir shop Kiosk Centre</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Air conditioned vehicles for Mohan white tiger safari visit</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Air conditioned exhibit gallery</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Shed development in viewers area, parking area and waiting area</li>
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
                            <h2>पर्यटकों हेतु  सुविधाएं</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/DSC_0449.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <ul style="text-align: justify;">
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> वाहन पार्किंग</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> आर. ओ. पीने का पानी</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> सुविधाजनक स्थानों पर शौचालय</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> व्हीलचेयर और रैंप विकलांग व्यक्तियों के लिए</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> विश्राम क्षेत्र/ बैठक स्थल/ पर्यटकों के लिए शेड विभिन्न स्थानों पर</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> प्रवेश द्वार के पास में क्लोकरूम</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> फर्स्टएड किट (प्रवेश द्वार पर)</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> प्रदूषण मुक्त बैटरी संचालित वाहन</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> चिल्ड्रन पार्क और पब्लिक गार्डन</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> स्मारिका दुकान कियोस्क सेंटर</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> मोहन सफेद बाघ सफारी यात्रा के लिए वातानुकूलित वाहन</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> वातानुकूलित प्रदर्शनी गैलरी</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> दर्शकों के क्षेत्र, पार्किंग क्षेत्र और प्रतीक्षा क्षेत्र में शेड विकास</li>
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
