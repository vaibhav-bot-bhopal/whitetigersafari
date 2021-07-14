<!-- Footer Start Here -->
<footer>
    @if (session('locale') == 'en')
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title">ABOUT US</span></h2>
                        <ul>
                            <li>
                                <p class="text-justify">
                                    Maharaja Martand Singh Judeo White Tiger Safari andZoo is located in Mukundpur of Satna district of Rewa division.The main attraction at the zoo is the White Tiger Safari in which people get the chance to see the revered White Tigers. Along with the White Tiger the zoo also houses 40 different endangered species and 60 plus species of non endangered species within its premises.
                                </p>
                            </li>
                        </ul>
                    </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title text-center">USEFUL LINKS</span></h2>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mpfd.jpg')}}" alt=""><a href="https://www.mpforest.gov.in/" target="_blank"><p>Madhya Pradesh Forest Department</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mptfs.png')}}" alt=""><a href="http://www.mptigerfoundation.org/" target="_blank"><p>Madhya Pradesh Tiger Foundation</p></a></li>
                        </ul>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/ntca.jpg')}}" alt=""><a href="https://projecttiger.nic.in/" target="_blank"><p>National Tiger Conservation Authority</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/cza.jpg')}}" alt=""><a href="http://cza.nic.in/" target="_blank"><p>Central Zoo Authority</p></a></li>
                        </ul>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="widget text-center" style="font-weight: 500;">
                        <h2 class="widget-title">CONTACT US</span></h2>
                        <ul>
                            <li><p>Office of Director</p></li>
                            <li><p>Maharaja Martand Singh Judeo White Tiger Safari & Zoo Mukundpur</p></li>
                            <li><p>Tehsil - Amarpatan Satna (M.P) <br> Pin - 485778</p></li>
                            <li><p>For any query please call: <br> +91 83190 48432</p></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="widget">
                            <div class="copyright cpy">
                                <p style="margin-bottom: 0;">
                                    <a href="{{url('/')}}" target="_blank">Maharaja Martand Singh Judeo White Tiger Safari & Zoo, Mukundpur</a><br>
                                    <span><a href="https://blueoceantech.in/" target="_blank">Developed by - Blue Ocean Tech Solutions Pvt. Ltd.</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('locale') == 'hi')
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title">हमारे बारे में</span></h2>
                        <ul>
                            <li>
                                <p class="text-justify">
                                    महाराजा मार्तंड सिंह जूदेव व्हाइट टाइगर सफारी और चिड़ियाघर रीवा संभाग के सतना जिले के मुकुंदपुर में स्थित है। चिड़ियाघर में मुख्य आकर्षण व्हाइट टाइगर सफारी है जिसमें लोगों को श्रद्धेय व्हाइट टाइगर्स को देखने का मौका मिलता है। व्हाइट टाइगर के साथ चिड़ियाघर में 40 अलग-अलग लुप्तप्राय प्रजातियां और 60 से अधिक गैर-लुप्तप्राय प्रजातियां हैं।
                                </p>
                            </li>
                        </ul>
                    </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title text-center">उपयोगी वेबसाइट</span></h2>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mpfd.jpg')}}" alt=""><a href="https://www.mpforest.gov.in/" target="_blank"><p>मध्य प्रदेश फारेस्ट डिपार्टमेंट</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mptfs.png')}}" alt=""><a href="http://www.mptigerfoundation.org/" target="_blank"><p>मध्य प्रदेश टाइगर फाउंडेशन</p></a></li>
                        </ul>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/ntca.jpg')}}" alt=""><a href="https://projecttiger.nic.in/" target="_blank"><p>नेशनल टाइगर कंज़र्वेशन अथॉरिटी</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/cza.jpg')}}" alt=""><a href="http://cza.nic.in/" target="_blank"><p>सेंट्रल ज़ू अथॉरिटी</p></a></li>
                        </ul>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="widget text-center" style="font-weight: 500;">
                        <h2 class="widget-title">संपर्क करें</span></h2>
                        <ul>
                            <li><p>निदेशक कार्यालय</p></li>
                            <li><p>महाराजा मार्तंड सिंह जूदेव व्हाइट टाइगर सफारी और चिड़ियाघर मुकुंदपुर</p></li>
                            <li><p>तहसील - अमरपाटन सतना (म.प्र) <br> पिन – 485778</p></li>
                            <li><p>किसी भी प्रश्न के लिए कृपया कॉल करें: <br> +91 83190 48432</p></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="widget">
                            <div class="copyright cpy">
                                <p>
                                    <a href="{{url('/')}}" target="_blank">महाराजा मार्तंड सिंह जूदेव व्हाइट टाइगर सफारी और चिड़ियाघर, मुकुंदपुर</a><br>
                                    <span><a href="https://blueoceantech.in/" target="_blank">Developed by - Blue Ocean Tech Solutions Pvt. Ltd.</a></span>
                                </p>
                            </div>

                            {{-- <div class="last-update">
                                <span style="color: #000000;">Last Update On : </span>{{date("d-F-Y H:i", getlastmod())}}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</footer>
<!-- Footer End Here -->
