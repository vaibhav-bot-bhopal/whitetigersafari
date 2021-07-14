@extends('layouts.master')

@section('title','MMSJ | Rescue & Rehabilitation')

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
                            <h2>Rescue & Rehabilitation</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">SNo.</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Date of Rescue</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Species with number of animals rescued with their sex  (M:F:U:T)</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Rescued from</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Date of Submission of Report to the CWLW / CZA</th>
                                                        <th class="text-center" colspan="2">Action taken
                                                            <tr class="info">
                                                                <th class="text-center" width="200">Date and Place of rehabilitation in their habitat</th>
                                                                <th class="text-center" width="200">Reasons for housing in the zoo, if not released in their habitat</th>
                                                            </tr>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">25/04/2019</td>
                                                        <td class="text-center">Monitor Lizard</td>
                                                        <td class="text-center">Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">25/04/2019 Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">21/05/2019</td>
                                                        <td class="text-center">Black Buck</td>
                                                        <td class="text-center">Village Bhiyamau, Range Baraundha</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Since the animal was hand reared therefore could not be released back into the wild</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">24/05/2019</td>
                                                        <td class="text-center">Langur</td>
                                                        <td class="text-center">Gadhi, Mukundpur Range</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">28/05/2019, In Mukundpur Range</td>
                                                        <td class="text-center">Since the animal was hand reared therefore could not be released back into the wild</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">06/06/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">South Seoni</td>
                                                        <td class="text-center">06/06/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal was seriously ill and paralysed and needed treatment.</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">05</th>
                                                        <td class="text-center">06/07/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Gudh,Rewa</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">06/07/2019, Sanjay Dubri Tiger Reserve</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">06</th>
                                                        <td class="text-center">19/07/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Sidhi</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">07</th>
                                                        <td class="text-center">13/08/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Barahi,Katni</td>
                                                        <td class="text-center">14/08/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal was young and could not survive in the wild.</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">08</th>
                                                        <td class="text-center">10/09/2019</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Damoh</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">10/09/2019 Nauradehi Wildlife Sanctuary</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">09</th>
                                                        <td class="text-center">06/09/2019</td>
                                                        <td class="text-center">Mugger Crocodile</td>
                                                        <td class="text-center">Bhadanpur, Maihar</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">06/09/2019, Bansagar Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td class="text-center">11/09/2019</td>
                                                        <td class="text-center">Kobra</td>
                                                        <td class="text-center">Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">11/09/2019 Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td class="text-center">21/10/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Baram Baba, Sidhi</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td class="text-center">02/11/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Kanha Tiger Reserve</td>
                                                        <td class="text-center">02/11/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Severely injured and can't survive in the wild.</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td class="text-center">11/11/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Byohaari</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Sent to Van Vihar, Bhopal</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td class="text-center">16/12/2019</td>
                                                        <td class="text-center">Python</td>
                                                        <td class="text-center">Madha, Near Lilji Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">16/12/2019, Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td class="text-center">24/12/2019</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Village Judmaniya, Rewa</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td class="text-center">30/01/2020</td>
                                                        <td class="text-center">Sambhar</td>
                                                        <td class="text-center">Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">30/01/2020, Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td class="text-center">15/02/2020</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Kathwadiya, Baroundha</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">15/02/2020, Baroundha Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td class="text-center">07/03/2020</td>
                                                        <td class="text-center">Python</td>
                                                        <td class="text-center">Mukundpur Resort</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">07/03/2020 Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td class="text-center">15/03/2020</td>
                                                        <td class="text-center">Mugger Crocodile</td>
                                                        <td class="text-center">Jigna, Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">15/03/2020, Bansagar Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                            <h2>बचाव और पुनर्वास</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">SNo.</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Date of Rescue</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Species with number of animals rescued with their sex  (M:F:U:T)</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Received from</th>
                                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Date of Submission of Report to the CWLW / CZA</th>
                                                        <th class="text-center" colspan="2">Action taken
                                                            <tr class="info">
                                                                <th class="text-center" width="200">Date and Place of rehabilitation in their habitat</th>
                                                                <th class="text-center" width="200">Reasons for housing in the zoo, if not released in their habitat</th>
                                                            </tr>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">01</th>
                                                        <td class="text-center">25/04/2019</td>
                                                        <td class="text-center">Monitor Lizard</td>
                                                        <td class="text-center">Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">25/04/2019 Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">02</th>
                                                        <td class="text-center">21/05/2019</td>
                                                        <td class="text-center">Black Buck</td>
                                                        <td class="text-center">Village Bhiyamau, Range Baraundha</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Since the animal was hand reared therefore could not be released back into the wild</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">03</th>
                                                        <td class="text-center">24/05/2019</td>
                                                        <td class="text-center">Langur</td>
                                                        <td class="text-center">Gadhi, Mukundpur Range</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">28/05/2019, In Mukundpur Range</td>
                                                        <td class="text-center">Since the animal was hand reared therefore could not be released back into the wild</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">04</th>
                                                        <td class="text-center">06/06/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">South Seoni</td>
                                                        <td class="text-center">06/06/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal was seriously ill and paralysed and needed treatment.</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">05</th>
                                                        <td class="text-center">06/07/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Gudh,Rewa</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">06/07/2019, Sanjay Dubri Tiger Reserve</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">06</th>
                                                        <td class="text-center">19/07/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Sidhi</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">07</th>
                                                        <td class="text-center">13/08/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Barahi,Katni</td>
                                                        <td class="text-center">14/08/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Animal was young and could not survive in the wild.</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">08</th>
                                                        <td class="text-center">10/09/2019</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Damoh</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">10/09/2019 Nauradehi Wildlife Sanctuary</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">09</th>
                                                        <td class="text-center">06/09/2019</td>
                                                        <td class="text-center">Mugger Crocodile</td>
                                                        <td class="text-center">Bhadanpur, Maihar</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">06/09/2019, Bansagar Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td class="text-center">11/09/2019</td>
                                                        <td class="text-center">Kobra</td>
                                                        <td class="text-center">Mukundpur</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">11/09/2019 Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td class="text-center">21/10/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Baram Baba, Sidhi</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td class="text-center">02/11/2019</td>
                                                        <td class="text-center">Tiger</td>
                                                        <td class="text-center">Kanha Tiger Reserve</td>
                                                        <td class="text-center">02/11/2019</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Severely injured and can't survive in the wild.</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td class="text-center">11/11/2019</td>
                                                        <td class="text-center">Sloth Bear</td>
                                                        <td class="text-center">Byohaari</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Sent to Van Vihar, Bhopal</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td class="text-center">16/12/2019</td>
                                                        <td class="text-center">Python</td>
                                                        <td class="text-center">Madha, Near Lilji Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">16/12/2019, Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td class="text-center">24/12/2019</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Village Judmaniya, Rewa</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">Died during treatment</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td class="text-center">30/01/2020</td>
                                                        <td class="text-center">Sambhar</td>
                                                        <td class="text-center">Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">30/01/2020, Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td class="text-center">15/02/2020</td>
                                                        <td class="text-center">Common Leopard</td>
                                                        <td class="text-center">Kathwadiya, Baroundha</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">15/02/2020, Baroundha Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td class="text-center">07/03/2020</td>
                                                        <td class="text-center">Python</td>
                                                        <td class="text-center">Mukundpur Resort</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">07/03/2020 Mukundpur Forest Area</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td class="text-center">15/03/2020</td>
                                                        <td class="text-center">Mugger Crocodile</td>
                                                        <td class="text-center">Jigna, Satna</td>
                                                        <td class="text-center">&nbsp;</td>
                                                        <td class="text-center">15/03/2020, Bansagar Dam</td>
                                                        <td class="text-center">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
