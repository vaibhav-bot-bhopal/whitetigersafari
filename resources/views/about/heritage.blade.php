@extends('layouts.master')

@section('title','MMSJ | Heritage & History')

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
                            <h2>Heritage and History</h2>
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
                                    The Maharaja Martand Singh Judeo white tiger safari and zoo is located in the Mukundpur of Satna district of Rewa division. The zoo is 15 km far from Rewa and 55 km far from Satna. Rewa is a city in the north-eastern part of Madhya Pradesh state in India. It is the administrative centre of Rewa District and Rewa Division In nearby Sidhi district, a part of the erstwhile princely state of Rewa, and now a part of Rewa division, the world's first white tiger, “Mohan” a mutant variant of the Bengal tiger, was reported and captured. To bring the glory back and to create awareness for conservation, a white tiger safari and zoo is established in the region.
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                    Geographically it is one of the unique region where White Tiger was originally found. The overall habitat includes tall trees, shrubs, grasses and bushes with mosaic of various habitat types including woodland and grassland. It is an ideal site and zoo is developed amidst natural forest. It spreads in area of 100 hectare of undulating topography. The natural stream flows from middle of the zoo and the perennial river Beehad flows parallel to the northern boundary of the zoo. The natural forest with natural streams, rivers and water bodies not only makes the zoo aesthetically magnificent but also provides natural environment to the zoo inmates. The zoo was established in June 2015 and opened for the public in April 2016.
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
