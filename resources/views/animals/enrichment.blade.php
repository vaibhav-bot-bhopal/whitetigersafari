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
                            <h2>समृद्ध</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area" style="padding-top: 0px;">
                            <div class="single-sponser" style="margin-top: 0px;">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="text-center" style="font-weight: 700;">पशुओं के पालन-पोषण के लिए मौसमी विशेष व्यवस्था</h3>

                                        <p class="text-justify" style="font-weight: 500;">
                                            सर्दियों के मौसम के लिए, सेल को गर्म रखने के लिए रात के घरों में गर्म हवा के ब्लोअर का उपयोग किया जाता है। रात में खिड़की के पैनल बंद रखे जाते हैं लेकिन वेंटिलेशन सिस्टम के माध्यम से ताजी हवा का संचार बना रहता है।
                                        </p>

                                        <p class="text-justify" style="font-weight: 500;">
                                            चूंकि इस क्षेत्र में गर्मी बहुत गर्म होती है, इसलिए गर्मी के तनाव को कम करने के लिए नाइट हाउस के साथ-साथ डिस्प्ले एरिया (अखाड़ा) के अंदर भी हर संभव प्रयास किया जाता है। नाइट हाउस और सेल में एयर कूलर लगाए गए हैं। अखाड़े में उच्च तापमान के प्रभाव को कम करने के लिए निम्नलिखित नई पहल की गई है।
                                        </p>

                                        <ul>
                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">1) हर्बिवोर एनक्लोजर में स्प्रिंकलर (पॉप-अप सिस्टम) इंस्टालेशन:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    यह गर्मियों के दौरान अत्यधिक गर्मी से निपटने के लिए किया जाता है। यह न केवल जानवरों को ठंडा वातावरण प्रदान करता है बल्कि बाड़े की देशी घास को हरा और जीवित भी रखता है जिसका सेवन उस बाड़े के निवासियों (बंदी शाकाहारी) द्वारा किया जाता है।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/installation-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">2) छप्पर शेड का निर्माण:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    सभी जानवरों (मांसाहारी और शाकाहारी) के प्रदर्शन क्षेत्र में थैच शेड बनाए जाते हैं और कठिन गर्मी के मौसम में जानवरों को आराम से रखने के लिए हर सुबह इन शेड के नीचे पानी का छिड़काव किया जाता है।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/construction.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">3) कार्निवोर एनक्लोजर में स्प्रिकलर (रेन गन सिस्टम) इंस्टालेशन:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    यह गर्मियों के दौरान अत्यधिक गर्मी से निपटने के लिए किया जाता है। यह न केवल जानवरों को ठंडा वातावरण प्रदान करता है बल्कि बाड़े की देशी घास को हरा और जीवित रखता है और निवासी को प्राकृतिक वातावरण प्रदान करता है।
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
