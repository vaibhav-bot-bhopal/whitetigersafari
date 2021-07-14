@extends('layouts.master')

@section('title','MMSJ | Education Programs')

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

        .sponser-area{
            padding: 0px 0px 20px 0px;
        }

        .sponser-area .single-sponser{
            margin-top: 0px;
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
                            <h2>Education Programs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2019-20</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">Education and Awareness programmes during the year:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        It is known that every year various days and weeks are celebrated to create awareness among the people for the conservation of wildlife. This year, to commemorate these events with nature and wildlife conservation, we conducted various activities to educate the children and create awareness amongst them for the conservation of wildlife. These activities include prabhat feri, painting, quiz, questionnaire, general discussion, interaction with zoo staff and zoo visit.  The brief descriptions of these campaigns are mentioned below:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">World Environment Day:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    The 46th world environment day was celebrated on 05th June 2019 and the theme of the programme was “AIR POLLUTION”. On this day we invited school kids from the summer camp for the zoo visit, organized plantation activities, gave talk over conservation of environment, forest and wildlife to control air pollution and finally distributed green calendars and posters to the participants.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wed.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">Wildlife Week:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    The world wildlife week was celebrated between 01/10/2019-07/10/2019 during which various events organised in which 289 people including school kids and zoo visitors participated.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-4.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">International Biodiversity Day:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    To celebrate the international biodiversity day, the plantation of RET species of plants was done in zoo premises in association with the research and extension, Nursery Mukundpur.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/ibd.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </p>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2018-19</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">Education and Awareness programmes during the year:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        It is known that every year various days and weeks are celebrated to create awareness among the people for the conservation of wildlife. This year, to commemorate these events with nature and wildlife conservation, we conducted various activities to educate the children and create awareness amongst them for the conservation of wildlife. These activities include prabhat feri, painting, quiz, questionnaire, general discussion, interaction with zoo staff and zoo visit.  The brief descriptions of these campaigns are mentioned below:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">World Environment Day:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    The 45th world environment day was celebrated on 05th June 2018 and on this day we invited school kids for the zoo visit, organized painting competition in zoo and plantation activities were also done. They spend the entire day in the zoo and we conveyed the message for the conservation of wildlife and biodiversity.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wwd.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">Wildlife Week:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    The world wildlife week was celebrated between 01/10/2017-07/10/2017 during which the Kids from the government schools of nearby villages are brought to the zoo. We also visited schools to conduct various activities like painting, quiz etc with the theme of wildlife. We also organized an unique  quiz programme “ Kaun Banega Fan of White Tiger”
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-3.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">Exhibition in Prayagraj Ardh  Kumh Mela:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    In year 2019  Ardh Kumbh Mela held during month of January to March and approximately 120 million people  attended this  mega event. It was the great opportunity to reach a big number of people and to convey the message for nature and wildlife conservation. To achieve this objective, in collaboration with Bandhavgarh Tiger Reserve,  Kanha Tiger reserve and Sanjay Dubri Tiger Reserve we laid an exhibition for one month and displayed the model of White Tiger Safari and Zoo along with flex and banners and distributed the pamphlets  with messages to the visitors. The different  items were also sold through souvenir shop.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/kumbh-mela.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </p>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2017-18</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">Education and Awareness programmes during the year:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        It is known that every year various days and weeks are celebrated to create awareness among the people for the conservation of wildlife. This year, to commemorate these events with nature and wildlife conservation, we conducted various activities to educate the children and create awareness amongst them for the conservation of wildlife. These activities include prabhat feri, painting, quiz, questionnaire, general discussion, interaction with zoo staff and zoo visit.  The brief descriptions of these campaigns are mentioned below:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">Wildlife Week:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    The world wildlife week was celebrated between 01/10/2017-07/10/2017 during which the Kids from the government schools of nearby villages are brought to the zoo. We also visited schools to conduct various activities like painting, quiz etc with the theme of wildlife.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-1.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">World Wildlife Day:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    This year the theme of world wildlife Day was, “Big Cats: The Predators Under Threat” and to convey this message to the kids, we invited 158 children from 02 schools and spend the day with them in the zoo and conveyed the message for the conservation of wildlife and biodiversity.
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
                            <h2>शिक्षा कार्यक्रम</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2019-20</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">वर्ष के दौरान शिक्षा और जागरूकता कार्यक्रम:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        यह ज्ञात है कि वन्यजीवों के संरक्षण के लिए लोगों में जागरूकता पैदा करने के लिए हर साल विभिन्न दिन और सप्ताह मनाए जाते हैं। इस वर्ष, प्रकृति और वन्यजीव संरक्षण के साथ इन आयोजनों को मनाने के लिए, हमने बच्चों को शिक्षित करने और वन्यजीवों के संरक्षण के लिए उनमें जागरूकता पैदा करने के लिए विभिन्न गतिविधियों का आयोजन किया। इन गतिविधियों में प्रभात फेरी, पेंटिंग, प्रश्नोत्तरी, प्रश्नावली, सामान्य चर्चा, चिड़ियाघर के कर्मचारियों के साथ बातचीत और चिड़ियाघर का दौरा शामिल हैं। इन अभियानों का संक्षिप्त विवरण नीचे दिया गया है:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">विश्व पर्यावरण दिवस:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    46वां विश्व पर्यावरण दिवस 05 जून 2019 को मनाया गया और कार्यक्रम का विषय "वायु प्रदूषण" था। इस दिन हमने ग्रीष्मकालीन शिविर से स्कूली बच्चों को चिड़ियाघर के दौरे के लिए आमंत्रित किया, वृक्षारोपण गतिविधियों का आयोजन किया, वायु प्रदूषण को नियंत्रित करने के लिए पर्यावरण, वन और वन्य जीवन के संरक्षण पर बात की और अंत में प्रतिभागियों को हरे रंग के कैलेंडर और पोस्टर वितरित किए।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wed.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">वन्यजीव सप्ताह:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    विश्व वन्यजीव सप्ताह 01/10/2019-07/10/2019 के बीच मनाया गया, जिसके दौरान विभिन्न कार्यक्रम आयोजित किए गए जिसमें स्कूली बच्चों और चिड़ियाघर के आगंतुकों सहित 289 लोगों ने भाग लिया।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-4.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">अंतर्राष्ट्रीय जैव विविधता दिवस:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    अंतर्राष्ट्रीय जैव विविधता दिवस मनाने के लिए अनुसंधान एवं विस्तार नर्सरी मुकुंदपुर के सहयोग से चिड़ियाघर परिसर में आरईटी प्रजाति के पौधों का पौधारोपण किया गया।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/ibd.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </p>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2018-19</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">वर्ष के दौरान शिक्षा और जागरूकता कार्यक्रम:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        यह ज्ञात है कि वन्यजीवों के संरक्षण के लिए लोगों में जागरूकता पैदा करने के लिए हर साल विभिन्न दिन और सप्ताह मनाए जाते हैं। इस वर्ष, प्रकृति और वन्यजीव संरक्षण के साथ इन आयोजनों को मनाने के लिए, हमने बच्चों को शिक्षित करने और वन्यजीवों के संरक्षण के लिए उनमें जागरूकता पैदा करने के लिए विभिन्न गतिविधियों का आयोजन किया। इन गतिविधियों में प्रभात फेरी, पेंटिंग, प्रश्नोत्तरी, प्रश्नावली, सामान्य चर्चा, चिड़ियाघर के कर्मचारियों के साथ बातचीत और चिड़ियाघर का दौरा शामिल हैं। इन अभियानों का संक्षिप्त विवरण नीचे दिया गया है:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">विश्व पर्यावरण दिवस:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    05 जून 2018 को 45वां विश्व पर्यावरण दिवस मनाया गया और इस दिन हमने स्कूली बच्चों को चिड़ियाघर भ्रमण के लिए आमंत्रित किया, चिड़ियाघर में पेंटिंग प्रतियोगिता का आयोजन किया और वृक्षारोपण गतिविधियां भी की गईं। वे पूरा दिन चिड़ियाघर में बिताते हैं और हमने वन्यजीवों और जैव विविधता के संरक्षण के लिए संदेश दिया।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wwd.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">वन्यजीव सप्ताह:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    विश्व वन्यजीव सप्ताह 01/10/2017-07/10/2017 के बीच मनाया गया, जिसके दौरान आसपास के गांवों के सरकारी स्कूलों के बच्चों को चिड़ियाघर लाया जाता है। हमने वन्यजीवों की थीम के साथ पेंटिंग, प्रश्नोत्तरी आदि जैसी विभिन्न गतिविधियों का संचालन करने के लिए स्कूलों का भी दौरा किया। हमने एक अनोखा प्रश्नोत्तरी कार्यक्रम "व्हाइट टाइगर का कौन बनेगा फैन" भी आयोजित किया।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-3.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">प्रयागराज अर्ध  कुम्ह मेला में प्रदर्शनी:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    वर्ष 2019 में अर्ध कुंभ मेला जनवरी से मार्च के महीने में आयोजित किया गया था और इस मेगा आयोजन में लगभग 120 मिलियन लोग शामिल हुए थे। यह बड़ी संख्या में लोगों तक पहुंचने और प्रकृति और वन्यजीव संरक्षण के लिए संदेश देने का एक शानदार अवसर था। इस उद्देश्य को प्राप्त करने के लिए बांधवगढ़ टाइगर रिजर्व, कान्हा टाइगर रिजर्व और संजय दुबरी टाइगर रिजर्व के सहयोग से हमने एक महीने के लिए एक प्रदर्शनी लगाई और फ्लेक्स और बैनर के साथ व्हाइट टाइगर सफारी और चिड़ियाघर के मॉडल को प्रदर्शित किया और संदेश के साथ पैम्फलेट वितरित किए। आगंतुक। स्मारिका दुकान के माध्यम से विभिन्न वस्तुओं की बिक्री भी की गई।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/kumbh-mela.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </p>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2017-18</h2>
                                    </div>
                                    <h4 class="text-left" style="font-weight: 700;">वर्ष के दौरान शिक्षा और जागरूकता कार्यक्रम:</h4>

                                    <p class="text-justify" style="font-weight: 500;">
                                        यह ज्ञात है कि वन्यजीवों के संरक्षण के लिए लोगों में जागरूकता पैदा करने के लिए हर साल विभिन्न दिन और सप्ताह मनाए जाते हैं। इस वर्ष, प्रकृति और वन्यजीव संरक्षण के साथ इन आयोजनों को मनाने के लिए, हमने बच्चों को शिक्षित करने और वन्यजीवों के संरक्षण के लिए उनमें जागरूकता पैदा करने के लिए विभिन्न गतिविधियों का आयोजन किया। इन गतिविधियों में प्रभात फेरी, पेंटिंग, प्रश्नोत्तरी, प्रश्नावली, सामान्य चर्चा, चिड़ियाघर के कर्मचारियों के साथ बातचीत और चिड़ियाघर का दौरा शामिल हैं। इन अभियानों का संक्षिप्त विवरण नीचे दिया गया है:
                                        <ul>
                                            <li><h4 class="text-left" style="font-weight: 700;">वन्यजीव सप्ताह:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    विश्व वन्यजीव सप्ताह 01/10/2017-07/10/2017 के बीच मनाया गया, जिसके दौरान आसपास के गांवों के सरकारी स्कूलों के बच्चों को चिड़ियाघर लाया जाता है। हमने वन्यजीवों की थीम के साथ पेंटिंग, प्रश्नोत्तरी आदि जैसी विभिन्न गतिविधियों का संचालन करने के लिए स्कूलों का भी दौरा किया।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-1.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <h4 class="text-left" style="font-weight: 700;">विश्व वन्यजीव दिवस:</h4>
                                                <p class="text-justify" style="font-weight: 500;">
                                                    इस वर्ष विश्व वन्यजीव दिवस का विषय "बिग कैट्स: द प्रीडेटर्स अंडर थ्रेट" था और बच्चों को यह संदेश देने के लिए, हमने 02 स्कूलों के 158 बच्चों को आमंत्रित किया और उनके साथ चिड़ियाघर में दिन बिताया और संदेश दिया वन्य जीवन और जैव विविधता का संरक्षण।
                                                </p>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="image">
                                                        <img src="{{asset('public/assets/images/wts-imgs/wildlife-week-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
