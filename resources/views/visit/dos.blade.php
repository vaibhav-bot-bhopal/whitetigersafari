@extends('layouts.master')

@section('title',"MMSJ | Do(s) & Don't(s)")

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
                            <h2>Do(s) & Don't(s)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/gellary/DSC_0438.jpg')}}" alt="">
                            <img src="{{asset('public/assets/images/gellary/DSC_0416.jpg')}}" alt="" style="margin-top: 20px;">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="all-h2">Rules for Visitors:</h2>
                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>At the time of entry please carry update print out of your entry permit; also ensure that the QR code on your permit is not distorted as will be scanned for verification.</li>
                                        <li>This entry permit is issued to the individual and is non transferable.</li>
                                        <li>The entry permit has to be produced when asked by the duty staff.</li>
                                        <li>Please don’t get down from the vehicle, until advised by the park guide.</li>
                                        <li>To carry polythene, arms-ammunitions, explosives, pet animals and other prohibited articles inside the zoo premises is not permitted.</li>
                                        <li>Use of and to carry tobacco, alcohol and other toxicants and entering in intoxicated condition is prohibited inside the zoo premises.</li>
                                        <li>Littering is prohibited inside the zoo premises.</li>
                                        <li>Creating noise by the use of transistor, tape recorder or blowing horn or similar equipments is prohibited inside the zoo premises.</li>
                                        <li>Lifting of any forest produce, plants or animal article inside the zoo premises is prohibited.</li>
                                        <li>Teasing of wild animals, feeding them or chasing them is prohibited inside the zoo premises.</li>
                                        <li>Maintain silence and discipline during safari. Misconduct, indiscipline or shouting is prohibited inside the zoo premises.</li>
                                        <li>Follow the provisions of Wildlife (protection) Act, 1972, MP Wildlife (protection) Rules, 1974 and the Rules imposed by the local management.</li>
                                        <li>Before entering the zoo premises must read the information/ instructions displayed on the signage’s at the entry gate and follow them.</li>
                                        <li>No separate seat will be provided for children below 5 years in single seat permits.</li>
                                        <li>The entry, exit and visiting time is fixed. Visitors have to abide by the schedule (Time table) of the zoo.</li>
                                    </ol>

                                    <h2 class="all-h2">Terms & Conditions:</h2>
                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>The permit is issued to the individual and non-transferable.</li>
                                        <li>Indian Nationals must carry any one of the identity card (Driving License, Passport, PAN Card, Employee/ Student Card, Central/ State Government issued card, Aadhar Card and foreign Nationals must carry their Passports during the zoo visit. The same has to be produced on demand by the zoo officials.</li>
                                        <li>For add-on permits, first two tourists on whose names were permit were booked have to be present during park visit otherwise the permit will be considered cancelled.</li>
                                        <li>Tourists are visiting in the zoo premises at their own risk and Govt. of Madhya Pradesh or its employees shall not be responsible for any loss of life or of property or disability resulting from any accident or incident within the zoo premises.</li>
                                        <li>Any disputes arising out of online booking shall be subject to the jurisdiction of State of Madhya Pradesh.</li>
                                        <li>Please ensure that you and the kids a companying you abide by the rules. The safety of your kids in your responsibility.</li>
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
                            <h2>क्या करें और क्या नहीं</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/gellary/DSC_0438.jpg')}}" alt="">
                            <img src="{{asset('public/assets/images/gellary/DSC_0416.jpg')}}" alt="" style="margin-top: 20px;">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="all-h2">पर्यटकों के लिए नियम:</h2>
                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>प्रवेश के समय कृपया अपने प्रवेश परमिट का अपडेट प्रिंट ले लें; यह भी सुनिश्चित करें कि आपके परमिट पर क्यूआर कोड विकृत नहीं है क्योंकि सत्यापन के लिए स्कैन किया जाएगा।</li>
                                        <li>यह प्रविष्टि परमिट व्यक्ति को जारी किया जाता है और गैर हस्तांतरणीय होता है।</li>
                                        <li>ड्यूटी कर्मचारियों द्वारा पूछे जाने पर प्रवेश परमिट दिखाना अनिवार्य है।</li>
                                        <li>कृपया पार्क गाइड द्वारा सलाह दिए जाने तक, वाहन से नीचे न उतरें।</li>
                                        <li>चिड़ियाघर परिसर के अंदर पॉलिथीन, हथियार-गोला-बारूद, विस्फोटक, पालतू जानवर और अन्य प्रतिबंधित चीजें ले जाने की अनुमति नहीं है।</li>
                                        <li>तंबाकू, शराब और अन्य नशीले पदार्थों का उपयोग और ले जाना तथा नशे की हालत में प्रवेश करना चिड़ियाघर परिसर के अंदर निषिद्ध है।</li>
                                        <li>चिड़ियाघर परिसर के अंदर कचरा फेंकना प्रतिबंधित है।</li>
                                        <li>ट्रांजिस्टर, टेप रिकॉर्डर या हॉर्न या इसी तरह के उपकरणों के उपयोग से शोर पैदा करना चिड़ियाघर परिसर के अंदर निषिद्ध है।</li>
                                        <li>चिड़ियाघर परिसर के अंदर किसी भी वन उपज, पौधों या जानवरों को उठाना प्रतिबंधित है।</li>
                                        <li>जंगली जानवरों को चिढ़ाना, उन्हें खिलाना या उनका पीछा करना चिड़ियाघर परिसर के अंदर निषिद्ध है।</li>
                                        <li>सफारी के दौरान मौन और अनुशासन बनाए रखें। चिड़ियाघर परिसर के अंदर कदाचार, अनुशासनहीनता या चिल्लाना प्रतिबंधित है।</li>
                                        <li>वन्यजीव (संरक्षण) अधिनियम, 1972, एमपी वन्यजीव (संरक्षण) नियम, 1974 और स्थानीय प्रबंधन द्वारा लागू नियमों के प्रावधानों का पालन करें।</li>
                                        <li>चिड़ियाघर परिसर में प्रवेश करने से पहले, प्रवेश द्वार पर साइनेज पर प्रदर्शित सूचना / निर्देशों को अवश्य पढ़ें और उनका पालन करें।</li>
                                        <li>सिंगल सीट परमिट के भीतर 5 साल से कम उम्र के बच्चों के लिए कोई अलग सीट नहीं दी जाएगी।</li>
                                        <li>प्रवेश, निकास और आने का समय तय है। पर्यटकों को चिड़ियाघर के शेड्यूल (टाइम टेबल) का पालन करना होता है।</li>
                                    </ol>

                                    <h2 class="all-h2">नियम एवं शर्तें:</h2>
                                    <ol class="text-justify" style="font-weight: 500;">
                                        <li>परमिट व्यक्ति को जारी किया जाता है और गैर-हस्तांतरणीय होता है।</li>
                                        <li>भारतीय नागरिकों को पहचान पत्र (ड्राइविंग लाइसेंस, पासपोर्ट, पैन कार्ड, कर्मचारी / छात्र कार्ड, केंद्र / राज्य सरकार द्वारा जारी कार्ड, आधार कार्ड) में से किसी एक को ले जाना चाहिए और विदेशी नागरिकों को चिड़ियाघर यात्रा के दौरान अपना पासपोर्ट ले जाना चाहिए। चिड़ियाघर के अधिकारियों द्वारा मांग के आधार पर इसका उत्पादन किया जाना है।</li>
                                        <li>ऐड-ऑन परमिट के लिए, पहले दो पर्यटक जिनके नाम पर परमिट बुक किए गए थे, उन्हें पार्क की यात्रा के दौरान उपस्थित होना चाहिए अन्यथा परमिट रद्द माना जाएगा।</li>
                                        <li>चिड़ियाघर परिसर में आने वाले पर्यटक अपने स्वयं के जोखिम पर हैं और मध्य प्रदेश सरकार या उसके कर्मचारी चिड़ियाघर परिसर के भीतर किसी भी दुर्घटना या घटना के कारण किसी भी तरह के जान-माल या विकलांगता के नुकसान के लिए जिम्मेदार नहीं होंगे।</li>
                                        <li>ऑनलाइन बुकिंग से उत्पन्न कोई भी विवाद मध्य प्रदेश राज्य के अधिकार क्षेत्र के अधीन होगा।</li>
                                        <li>कृपया सुनिश्चित करें कि आप और आपके साथ आने वाले बच्चे नियमों का पालन करते हैं। आपके बच्चों की सुरक्षा आपकी जिम्मेदारी है।</li>
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
