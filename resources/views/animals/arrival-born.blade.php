@extends('layouts.master')

@section('title','MMSJ | New Arrivals & Borns')

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
    </div>
    <!-- Breadcumb Area End Here -->

    @if (session('locale') == 'en')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>New Arrivals & New Borns</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            <div class="media">
                                <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">New Arrivals</h2>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">SNo.</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Species</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Sex (M:F:U)</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Zoo / Farm Name</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Date of arrival</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center">01</th>
                                                <td class="text-center">Chital</td>
                                                <td class="text-center">0:2:0</td>
                                                <td class="text-center">Van Vihar National Park, Bhopal</td>
                                                <td class="text-center">24/03/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">02</th>
                                                <td class="text-center">Sambhar</td>
                                                <td class="text-center">1:3:1</td>
                                                <td class="text-center">Van Vihar National Park, Bhopal</td>
                                                <td class="text-center">24/03/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">03</th>
                                                <td class="text-center">Asiatic Lion</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">06/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">04</th>
                                                <td class="text-center">White Tiger</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Maitri Bagh Zoo, Bhilai (C.G.)</td>
                                                <td class="text-center">06/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">05</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">30/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">06</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Gandhi Zoological Garden, Gwalior, (M.P.)</td>
                                                <td class="text-center">03/05/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">07</th>
                                                <td class="text-center">Sambar</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Maitri Bagh Zoo, Bhilai (C.G.)</td>
                                                <td class="text-center">01/05/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">08</th>
                                                <td class="text-center">Thamin Deer</td>
                                                <td class="text-center">3:3:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2019</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">09</th>
                                                <td class="text-center">Hog Deer</td>
                                                <td class="text-center">1:3:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">03/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">10</th>
                                                <td class="text-center">Swamp Deer</td>
                                                <td class="text-center">1:4:0</td>
                                                <td class="text-center">Nawab Wajid Ali Shah Zoological Garden, Lucknow(U.P.)</td>
                                                <td class="text-center">07/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">11</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">3:9:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">12</th>
                                                <td class="text-center">Black Buck (Albino)</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            <div class="media">
                                <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">ANIMAL BORN FROM 01.04.2016 TO 25.06.2021</h2>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">SNo.</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Year's</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Species</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Number</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">Sex(M:F:U)</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle">01</th>
                                                <td class="text-center" rowspan="2" style="vertical-align: middle">2017-18</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0:1:0</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0:0:3</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="3" style="vertical-align: middle">02</th>
                                                <td class="text-center" rowspan="3" style="vertical-align: middle">2018-19</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">2:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">12</td>
                                                <td class="text-center">1:3:8</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Sambar Deer</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">1:0:0</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="4" style="vertical-align: middle">03</th>
                                                <td class="text-center" rowspan="4" style="vertical-align: middle">2019-20</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0:0:3</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Thamin Deer</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Sambar Deer</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0:0:1</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                            <h2>नवागन्तुक और नवजात</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            <div class="media">
                                <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">नवागन्तुक</h2>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">जाति</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">सेक्स (एम: एफ: यू)</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">चिड़ियाघर / फार्म का नाम</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">आगमन की तारीख</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center">01</th>
                                                <td class="text-center">Chital</td>
                                                <td class="text-center">0:2:0</td>
                                                <td class="text-center">Van Vihar National Park, Bhopal</td>
                                                <td class="text-center">24/03/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">02</th>
                                                <td class="text-center">Sambhar</td>
                                                <td class="text-center">1:3:1</td>
                                                <td class="text-center">Van Vihar National Park, Bhopal</td>
                                                <td class="text-center">24/03/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">03</th>
                                                <td class="text-center">Asiatic Lion</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">06/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">04</th>
                                                <td class="text-center">White Tiger</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Maitri Bagh Zoo, Bhilai (C.G.)</td>
                                                <td class="text-center">06/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">05</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">30/04/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">06</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Gandhi Zoological Garden, Gwalior, (M.P.)</td>
                                                <td class="text-center">03/05/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">07</th>
                                                <td class="text-center">Sambar</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">Maitri Bagh Zoo, Bhilai (C.G.)</td>
                                                <td class="text-center">01/05/2018</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">08</th>
                                                <td class="text-center">Thamin Deer</td>
                                                <td class="text-center">3:3:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2019</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">09</th>
                                                <td class="text-center">Hog Deer</td>
                                                <td class="text-center">1:3:0</td>
                                                <td class="text-center">Kanan Pindari Zoological Garden, Bilaspur(C.G.)</td>
                                                <td class="text-center">03/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">10</th>
                                                <td class="text-center">Swamp Deer</td>
                                                <td class="text-center">1:4:0</td>
                                                <td class="text-center">Nawab Wajid Ali Shah Zoological Garden, Lucknow(U.P.)</td>
                                                <td class="text-center">07/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">11</th>
                                                <td class="text-center">Barking Deer</td>
                                                <td class="text-center">3:9:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2020</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center">12</th>
                                                <td class="text-center">Black Buck (Albino)</td>
                                                <td class="text-center">1:1:0</td>
                                                <td class="text-center">National Zoological Park, New Delhi</td>
                                                <td class="text-center">18/03/2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            <div class="media">
                                <h2 class="text-center" style="font-weight: 700; margin-bottom: 30px;">01.04.2016 से 25.06.2021 तक जन्मे पशु</h2>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="info">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">क्रमांक</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">वर्ष</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">जाति</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">संख्या</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">सेक्स (एम: एफ: यू)</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- On cells (`td` or `th`) -->
                                            <tr class="active">
                                                <th class="text-center" rowspan="2" style="vertical-align: middle">01</th>
                                                <td class="text-center" rowspan="2" style="vertical-align: middle">2017-18</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0:1:0</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0:0:3</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="3" style="vertical-align: middle">02</th>
                                                <td class="text-center" rowspan="3" style="vertical-align: middle">2018-19</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">2:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">12</td>
                                                <td class="text-center">1:3:8</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Sambar Deer</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">1:0:0</td>
                                            </tr>

                                            <tr class="active">
                                                <th class="text-center" rowspan="4" style="vertical-align: middle">03</th>
                                                <td class="text-center" rowspan="4" style="vertical-align: middle">2019-20</td>
                                                <td class="text-center">Black Buck</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0:0:3</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Thamin Deer</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Spotted Deer</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0:0:2</td>
                                            </tr>

                                            <tr class="active">
                                                <td class="text-center">Sambar Deer</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0:0:1</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
