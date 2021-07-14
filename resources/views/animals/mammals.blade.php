@extends('layouts.master')

@section('title','MMSJ | Mammals')

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
    <div class="breadcumb-area four twooo">
            <div class="breadcumb-two-overlay">
                <div class="container">
                    <div class="row">
                        <!-- <div class="breadcumb">
                            <h2>Zoo Rules</h2>
                        </div> -->
                    </div>
                </div>
            </div>
    </div>
    <!-- Breadcumb Area End Here -->
    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>Mammals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="remember-content">
                        <ul>
                            <li>
                                <span>1</span>
                                <p>JUNGLE CAT (Felis chaus)</p>
                            </li>
                            <li>
                                <span>2</span>
                                <p>RHESUS MACAQUE (Macaca mulatta)</p>
                            </li>
                            <li>
                                <span>3</span>
                                <p>RUDDY MONGOOSE (Herpestes smithii)</p>
                            </li>
                            <li>
                                <span>4</span>
                                <p>INDIAN GREY MONGOOSE (Herpestes edwardsi)</p>
                            </li>
                            <li>
                                <span>5</span>
                                <p>SMALL INDIAN CIVET (Viverricula indica)</p>
                            </li>
                            <li>
                                <span>6</span>
                                <p>COMMON PALM CIVET (Paradoxurus hermaphrodites)</p>
                            </li>
                            <li>
                                <span>7</span>
                                <p>INDIAN HARE (Lepus nigricollis)</p>
                            </li>
                            <li>
                                <span>8</span>
                                <p>MADRAS TREE SHREW (Anathana ellioti)</p>
                            </li>
                            <li>
                                <span>9</span>
                                <p>COMMON LANGUR (Presbytis entellus)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/mammals.jpg')}}" alt="">
                        <!-- <div class="image-content">
                            <h1>Meet Alvin</h1>
                            <h2>the parrot</h2>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remember End Here -->
@endsection
