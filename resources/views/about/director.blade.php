@extends('layouts.master')

@section('title','MMSJ | Directors-Desk')

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
                            <h2>Director's Desk</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/director.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-justify" style="font-weight: 500;">
                                        The Maharaja Martand Singh Judev White Tiger Safari and Zoo Mukundpur Satna was established with an objective of creating awareness among the common people for conservation of wildlife, give the rewarding experience to the visitors about the wildlife and provide a place for wild animal rescue in this region.
                                        The zoo management has been working with a goal to fulfill the objectives. Every year we do various activities which include various educational and awareness activities with the school kids during important days/weeks like World Environment Day, Wildlife Week, Exibition in Prayagraj Kumbh Mela, International Yoga Day, International Tiger Day and Anubhooti Eco Camp etc.
                                        Additional activities are Prabhat feri, painting, quiz, questionnaire, games, general discussion, interaction with zoo staff and zoo visit and many more.
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        Since this zoo is in the natural forest area we receive lot of leaf litter and other fallen plant materials. To utilize this waste in an effective way, the vermi compost and green compost pits have been made. These pits are not only helping in keeping the premises clean but also providing the bio manure for the newly developed nursery of 45 beds.
                                        This nursery is fulfilling the demand of various plants which are needed for the beautification of the zoo premises and to improve the bio diversity of the area.
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        The number of visitors has increased and on special days the number goes very high. The grassland has also been developed inside the zoo boundary to supply the green fodder to the herbivores housed in the Zoo. To run the zoo efficiently the trained human resources are required therefore we conducted in house training programmes as well as our team members attended other training courses conducted at different places by other zoos/institutes.
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        We are in process of developing a new website for our establishment, to connect better with our tourists and general public at large. However sometimes a good task needs more time to execute, so we made the website live as of now, with couple of functional pages, while the other pages are in development. Pretty soon you will be able to glimpse the full website with all functional pages.
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        Thank you for your patience !!
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
                            <h2>डायरेक्टर का सन्देश</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/director.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-justify" style="font-weight: 500;">
                                        महाराजा मार्तंड सिंह जूदेव व्हाइट टाइगर सफारी और चिड़ियाघर मुकुंदपुर सतना को वन्यजीवों के संरक्षण के लिए आम लोगों में जागरूकता पैदा करने के उद्देश्य से स्थापित किया गया था, जो आगंतुकों को वन्यजीवों के बारे में अतुलनीय अनुभव देते हैं और इस क्षेत्र में वन्यजीव के लिए एक संरक्षित स्थान प्रदान करते हैं।
                                        चिड़ियाघर प्रबंधन उसके उद्देश्यों को पूरा करने के लिए एक लक्ष्य के साथ काम कर रहा है। हर साल हम विभिन्न गतिविधियाँ करते हैं, जिनमें महत्वपूर्ण दिन / सप्ताह के दौरान स्कूली बच्चों के साथ विभिन्न शैक्षिक और जागरूकता गतिविधियाँ शामिल होती हैं, जैसे विश्व पर्यावरण दिवस, वन्यजीव सप्ताह, प्रयागराज कुंभ मेले में प्रदर्शन, अंतर्राष्ट्रीय योग दिवस, अंतर्राष्ट्रीय बाघ दिवस और अनुभव पर्यावरण कार्यक्रम आदि।
                                        इसके अतिरिक्त कुछ अन्य गतिविधियाँ भी संचालित की जाती हैं जैसे  चित्रकला प्रतियोगिता , प्रश्नोत्तरी, प्रश्नावली, खेल, सामान्य चर्चा, चिड़ियाघर के कर्मचारियों के साथ बातचीत और चिड़ियाघर की यात्रा इत्यादि।
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        चूंकि यह चिड़ियाघर प्राकृतिक वन क्षेत्र में है, इसलिए हमें सूखी पत्ती और अन्य पौधों की बहुत सारी सामग्री प्राप्त होती है। इस कचरे को एक प्रभावी तरीके से उपयोग करने के लिए, वर्मी कम्पोस्ट और हरी खाद के गड्ढे बनाए गए हैं। ये गड्ढे न केवल परिसर को साफ रखने में मदद कर रहे हैं बल्कि 45 बेड की नई विकसित नर्सरी के लिए जैव खाद भी उपलब्ध करा रहे हैं।
                                        यह नर्सरी विभिन्न पौधों की मांग को पूरा कर रही है जो चिड़ियाघर परिसर के सौंदर्यीकरण और क्षेत्र की जैव विविधता में सुधार के लिए आवश्यक हैं।
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        साल दर साल आगंतुकों की संख्या में वृद्धि हुई है और विशेष दिनों में यह संख्या बहुत अधिक हो जाती है। चिड़ियाघर में जड़ी-बूटियों को हरा चारा सप्लाई करने के लिए चिड़ियाघर की सीमा के अंदर चारागाह भी विकसित किया गया है। चिड़ियाघर को कुशलतापूर्वक चलाने के लिए प्रशिक्षित मानव संसाधनों की आवश्यकता होती है इसलिए हम घर प्रशिक्षण कार्यक्रमों में आयोजित किए जाते हैं और साथ ही साथ हमारी टीम के सदस्य अन्य चिड़ियाघरों / संस्थानों द्वारा विभिन्न स्थानों पर आयोजित अन्य प्रशिक्षण पाठ्यक्रमों में भाग लेते हैं।
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        हम अपनी स्थापना के लिए एक नई वेबसाइट विकसित करने की प्रक्रिया में हैं, ताकि हमारे पर्यटकों और आम जनता के साथ बेहतर जुड़ सकें। हालाँकि कभी-कभी किसी अच्छे कार्य को निष्पादित करने के लिए अधिक समय की आवश्यकता होती है, इसलिए हमने वेबसाइट के  कुछ पृष्ठ अभी विकास में हैं। बहुत जल्द आप सभी कार्यात्मक पृष्ठों के साथ पूरी वेबसाइट को देख पाएंगे।
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        आपके धैर्य के लिए धन्यवाद !!
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
