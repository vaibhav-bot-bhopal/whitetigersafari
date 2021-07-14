@extends('layouts.master')

@section('title','MMSJ White Tiger Safari and Zoo')

@push('css')
    <style>
        .our-video-content-area .latest-news .single-news-area {
            width: 100%;
            min-height: 280px;
            margin-bottom: 15px;
            border: 4px solid #e6dccf;
        }

        .media-object {
            width: 100%;
            height: 240px;
            display: block;
        }

        header .main-header ul li.active a{
            color: #ffffff!important;
        }

        header .main-header ul li a{
            color: #dcd794!important;
        }

        .our-video-content-area .latest-news .section-title h2{
            margin: 30px 0 30px 0;
        }

        header .header-top .header-top-right{
            font-weight: 600;
            letter-spacing: 0.5px;
        }
    </style>
@endpush

@section('content')
<!-- Main Content Area Start Here -->

    @if (session('locale') == 'en')
        <!-- Slider Area Start Here -->
        <div class="slider-area">
            <div class="slide-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">Maharaja Martand Singh Judeo
                                <br>White Tiger Safari & Zoo
                            </h2>
                            <p data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">Mukundpur, Satna</p>
                            <a href="{{route('mukundpur.vision')}}" data-wow-delay="0.3s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 data-wow-delay="0.5s" class="span3 wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">Maharaja Martand Singh Judeo
                                <br>White Tiger Safari & Zoo
                            </h2>
                            <p>Mukundpur, Satna</p>
                            <a href="{{route('mukundpur.vision')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-dot">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="slide-dots">
                            <a class="slide-dots-next"></a>
                            <a class="slide-dots-prev"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->

        <!-- Home Services Start Here -->
        <div class="home-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>Special Attractions</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/leopards.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="{{route('mukundpur.special-attraction')}}">Check our best attractions</a></h4>
                                        <div class="services-botton">
                                            <a href="{{route('mukundpur.special-attraction')}}">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>Animal Adoption</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/t1.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="{{route('mukundpur.adoption')}}">Adopt Animal of your choice</a></h4>
                                        <div class="services-botton">
                                            <a href="{{route('mukundpur.adoption')}}">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>News Corner</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/6.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="{{route('mukundpur.newses')}}">Get the latest happenings</a></h4>
                                        <div class="services-botton">
                                            <a href="{{route('mukundpur.newses')}}">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>Gallery</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/crimson-rose.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="{{route('mukundpur.gallery')}}">Our Zoo through the lens</a></h4>
                                        <div class="services-botton">
                                            <a href="{{route('mukundpur.gallery')}}">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Services End Here -->

        <!-- Plan Your Visit Start Here -->
        <div class="home-plan-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Plan Your Visit</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="{{route('mukundpur.timings')}}"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="{{route('mukundpur.timings')}}">Visiting Hours</a></h3>
                                <p>We are open from morning <br>till evening.</p>
                                <div class="read-more">
                                    <a href="{{route('mukundpur.timings')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="{{route('mukundpur.ticket')}}"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="{{route('mukundpur.ticket')}}">Tickets and Pricing </a></h3>
                                <p>Check out the fees through walk, cycle, golf cart or Zoo Safari.</p>
                                <div class="read-more">
                                    <a href="{{route('mukundpur.ticket')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="#"><i class="flaticon-animal-1"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="#">Zoo Map</a></h3>
                                <p>Explore our map and search <br>for animals.</p>
                                <div class="read-more">
                                    <a href="{{url('/construction')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="{{route('mukundpur.events-happenings')}}"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="{{route('mukundpur.events-happenings')}}">Events and Happenings</a></h3>
                                <p>Special events conducted on various days to experience wildlife.</p>
                                <div class="read-more">
                                    <a href="{{route('mukundpur.events-happenings')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plan Your Visit End Here -->

        <!-- About Us Area Start Here -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2>Experience the wonders <br>of the natural world.</h2>
                            <ul>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Get to see the Majestic White Tiger in White Tiger Safari</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> 40+ individuals of endangered & 60+ individuals of non-endangered species</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> Free Living as well as Captive Animals</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> 90 Plus species of Birds and 30 plus species of Reptiles</li>
                            </ul>
                            {{-- <div class="about-botton">
                                <ul>
                                    <li><a href="faq.html">Check our FAQ’s</a></li>
                                    <li><a href="rules.html">Check our Zoo Rules</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End Here -->

        <!-- Our Animal Start Here -->
        <div class="our-animal-area">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>Our Animals</h2>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                        <div class="total-area">
                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/COMMON-LEOPARD.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Jungle Gorilla</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/CRIMSON-ROSE.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Pitagora Snake</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0449.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Alligator</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0538.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Elephant</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/Recoverd.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Meerkat</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/TICKELLS.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Jungle Gorilla</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0605.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="single-animal.html">Pitagora Snake</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0449.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Alligator</a></h4> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Animal End Here -->

        <!-- Our Latest Event Area Start Here -->
        <div class="our-video-content-area">
            <div class="container">

                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Latest Events</h2>
                        </div>
                    </div>


                    @forelse ($eventsen as $item)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="single-news-area">
                                <div class="media">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('public/storage/eng_event/'.$item->image)}}" alt="Generic placeholder image">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a style="font-size: 22px!important;">{!! Str::limit($item->title, 40, '...') !!}</a></h4>
                                        <p>{!! Str::limit($item->discription, 150, '...') !!}</p>
                                        <div class="read-more">
                                            <a href="{{route('mukundpur.event-details', $item->slug)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12 p-0">
                            <div class="card h-100">
                                <div class="p-2 text-center">
                                    <h2 style="font-weight: 600">No Events Found !!</h2>
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @endforelse

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="all-news">
                            <a href="{{route('mukundpur.events')}}">Check All Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Latest Event Area End Here -->

        <!-- Our Latest News Area Start Here -->
        <div class="our-video-content-area">
            <div class="container">

                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Latest News</h2>
                        </div>
                    </div>


                    @forelse ($dataen as $item)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="single-news-area">
                                <div class="media">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('public/storage/eng_news/'.$item->news_image)}}" alt="Generic placeholder image">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a style="font-size: 22px!important;">{!! Str::limit($item->news_title, 40, '...') !!}</a></h4>
                                        <p>{!! Str::limit($item->news_discription, 150, '...') !!}</p>
                                        <div class="read-more">
                                            <a href="{{route('mukundpur.news-details', $item->news_slug)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12 p-0">
                            <div class="card h-100">
                                <div class="p-2 text-center">
                                    <h2 style="font-weight: 600">No News Found !!</h2>
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @endforelse

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="all-news">
                            <a href="{{route('mukundpur.newses')}}">Check All News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Latest News Area End Here -->

        <!-- Zooks Contact Start Here -->
        <div class="zooks-connact-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Let's Connect</h2>
                        </div>
                        <div class="zooks-social-connect-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <p>Tag your photos & videos with #MukundpurZoo and share your Zoo experiences with our online community & tourists!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Zooks Contact End Here -->

        <!-- Twiiter Post Area Start Here -->
        <div class="twitter-post-area">
            <div class="container-fluid acurate">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/DSC_0438.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/TICKELLS-BLUE-FLYCATCHER.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/vaccination.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/DSC_0385.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/YELLOW-PANSY.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Twiiter Post Area End Here -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Slider Area Start Here -->
        <div class="slider-area">
            <div class="slide-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">महाराजा मार्तंड सिंह जूदेव
                                <br>व्हाइट टाइगर सफारी और चिड़ियाघर
                            </h2>
                            <p data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">मुकुंदपुर, सतना</p>
                            <a href="{{route('mukundpur.vision')}}" data-wow-delay="0.3s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">और अधिक जानें</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 data-wow-delay="0.5s" class="span3 wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">महाराजा मार्तंड सिंह जूदेव
                                <br>व्हाइट टाइगर सफारी और चिड़ियाघर
                            </h2>
                            <p>मुकुंदपुर, सतना</p>
                            <a href="{{route('mukundpur.vision')}}">और अधिक जानें</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-dot">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="slide-dots">
                            <a class="slide-dots-next"></a>
                            <a class="slide-dots-prev"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->

        <!-- Home Services Start Here -->
        <div class="home-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>विशेष आकर्षण</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/leopards.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="#">हमारे सर्वोत्तम आकर्षण की जाँच करें</a></h4>
                                        <div class="services-botton">
                                            <a href="#">और अधिक जानें</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>पशु पालन</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/t1.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="#">अपनी पसंद के पशु को अपनाएं</a></h4>
                                        <div class="services-botton">
                                            <a href="#">और अधिक जानें</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>न्यूज कॉर्नर</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/6.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="#">नवीनतम घटनाओं को प्राप्त करें</a></h4>
                                        <div class="services-botton">
                                            <a href="#">और अधिक जानें</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <h2>गैलरी</h2>
                            <div class="services-image">
                                <a href="#"><img src="{{asset('public/assets/images/services/crimson-rose.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="services-details">
                                        <h4><a href="{{url('home/gallery')}}">लेंस के माध्यम से हमारा चिड़ियाघर</a></h4>
                                        <div class="services-botton">
                                            <a href="{{url('home/gallery')}}">और अधिक जानें</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Services End Here -->

        <!-- Plan Your Visit Start Here -->
        <div class="home-plan-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2 style="font-size: 44px; font-weight: 500;">अपने भ्रमण की योजना बनाएं</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="{{route('mukundpur.timings')}}">मिलने का समय</a></h3>
                                <p>हम सुबह से शाम तक <br>खुले रहते हैं।</p>
                                <div class="read-more">
                                    <a href="{{route('mukundpur.timings')}}">अधिक पढ़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="{{route('mukundpur.ticket')}}">टिकट और मूल्य निर्धारण </a></h3>
                                <p>वॉक, साइकिल, गोल्फ कार्ट या ज़ू सफारी के माध्यम से फीस की जाँच करें।</p>
                                <div class="read-more">
                                    <a href="{{route('mukundpur.ticket')}}">अधिक पढ़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="#"><i class="flaticon-animal-1"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="#">चिड़ियाघर का नक्शा</a></h3>
                                <p>हमारे नक्शे को देखें और जानवरों <br>को खोजें।</p>
                                <div class="read-more">
                                    <a href="{{url('/construction')}}">अधिक पढ़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-plan">
                            <div class="plan-icon">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            </div>
                            <div class="plan-details">
                                <h3><a href="#">घटनाएँ और खुशियाँ</a></h3>
                                <p>वन्यजीवों का अनुभव करने के लिए विभिन्न दिनों में विशेष कार्यक्रम आयोजित किए जाते हैं।</p>
                                <div class="read-more">
                                    <a href="{{url('/construction')}}">अधिक पढ़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plan Your Visit End Here -->

        <!-- About Us Area Start Here -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2>प्राकृतिक दुनिया के चमत्कार का अनुभव करें।</h2>
                            <ul>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> व्हाइट टाइगर सफारी में राजसी सफेद बाघ को देखने के लिए जाओ</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> लुप्तप्राय के 40+ व्यक्तियों और गैर-लुप्तप्राय प्रजातियों के 60+ व्यक्ति</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> फ्री रहने के साथ-साथ कैप्टिव एनिमल</li>
                                <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> पक्षियों की 90 प्लस प्रजातियां और सरीसृप की 30 से अधिक प्रजातियां</li>
                            </ul>
                            {{-- <div class="about-botton">
                                <ul>
                                    <li><a href="faq.html">Check our FAQ’s</a></li>
                                    <li><a href="rules.html">Check our Zoo Rules</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End Here -->

        <!-- Our Animal Start Here -->
        <div class="our-animal-area">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>हमारे पशु</h2>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                        <div class="total-area">
                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/COMMON-LEOPARD.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Jungle Gorilla</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/CRIMSON-ROSE.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Pitagora Snake</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0449.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Alligator</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0538.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Elephant</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/Recoverd.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Meerkat</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/TICKELLS.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Jungle Gorilla</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0605.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="single-animal.html">Pitagora Snake</a></h4> -->
                            </div>

                            <div class="singla-animal">
                                <div class="image">
                                    <a href="#"><img src="{{asset('public/assets/images/animal/DSC_0449.jpg')}}" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="#">विस्तृत जानकारी देखें</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4><a href="#">Alligator</a></h4> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Animal End Here -->

        <!-- Our Latest Event Area Start Here -->
        <div class="our-video-content-area">
            <div class="container">

                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>लेटेस्ट इवेंट</h2>
                        </div>
                    </div>

                    @foreach ($eventshi as $item)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="single-news-area">
                                <div class="media">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('public/storage/hin_event/'.$item->image)}}" alt="Generic placeholder image">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a style="font-size: 22px!important;">{!! Str::limit($item->title, 40, '...') !!}</a></h4>
                                        <p>{!! Str::limit($item->discription, 150, '...') !!}</p>
                                        <div class="read-more">
                                            <a href="{{route('mukundpur.event-details', $item->slug)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="all-news">
                            <a href="{{route('mukundpur.events')}}">सभी इवेंट्स देखें</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Latest Event Area End Here -->

        <!-- Our Latest News Area Start Here -->
        <div class="our-video-content-area">
            <div class="container">

                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>लेटेस्ट न्यूज़</h2>
                        </div>
                    </div>

                    @foreach ($datahi as $item)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="single-news-area">
                                <div class="media">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('public/storage/hin_news/'.$item->news_image)}}" alt="Generic placeholder image">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a style="font-size: 22px!important;">{!! Str::limit($item->news_title, 40, '...') !!}</a></h4>
                                        <p>{!! Str::limit($item->news_discription, 150, '...') !!}</p>
                                        <div class="read-more">
                                            <a href="{{route('mukundpur.news-details', $item->news_slug)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="all-news">
                            <a href="{{route('mukundpur.newses')}}">सभी समाचार देखें</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Latest News Area End Here -->

        <!-- Zooks Contact Start Here -->
        <div class="zooks-connact-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>कनेक्ट करते हैं</h2>
                        </div>
                        <div class="zooks-social-connect-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <p>#MukundpurZoo के साथ अपनी तस्वीरों और वीडियो को टैग करें और अपने चिड़ियाघर के अनुभवों को हमारे ऑनलाइन समुदाय और पर्यटकों के साथ साझा करें!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Zooks Contact End Here -->

        <!-- Twiiter Post Area Start Here -->
        <div class="twitter-post-area">
            <div class="container-fluid acurate">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/DSC_0438.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/TICKELLS-BLUE-FLYCATCHER.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/vaccination.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/DSC_0385.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-post">
                            <a><img src="{{asset('public/assets/images/post/YELLOW-PANSY.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Twiiter Post Area End Here -->
    @endif
<!-- Main Content Area End Here -->
@endsection
