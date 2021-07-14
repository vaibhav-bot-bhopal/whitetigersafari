@extends('layouts.master')

@section('title','MMSJ | Contact-Us')

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
                <div class="breadcumb">
                    <h2>How to Get Here</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area End Here -->

    @if (session('locale') == 'en')
        <!-- Where We Are Start Here -->
        <div class="where-we-area gallery-open">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>Location</h2>
                        <p style="text-align: justify;"><span>The Mukundpur</span> white tiger safari is located in the Satna district of Rewa division.  Rewa is a city in the north-eastern part of Madhya Pradesh state in India. It is the administrative centre of Rewa District and Rewa Division. The city lies about 420 kilometers northeast of the state capital Bhopal and 130 kilometers south of the city of Allahabad. Rewa is connected to Allahabad via NH 27 and Sidhi, Satna, Maihar and Varanasi via NH-7. A famous temple of Maihar wali mata is located in the Maihar town of Rewa division. In nearby Sidhi district, a part of the erstwhile princely state of Rewa, and now a part of Rewa division, the world's first white tiger (Mohan), a mutant variant of the Bengal tiger, was caught and therefore a White tiger safari is established in the region. The total area is 100 Hec. Out of which  Zoo is in 75 Hec. and   Safari is in 25 Hac.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="map-area">
                    <div id="map" class="map-full" style="width:100%; height:390px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7265.29850494466!2d81.248!3d24.42825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39844363a177f035%3A0x415983b0f8ab0fc3!2sWhite%20Tiger%20Safari%20%26%20Zoo%2C%20Mukundpur%2C%20Rewa%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1611211692538!5m2!1sen!2sin" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.648951001709!2d81.2458224143109!3d24.428260468460717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDI1JzQxLjciTiA4McKwMTQnNTIuOCJF!5e0!3m2!1sen!2sin!4v1611210622016!5m2!1sen!2sin" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    </div>
                    <!-- <a href="#"><i class="fa fa-map"></i> Download Map</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/6.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                            <p>Maharaja Martand Singh Judeo White Tiger Safari & Zoo, Mukundpur</p>
                            <p>Tehsil - Amarpatan Satna (M.P) <br> Pin - 485778</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/7.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">Phone</h4>
                            <p>For any query please call: <br> +91 83190 48432</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/8.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">GPS Coordinates</h4>
                        <p>24° 25' 41.72"N , <br/>081°14'52.84"E</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Where We Are End Here -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Where We Are Start Here -->
        <div class="where-we-area gallery-open">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>लोकेशन</h2>
                        <p style="text-align: justify;"><span>मुकुंदपुर</span> सफेद बाघ सफारी रीवा संभाग के सतना जिले में स्थित है। रीवा भारत में मध्य प्रदेश राज्य के उत्तर-पूर्वी भाग का एक शहर है। यह रीवा जिला और रीवा संभाग का प्रशासनिक केंद्र है। यह शहर राज्य की राजधानी भोपाल से लगभग 420 किलोमीटर उत्तर पूर्व में और इलाहाबाद शहर से 130 किलोमीटर दक्षिण में स्थित है। रीवा NH 27 और सीधी, सतना, मैहर और वाराणसी से NH-7 के माध्यम से इलाहाबाद से जुड़ा हुआ है। मैहर वाली माता का प्रसिद्ध मंदिर रीवा संभाग के मैहर शहर में स्थित है। निकटवर्ती सीधी जिले में, जो पहले रीवा की पूर्ववर्ती रियासत का एक हिस्सा थी और अब रीवा संभाग का एक हिस्सा है , में  दुनिया का पहला सफेद बाघ (मोहन), पकड़ा गया था और इसलिए यहाँ एक सफेद बाघ सफारी स्थापित की गई है ।इसका  कुल क्षेत्रफल 100 हेक्टेयर है जिसमें से चिड़ियाघर 75 हेक्टेयर में और सफारी 25 हेक्टेयर में है।</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="map-area">
                    <div id="map" class="map-full" style="width:100%; height:390px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7265.29850494466!2d81.248!3d24.42825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39844363a177f035%3A0x415983b0f8ab0fc3!2sWhite%20Tiger%20Safari%20%26%20Zoo%2C%20Mukundpur%2C%20Rewa%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1611211692538!5m2!1sen!2sin" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.648951001709!2d81.2458224143109!3d24.428260468460717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDI1JzQxLjciTiA4McKwMTQnNTIuOCJF!5e0!3m2!1sen!2sin!4v1611210622016!5m2!1sen!2sin" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    </div>
                    <!-- <a href="#"><i class="fa fa-map"></i> Download Map</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/6.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                            <p>Maharaja Martand Singh Judeo White Tiger Safari & Zoo, Mukundpur</p>
                            <p>Tehsil - Amarpatan Satna (M.P) <br> Pin - 485778</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/7.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">Phone</h4>
                            <p>For any query please call: <br> +91 83190 48432</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                    <div class="media">
                        <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('public/assets/images/map/8.png')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">GPS Coordinates</h4>
                        <p>24° 25' 41.72"N , <br/>081°14'52.84"E</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Where We Are End Here -->
    @endif


<!-- Form Area Start Here -->
<!-- <div class="contact-form">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="contact">
            <form>
            <fieldset>
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your E-mail Address">
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group">
                    <textarea cols="40" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                </div>
                </div>
                <div class="col-sm-12 text-center">
                <div class="form-group">
                    <a href="#" class="btn-send">Send Message</a>
                </div>
                </div>
            </fieldset>
            </form>
        </div>
        </div>
    </div>
    </div>
</div> -->
<!-- Form Area End Here -->
@endsection
