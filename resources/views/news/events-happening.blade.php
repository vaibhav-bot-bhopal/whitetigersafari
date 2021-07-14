@extends('layouts.master')

@section('title','MMSJ | Events & Happenings')

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

        header .main-header ul li ul li a{
            font-weight: 600!important;
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
                            <h2>Events & Happenings</h2>
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

                                    <h3 class="text-center" style="font-weight: 700;">Important Events and Happenings</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">“Aao Bagh Banayen, Milkar Bagh Bachayyen”-:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                The Corbett foundation, Baherakhar Kanha Foundation and Madhya Pradesh Tiger Foundation jointly organized the campaign for creating awareness for tiger conservation with the people support under the theme “Aao Bagh Banayen, Milkar Bagh Bachayyen” . In this event a large tiger art was created which was coloured by the common people  by putting seal/stamp of different colours. In zoo the total 702 people participated in the event.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/bagh-banayen.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">International Tiger Day:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                This year on the occasion of international toger day, wild animal picture painting completion was organised for the kids from schools and orphanage. At the end of the competition the prizes, certificates, mementos and green calendars were distributed to the participants. At the end plantaion was also done n zoo.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-1.jpg')}}" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">Anubhooti Camp:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                The “Anubhooti” is an initiative of the forest department of Madhya Pradesh started in year 2014-15. which is organized throughout the state from 15th December- 15th   January every year. The objective of the programme is to sensitize the kids for nature conservation and create awareness regarding the importance of forests and wild animals in human lives. This year 880 kids from 04 ranges of three forest divisions visited our zoo under Anubhooti Programme.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">Workshop:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                A workshop was organized for the forest staff of the territorial division under the topic “ Wildlife crime, evidence collection, investigation, judicial procedure and wildlife rescue”
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2018-19</h2>
                                    </div>
                                    <h3 class="text-center" style="font-weight: 700;">Important Events and Happenings</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">International Yog Day:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                It is celebrated by zoo officials along with visitors in the zoo garden area to promote health and harmony with the nature.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/iyd-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">International Tiger Day:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                This year we celebrated International Tiger Day on ) 7th July 2018 in collaboration with MP Tiger Foundation Society Bhopal. We organized a wall Painting Competition for various categories of participants. In total 174 participants participated in the event and 69 wall panels were painted.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">Anubhooti Camp:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                The “Anubhooti” is the new initiative started by the forest department of Madhya Pradesh which is organized throughout the state from 15th December- 15th   January every year.  In this programme the kids from various schools are invited to visit the national parks/ tiger reserves /zoos to give them the feel (Anubhooti) of the nature and wildlife. It is done with an objective to sensitize the kids for nature conservation and create awareness regarding the importance of forests and wild animals in human lives. This year 1980 kids from 09 ranges of three forest divisions visited our zoo under Anubhooti Programme.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2017-18</h2>
                                    </div>
                                    <h3 class="text-center" style="font-weight: 700;">Important Events and Happenings</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">Anubhooti Camp:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                The “Anubhuti” is the new initiative started by the forest department of Madhya Pradesh which is organized throughout the state from 15th December- 15th   January every year.  In this programme the kids from various schools are invited to visit the national parks/ tiger reserves /zoos to give them the feel (Anubhuti) of the nature and wildlife. It is done with an objective to sensitize the kids for nature conservation and create awareness regarding the importance of forests and wild animals in human lives. This year 1255 kids from 06 ranges of two forest divisions visited our zoo under Anubhuti Programme.
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-3.jpg')}}" alt="">
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
                            <h2>इवेंट्स और हैप्पेनिंग्स</h2>
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
                                    <h3 class="text-center" style="font-weight: 700;">महत्वपूर्ण इवेंट्स और हैप्पेनिंग्स</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">“आओ बाघ बनायें, मिलकर बाघ बचाइए”-:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                कॉर्बेट फाउंडेशन, बहराखर कान्हा फाउंडेशन और मध्य प्रदेश टाइगर फाउंडेशन ने संयुक्त रूप से “आओ बाग बनायें, मिल्कर बाग बचायें” विषय के तहत लोगों के समर्थन के साथ बाघ संरक्षण के लिए जागरूकता पैदा करने के अभियान का आयोजन किया। इस आयोजन में एक विशाल बाघ कला का निर्माण किया गया था जिसे आम लोगों द्वारा विभिन्न रंगों की मुहर/मुद्रा लगाकर रंगा गया था। चिड़ियाघर में कुल 702 लोगों ने इस कार्यक्रम में भाग लिया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/bagh-banayen.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">अंतर्राष्ट्रीय बाघ दिवस:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                इस वर्ष अंतर्राष्ट्रीय एकजुटता दिवस के अवसर पर स्कूलों और अनाथालयों के बच्चों के लिए जंगली जानवरों की चित्र पेंटिंग समापन का आयोजन किया गया था। प्रतियोगिता के अंत में प्रतिभागियों को पुरस्कार, प्रमाण पत्र, स्मृति चिन्ह और ग्रीन कैलेंडर वितरित किए गए। अंत में चिड़ियाघर में पौधरोपण भी किया गया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-1.jpg')}}" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">अनुभूति कैंप:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                "अनुभूति" मध्य प्रदेश के वन विभाग की एक पहल है जो वर्ष 2014-15 में शुरू हुई थी। जो हर साल 15 दिसंबर से 15 जनवरी तक पूरे राज्य में आयोजित किया जाता है। कार्यक्रम का उद्देश्य बच्चों को प्रकृति संरक्षण के प्रति संवेदनशील बनाना और मानव जीवन में वनों और जंगली जानवरों के महत्व के बारे में जागरूकता पैदा करना है। इस वर्ष अनुभूति कार्यक्रम के तहत तीन वन प्रभागों के 04 रेंजों के 880 बच्चों ने हमारे चिड़ियाघर का दौरा किया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">कार्यशाला:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                प्रादेशिक प्रभाग के वन कर्मचारियों के लिए "वन्यजीव अपराध, साक्ष्य संग्रह, जांच, न्यायिक प्रक्रिया और वन्यजीव बचाव" विषय के तहत एक कार्यशाला का आयोजन किया गया।
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2018-19</h2>
                                    </div>
                                    <h3 class="text-center" style="font-weight: 700;">महत्वपूर्ण इवेंट्स और हैप्पेनिंग्स</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">अंतर्राष्ट्रीय योग दिवस:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                यह चिड़ियाघर के अधिकारियों द्वारा चिड़ियाघर उद्यान क्षेत्र में आगंतुकों के साथ स्वास्थ्य और प्रकृति के साथ सद्भाव को बढ़ावा देने के लिए मनाया जाता है।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/iyd-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">अंतर्राष्ट्रीय बाघ दिवस:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                इस वर्ष हमने 7 जुलाई 2018 को एमपी टाइगर फाउंडेशन सोसाइटी भोपाल के सहयोग से अंतर्राष्ट्रीय बाघ दिवस मनाया। हमने प्रतिभागियों की विभिन्न श्रेणियों के लिए दीवार पेंटिंग प्रतियोगिता आयोजित की। इस आयोजन में कुल 174 प्रतिभागियों ने भाग लिया और 69 दीवार पैनलों को चित्रित किया गया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/itd-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">अनुभूति कैंप:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                "अनुभूति" मध्य प्रदेश के वन विभाग द्वारा शुरू की गई नई पहल है जो हर साल 15 दिसंबर से 15 जनवरी तक पूरे राज्य में आयोजित की जाती है। इस कार्यक्रम में विभिन्न स्कूलों के बच्चों को प्रकृति और वन्य जीवन का अनुभव (अनुभूति) देने के लिए राष्ट्रीय उद्यानों / बाघ अभयारण्यों / चिड़ियाघरों में जाने के लिए आमंत्रित किया जाता है। यह बच्चों को प्रकृति संरक्षण के प्रति संवेदनशील बनाने और मानव जीवन में जंगलों और जंगली जानवरों के महत्व के बारे में जागरूकता पैदा करने के उद्देश्य से किया जाता है। इस वर्ष १९८० में तीन वन प्रभागों के ०९ रेंज के बच्चों ने अनुभूति कार्यक्रम के तहत हमारे चिड़ियाघर का दौरा किया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">2017-18</h2>
                                    </div>
                                    <h3 class="text-center" style="font-weight: 700;">महत्वपूर्ण इवेंट्स और हैप्पेनिंग्स</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">अनुभूति कैंप:</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                "अनुभूति" मध्य प्रदेश के वन विभाग द्वारा शुरू की गई नई पहल है जो हर साल 15 दिसंबर से 15 जनवरी तक पूरे राज्य में आयोजित की जाती है। इस कार्यक्रम में विभिन्न स्कूलों के बच्चों को प्रकृति और वन्य जीवन का अनुभव (अनुभूति) देने के लिए राष्ट्रीय उद्यानों / बाघ अभयारण्यों / चिड़ियाघरों में जाने के लिए आमंत्रित किया जाता है। यह बच्चों को प्रकृति संरक्षण के प्रति संवेदनशील बनाने और मानव जीवन में जंगलों और जंगली जानवरों के महत्व के बारे में जागरूकता पैदा करने के उद्देश्य से किया जाता है। अनुभूति कार्यक्रम के तहत इस वर्ष दो वन प्रभागों के 06 रेंज के 1255 बच्चों ने हमारे चिड़ियाघर का दौरा किया।
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/wts-imgs/anubhooti-3.jpg')}}" alt="">
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

@push('js')

@endpush
