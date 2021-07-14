@extends('layouts.master')

@section('title','MMSJ | Animal Adoption')

@push('css')
    <style>
        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area">
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
                            <h2>Animal Adoption</h2>
                            <p><span>Procedure -></span> Any person/ Institution can adopt one or more animals after paying a fixed amount. Any animal can be adopted for the duration of one month, one quarter, half year, and full year or for any number of days as per the convenience. The amount payable depends upon species and duration for which the said animal is to be adopted. The tentative amount is calculated on the basis of expenditure incurred on the animal for feed, medicines and other requirements and is as under:-</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">SNo.</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Species</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Year</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Half Year</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Quarter</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Month</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Per Day</th>
                                                            </tr>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Group-A</th>
                                                    </tr>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">Tiger, White Tiger, Lion</td>
                                                        <td class="text-center">411000</td>
                                                        <td class="text-center">210000</td>
                                                        <td class="text-center">105100</td>
                                                        <td class="text-center">35000</td>
                                                        <td class="text-center">1151</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">Leopard</td>
                                                        <td class="text-center">165000</td>
                                                        <td class="text-center">82000</td>
                                                        <td class="text-center">41000</td>
                                                        <td class="text-center">13000</td>
                                                        <td class="text-center">501</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">110000</td>
                                                        <td class="text-center">51000</td>
                                                        <td class="text-center">27000</td>
                                                        <td class="text-center">9100</td>
                                                        <td class="text-center">301</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">Gaur</td>
                                                        <td class="text-center">300000</td>
                                                        <td class="text-center">150000</td>
                                                        <td class="text-center">75000</td>
                                                        <td class="text-center">25000</td>
                                                        <td class="text-center">1001</td>
                                                    </tr>

                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Group-B</th>
                                                    </tr>
                                                </thead>

                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">Thamin Deer</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">23000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">Sambar</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">Nilgai</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">Barasingha</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Group-C</th>
                                                    </tr>
                                                </thead>

                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">Chital</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">Black Buck</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">Chinkara</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">Hog Deer</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">05</th>
                                                        <td class="text-center">Barking deer</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">5100</td>
                                                        <td class="text-center">2100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">06</th>
                                                        <td class="text-center">Wild Boar</td>
                                                        <td class="text-center">54000</td>
                                                        <td class="text-center">27000</td>
                                                        <td class="text-center">13000</td>
                                                        <td class="text-center">5100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                        <div class="section-title">
                            <p>The Persons or Institution interested in supporting the above cause can apply for adoption in the enclosed form along with cheque/ Cash payable to M/S MADHYA PRADESH TIGER FOUNDATION SOCIETY, SATNA (A/C No. 527302010016760)  payable at Satna. The application form along with the adoption fee can be deposited to the office of Director, Maharaja Martand Singh Judeo White Tiger Safari & Zoo Mukundpur  on any working day during working hours ( 10.30 am to 5.30 pm) The adoptee will have to abide by the terms and conditions of ‘Adoption scheme.</p>
                        </div>
                        <div class="media-body">
                        <div class="widget" style="font-weight: 500;">
                            <h2 class="widget-title">Facilities to the adopters</h2>
                        </div>
                                    <ul style="text-align: justify;">
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>The amount payable is exempted from income tax under 80 G (5) of income tax act.</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>A certificate of adoption will be given to the concerned.</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>The name of the adopter with the period of adoption will be displayed outside the animal enclosure. It is applicable for annual, half yearly & Quarterly adoption.</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>In case the adoption is for a year. The name of the adopter by his/her consent will be displayed at the entry gates of the park.</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>Adopter can also gift an adopted animal to friends, parents or relatives and children.</li>
                                    </ul>
                                </div>
                                    <!-- </div> -->
                                </div>
                            {{-- </div> --}}
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
                            <h2>पशु गोद लेना</h2>
                            <p><span>प्रक्रिया -></span> कोई भी व्यक्ति / संस्था एक निश्चित राशि का भुगतान करने के बाद एक या अधिक जानवरों को अपना सकती है। किसी भी जानवर को सुविधा के अनुसार एक महीने, एक चौथाई, आधे साल या पूरे साल या इच्छानुसार कितने भी दिन की अवधि के लिए अपनाया जा सकता है। जिस जानवर को अपनाया जाना है, देय राशि उसकी  प्रजाति और गोद लिए जाने की अवधि पर निर्भर करती है । राशि की गणना पशु पर फ़ीड, दवाइयों और अन्य आवश्यकताओं के लिए किए गए खर्च के आधार पर की जाती है और निम्नानुसार है: -</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">जाति</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">सालाना</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">आधा वर्षीय</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">त्रिमासी</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">मासिक</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">प्रति दिन</th>
                                                            </tr>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">ग्रुप-A</th>
                                                    </tr>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">टाइगर, व्हाइट टाइगर, शेर</td>
                                                        <td class="text-center">411000</td>
                                                        <td class="text-center">210000</td>
                                                        <td class="text-center">105100</td>
                                                        <td class="text-center">35000</td>
                                                        <td class="text-center">1151</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">तेंदुए</td>
                                                        <td class="text-center">165000</td>
                                                        <td class="text-center">82000</td>
                                                        <td class="text-center">41000</td>
                                                        <td class="text-center">13000</td>
                                                        <td class="text-center">501</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">रीछ</td>
                                                        <td class="text-center">110000</td>
                                                        <td class="text-center">51000</td>
                                                        <td class="text-center">27000</td>
                                                        <td class="text-center">9100</td>
                                                        <td class="text-center">301</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">गौर</td>
                                                        <td class="text-center">300000</td>
                                                        <td class="text-center">150000</td>
                                                        <td class="text-center">75000</td>
                                                        <td class="text-center">25000</td>
                                                        <td class="text-center">1001</td>
                                                    </tr>

                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">ग्रुप-B</th>
                                                    </tr>
                                                </thead>

                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">थामिन हिरण</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">23000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">सांभर</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">नीलगाय</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">बारहसिंघा</td>
                                                        <td class="text-center">90000</td>
                                                        <td class="text-center">45000</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">7100</td>
                                                        <td class="text-center">251</td>
                                                    </tr>

                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">ग्रुप-C</th>
                                                    </tr>
                                                </thead>

                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">चीतल</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">ब्लैक बक</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">चिंकारा</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">हॉग हिरण</td>
                                                        <td class="text-center">36000</td>
                                                        <td class="text-center">18000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">3100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">05</th>
                                                        <td class="text-center">बार्किंग हिरण</td>
                                                        <td class="text-center">21000</td>
                                                        <td class="text-center">10000</td>
                                                        <td class="text-center">5100</td>
                                                        <td class="text-center">2100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">06</th>
                                                        <td class="text-center">जंगली सूअर</td>
                                                        <td class="text-center">54000</td>
                                                        <td class="text-center">27000</td>
                                                        <td class="text-center">13000</td>
                                                        <td class="text-center">5100</td>
                                                        <td class="text-center">101</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                        <div class="section-title">
                            <p>उपरोक्त कारण का समर्थन करने में रुचि रखने वाले व्यक्ति या संस्थान संलग्न रूप में गोद लेने के लिए आवेदन कर सकते हैं / चेक / नकद के लिए देय राशि के साथ एम / एस मधेय प्रधान परीक्षक सोसाइटी, एसएटीएनए (ए / सी नं। 527302010016760) सतना में देय है। गोद लेने की फीस के साथ आवेदन पत्र किसी भी कार्यदिवस में कार्यदिवस के दौरान महाराजा मार्तंड सिंह जूदेव व्हाइट टाइगर सफारी एंड ज़ू मुकुंदपुर में निदेशक के कार्यालय में जमा किया जा सकता है। और 'दत्तक ग्रहण योजना' की शर्तें।</p>
                        </div>
                        <div class="media-body">
                        <div class="widget" style="font-weight: 500;">
                            <h2 class="widget-title">गोद लेने वालों को सुविधाएं</h2>
                        </div>
                                    <ul style="text-align: justify;">
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>देय राशि को आयकर अधिनियम के 80 जी (5) के तहत आयकर से छूट दी गई है।</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>संबंधित को गोद लेने का प्रमाण पत्र दिया जाएगा।</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>गोद लेने की अवधि के साथ गोद लेने वाले का नाम पशु बाड़े के बाहर प्रदर्शित किया जाएगा। यह वार्षिक, अर्धवार्षिक और त्रैमासिक गोद लेने के लिए लागू है।</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>मामले में गोद लेने के एक वर्ष के लिए है। उसकी सहमति से गोद लेने वाले का नाम पार्क के प्रवेश द्वार पर प्रदर्शित किया जाएगा।</li>
                                        <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" style="margin-right: 5px;"/>एडॉप्टर दोस्तों, माता-पिता या रिश्तेदारों और बच्चों को एक अपनाया हुआ जानवर भी उपहार में दे सकते हैं।</li>
                                    </ul>
                                </div>
                                    <!-- </div> -->
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Remember End Here -->
    @endif

@endsection
