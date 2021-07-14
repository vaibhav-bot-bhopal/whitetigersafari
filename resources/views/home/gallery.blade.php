@extends('layouts.master')

@section('title','MMSJ | Gallery')

@push('css')
    <style>
        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')

    @if (session('locale') == 'en')
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area"></div>
        <!-- Breadcumb Area End Here -->

        <!-- Opening Hours Start Here -->
        <div class="openning-area gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="home-services-area gallery-area">
                        <div class="container">
                            <div class="row">
                            @forelse($photos as $photo)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-services widget">
                                        <div class="services-image gallery">
                                            <a href="{{asset('public/storage/gallery/'.$photo->filename)}}"><img src="{{asset('public/storage/gallery/'.$photo->filename)}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="text-center" style="font-weight: 600;">No Gallery Found !!</h2>
                                </div>
                            @endforelse
                            </div>

                            <!-- Pagination Section Start Here -->
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        {!! $photos->links() !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination Section End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Opening Hours End Here -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area"></div>
        <!-- Breadcumb Area End Here -->

        <!-- Opening Hours Start Here -->
        <div class="openning-area gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>गैलरी</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="home-services-area gallery-area">
                        <div class="container">
                            <div class="row">
                            @forelse($photos as $photo)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-services widget">
                                        <div class="services-image gallery">
                                            <a href="{{asset('public/storage/gallery/'.$photo->filename)}}"><img src="{{asset('public/storage/gallery/'.$photo->filename)}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="text-center" style="font-weight: 600;">कोई गैलरी नहीं मिली !!</h2>
                                </div>
                            @endforelse
                            </div>

                            <!-- Pagination Section Start Here -->
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        {!! $photos->links() !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination Section End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Opening Hours End Here -->
    @endif

@endsection
