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

        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600!important;
        }

        .our-video-content-area .latest-news .section-title h2{
            margin: 30px 0 30px 0;
        }

        /* Pagination Style */
        .next-prev-button {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #ededed;
        }

        ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }

        .next-prev-button ul {
            text-align: center;
        }

        .next-prev-button ul li {
            display: inline-block;
        }

        .next-prev-button ul li a {
            color: #a09833;
            display: inline-block;
            font-weight: 600;
            padding: 10px 20px;
            position: relative;
            text-transform: uppercase;
            top: 40%;
            border: 1px solid #a09833;
            border-radius: 20px;
            transition: all .5s;
        }

        .next-prev-button ul li a:hover {
            background: #a09833;
            color: #ffffff;
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

        <!-- Our Video Content Area Start Here -->
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
                                            <a href="{{route('mukundpur.news-details', $item->news_slug)}}">Read Article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12 pb-4">
                            <div class="card h-100">
                                <div class="p-2 text-center">
                                    <h2 style="font-weight: 600">No News Found !!</h2>
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @endforelse

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="next-prev-button">
                            @if ($dataen->lastPage() > 1)
                                <ul>

                                    @if ($dataen->onFirstPage())
                                        <li><a class="{{ ($dataen->currentPage() == 1) ? 'disabled' : '' }}"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                                    @else
                                        <li><a href="{{$dataen->previousPageUrl()}}"><span class="fa fa-long-arrow-left"></span>Prev</a></li>
                                    @endif

                                    @for ($i = 1; $i <= $dataen->lastPage(); $i++)
                                        <li>
                                            <a class="{{ ($dataen->currentPage() == $i) ? ' active' : '' }}" href="{{ $dataen->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($dataen->hasMorePages())
                                        <li><a class="{{ ($dataen->currentPage() == $dataen->lastPage()) ? ' disabled' : '' }}" href="{{$dataen->nextPageUrl()}}"><span class="fa fa-long-arrow-right"></span> Next</a></li>
                                    @else
                                        <li><a><span class="fa fa-long-arrow-right"></span>Next</a></li>
                                    @endif

                                </ul>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Our Video Content Area End Here -->

    @endif

    @if (session('locale') == 'hi')

        <!-- Our Video Content Area Start Here -->
        <div class="our-video-content-area">
            <div class="container">

                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>लेटेस्ट न्यूज़</h2>
                        </div>
                    </div>

                    @forelse ($datahi as $item)
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
                                            <a href="{{route('mukundpur.news-details', $item->news_slug)}}">Read Article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12 pb-4">
                            <div class="card h-100">
                                <div class="p-2 text-center">
                                    <h2>No Post Found.</h2>
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @endforelse

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="next-prev-button">
                            @if ($dataen->lastPage() > 1)
                                <ul>

                                    @if ($dataen->onFirstPage())
                                        <li><a class="{{ ($dataen->currentPage() == 1) ? 'disabled' : '' }}"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                                    @else
                                        <li><a href="{{$dataen->previousPageUrl()}}"><span class="fa fa-long-arrow-left"></span>Prev</a></li>
                                    @endif

                                    @for ($i = 1; $i <= $dataen->lastPage(); $i++)
                                        <li>
                                            <a class="{{ ($dataen->currentPage() == $i) ? ' active' : '' }}" href="{{ $dataen->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($dataen->hasMorePages())
                                        <li><a class="{{ ($dataen->currentPage() == $dataen->lastPage()) ? ' disabled' : '' }}" href="{{$dataen->nextPageUrl()}}"><span class="fa fa-long-arrow-right"></span> Next</a></li>
                                    @else
                                        <li><a><span class="fa fa-long-arrow-right"></span>Next</a></li>
                                    @endif

                                </ul>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Our Video Content Area End Here -->

    @endif
    <!-- Main Content Area End Here -->
@endsection
