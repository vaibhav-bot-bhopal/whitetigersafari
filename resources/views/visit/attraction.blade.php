@extends('layouts.master')

@section('title','MMSJ | Special Attraction')

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
                            <h2>Special Attraction</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area" style="padding-top: 0px;">
                            <div class="single-sponser" style="margin-top: 0px;">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="text-center" style="font-weight: 700;">Exhibit Gallery</h3>

                                        <p class="text-justify" style="font-weight: 500;">
                                            The entire tale of white tiger from its first reporting in the region till the recent status, everything is depicted   through beautiful pictures and write-ups in the exhibit gallery. It is appreciated and liked by the visitors.
                                        </p>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="image">
                                                <img src="{{asset('public/assets/images/wts-imgs/exhibit.jpg')}}" alt="">
                                            </div>
                                        </div>

                                        <h3 class="text-center" style="font-weight: 700;">Miyawaki Plantation</h3>

                                        <p class="text-justify" style="font-weight: 500;">
                                            By using this Plantation Technique 0.5 Hectare area has been developed into small forest patch having 105 plant species out of which 28 are RET (Rare, Endangered And Threatened) species.
                                        </p>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="image">
                                                <img src="{{asset('public/assets/images/wts-imgs/miyawaki-1.jpg')}}" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="image">
                                                <img src="{{asset('public/assets/images/wts-imgs/miyawaki-2.jpg')}}" alt="">
                                            </div>
                                        </div>

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
                            <h2>विरासत और इतिहास</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/gellary/Paradise-Flycatcher-Male.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-justify" style="font-weight: 500;">
                                        महाराजा मार्तंड सिंह जूदेव सफेद बाघ सफारी और चिड़ियाघर रीवा संभाग के सतना जिले के मुकुंदपुर में स्थित है। चिड़ियाघर रीवा से 15 किमी दूर और सतना से 55 किमी दूर है। रीवा भारत में मध्य प्रदेश राज्य के उत्तर-पूर्वी भाग का एक शहर है। यह रीवा जिला और रीवा डिवीजन का प्रशासनिक केंद्र है।
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        निकटवर्ती सीधी जिले में, जो की रीवा के पूर्ववर्ती रियासत का एक हिस्सा था और अब रीवा डिवीजन का एक हिस्सा है , दुनिया का पहला सफेद बाघ "मोहन" देखा गया और उसे तत्कालीन रजा द्वारा पकड़ लिया गया था  उस इतिहास का गौरव वापस लाने और संरक्षण के लिए जागरूकता पैदा करने के लिए, क्षेत्र में एक सफेद बाघ सफारी और चिड़ियाघर स्थापित किया गया है।
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        भौगोलिक रूप से यह एक अद्वितीय क्षेत्र है जहां मूल रूप से व्हाइट टाइगर पाया गया था। समग्र आवास में वुडलैंड और घास के मैदान सहित विभिन्न आवास प्रकारों के मोज़ेक के साथ ऊंचे पेड़, झाड़ियाँ, घास और झाड़ियाँ शामिल हैं। यह एक आदर्श स्थल है जहाँ प्राकृतिक जंगल के बीच चिड़ियाघर विकसित है। यह 100 हेक्टेयर के क्षेत्र में फैली स्थलाकृति के क्षेत्र में फैलता है। एक  प्राकृतिक धारा चिड़ियाघर के मध्य से बहती है और बारहमासी नदी, बीहड़, चिड़ियाघर की उत्तरी सीमा के समानांतर बहती है। प्राकृतिक नदियों और  जल निकायों के साथ प्राकृतिक जंगल न केवल चिड़ियाघर को सौंदर्य से शानदार बनाते हैं, बल्कि चिड़ियाघर के बाशिंदों  को प्राकृतिक वातावरण भी प्रदान करते हैं।
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        चिड़ियाघर जून 2015 में स्थापित किया गया था और अप्रैल 2016 में जनता के लिए खोला गया था।
                                    </p>
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
