@extends('layouts.master')

@section('title','MMSJ | Vision, Mission & Objective')

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
                            <h2>Vission, Mission & Objective</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/gellary/DSC_0416.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="all-h2">Vision</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                    The Zoo at Mukundpur will provide rewarding experience to the visitors not about the local wildlife but also of India. The exhibits care and awareness will be of such level to promote conservation of wildlife. The Zoological Park will endeavour to breed the endangered species in a planned manner for display, exchange and rehabilitation in the wild. This zoo will be a showcase of nature for the visitors.
                                    </p>

                                    <h2 class="all-h2">Mission</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                    This Zoological Park intends to complement the national efforts in conservation of wildlife through planned breeding of endangered species and to develop empathy among visitors for wild animals.
                                    </p>

                                    <h2 class="all-h2">Objective</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                    The zoo shall work for the conservation of the rich bio-diversity of the state to the following objectives:
                                    </p>

                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>To create amongst the visitors empathy towards wild animals through appreciation and better understanding.</li>
                                        <li>Conservation breeding of endangered species of wild animals, available within the bio-geographical range.</li>
                                        <li>To provide housing and upkeep to the orphaned animals of endangered species rescued from the wild.</li>
                                        <li>To collect and collate the scientific data on the biology, behavior and health care of various species of wild animals housed in the zoo and use the same in future management of the zoo.</li>
                                        <li>To assist in conservation of the in-situ population of various species of endangered animals and their habitat by sensitizing the people.</li>
                                        <li>To establish a small research centre for identification and cultivation of various species of medicinal plants naturally occurring in adjoining forest areas.</li>
                                        <li>Recreation for the purpose of providing wholesome, healthy and educational activity to a large number of people by utilizing the outdoor natural setting without detriment to any of the preceding objectives.</li>
                                    </ol>
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
                            <h2>विज़न, मिशन और उद्देश्य</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/gellary/DSC_0416.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="all-h2">विज़न</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                        मुकुंदपुर का चिड़ियाघर आगंतुकों को केवल स्थानीय वन्यजीवों के बारे में ही नहीं बल्कि पूरे भारत का भी अनुभव प्रदान करे । यहाँ लगी प्रदर्शनियों वन्यजीवों के संरक्षण को बढ़ावा देने का सन्देश दें इस तरह के स्तर की होगी।  साथ ही यह जूलॉजिकल पार्क लुप्तप्राय प्रजातियों के प्रदर्शन, विनिमय और पुनर्वास के लिए योजनाबद्ध तरीके से  काम  करने का प्रयास करेगा। यह चिड़ियाघर आगंतुकों के लिए हमारी प्राकर्तिक सम्पदा का प्रदर्शन करेगा ।
                                    </p>

                                    <h2 class="all-h2">मिशन</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                        यह जूलॉजिकल पार्क लुप्तप्राय प्रजातियों के नियोजित प्रजनन के माध्यम से वन्यजीवों के संरक्षण में राष्ट्रीय प्रयासों के पूरक और जंगली जानवरों के लिए आगंतुकों के बीच सहानुभूति विकसित करने का इरादा रखता है।
                                    </p>

                                    <h2 class="all-h2">उद्देश्य</h2>
                                    <p class="text-justify" style="font-weight: 500;">
                                    चिड़ियाघर राज्य के समृद्ध जैव-विविधता के संरक्षण के लिए निम्नलिखित उद्देश्यों के लिए काम करेगा:
                                    </p>

                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>सराहना और बेहतर समझ के माध्यम से जंगली जानवरों के प्रति आगंतुकों की सहानुभूति पैदा करना।</li>
                                        <li>जैव-भौगोलिक सीमा के भीतर उपलब्ध जंगली जानवरों की लुप्तप्राय प्रजातियों का संरक्षण एवं प्रजनन। </li>
                                        <li>जंगल से बचाई गई लुप्तप्राय प्रजातियों के अनाथ जानवरों को आवास देना और उनकी देखभाल करना।</li>
                                        <li>चिड़ियाघर में रखे गए जंगली जानवरों की विभिन्न प्रजातियों का जीव विज्ञान उपयोगी वैज्ञानिक डेटा को इकट्ठा करना और यह  सुनिश्चित करना की डाटा एकत्र होने के उपरांत , चिड़ियाघर के भविष्य का प्रबंधन उसी का उपयोग करें।</li>
                                        <li>लुप्तप्राय जानवरों की विभिन्न प्रजातियों का इन-सीटू संरक्षण में सहायता करना और लोगों को जागरूक करना।</li>
                                        <li>प्राकृतिक रूप से निकटवर्ती वन क्षेत्रों में होने वाली औषधीय पौधों की विभिन्न प्रजातियों की पहचान और खेती के लिए एक छोटा अनुसंधान केंद्र स्थापित करना।</li>
                                        <li>अधिक से अधिक लोगों को एक सम्पूर्ण, स्वस्थ्य और शैक्षिक गतिविधि प्रदान करना जिनसे उनका मनोरंजन भी हो और इसके लिए प्राकर्तिक वातावरण का इस तरह उपयोग करना जिससे उसकी कोई हानि न हो।</li>
                                    </ol>
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
