@extends('layouts.master')

@section('title','MMSJ White Tiger Safari and Zoo')

@push('css')
    <style>
        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600!important;
        }

        .single-events-area .page-title {
            border-bottom: 2px solid #f4f4f4;
            display: block;
            width: 100%;
            margin: 50px 0 26px;
        }

        .single-events-area .page-title h2 {
            color: #385a57;
            font-family: 'Lato', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0 0 10px;
        }

        .single-events-area .events-area {
            padding: 0;
        }

        .single-events-area .events-area .images a img {
            width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .single-events-area .events-area .images {
            margin-bottom: 30px;
        }

        .single-events-area .events-area .images {
            margin-bottom: 30px;
        }

        .single-events-area .events-area .events-details h3 {
            font-family: 'Lato', sans-serif;
            margin-bottom: 20px;
        }

        .single-events-area .events-area .events-details h3 a {
            color: #385a57;
            font-weight: 400;
            font-size: 25px;
        }

        .single-events-area .events-area .events-details .events-informations {
            border-bottom: 1px solid #dddddd;
            overflow: hidden;
            padding-bottom: 40px;
        }

        .single-events-area .events-area .events-details .events-informations ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .single-events-area .events-area .events-details .events-informations ul li {
            color: #707070;
            width: 47%;
            float: left;
            margin-right: 15px;
        }

        .single-events-area .events-area .events-text {
            padding: 10px 0;
        }

        .single-events-area .events-area .events-text p {
            color: #707070;
            text-align: justify;
        }

        p {
            margin: 0 0 26px;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area">
    </div>
    <!-- Breadcumb Area End Here -->

    <!-- Main Content Area Start Here -->

    @if (session('locale') == 'en')

        <!-- Single Events Area Start Here -->
        <div class="single-events-area thrre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                        <div class="page-title fouur">
                        <h2>Latest News</h2>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                        <div class="events-area">
                            <div class="images">
                                <a><img src="{{asset('public/storage/eng_news/'.$detailen->news_image)}}" alt=""></a>
                            </div>

                            <div class="events-details">
                                <h3><a>{{$detailen->news_title}}</a></h3>
                                <div class="events-informations">
                                    <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>  {{date('d-M-Y', strtotime($detailen->news_date))}}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="events-text">
                                <p>
                                    {!! $detailen->news_discription !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Events Area End Here -->

    @endif

    @if (session('locale') == 'hi')

        <!-- Single Events Area Start Here -->
        <div class="single-events-area thrre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                        <div class="page-title fouur">
                        <h2>ताजा खबर</h2>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                        <div class="events-area">
                            <div class="images">
                                <a><img src="{{asset('public/storage/hin_news/'.$detailhi->news_image)}}" alt=""></a>
                            </div>

                            <div class="events-details">
                                <h3><a>{{$detailhi->news_title}}</a></h3>
                                <div class="events-informations">
                                    <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>  {{date('d-M-Y', strtotime($detailhi->news_date))}}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="events-text">
                                <p>
                                    {!! $detailhi->news_discription !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Events Area End Here -->

    @endif
    <!-- Main Content Area End Here -->
@endsection
