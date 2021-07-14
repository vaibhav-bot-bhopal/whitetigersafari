@extends('layouts.master')

@section('title','MMSJ | Human-Resources')

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
                            <h2>Human Resources</h2>
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
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Designation</th>
                                                        <th class="text-center">Number of Sanctioned Posts</th>
                                                        <th class="text-center">Names of the incumbent</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>Assisstant Conservator of Forest</td>
                                                        <td class="text-center">1</td>
                                                        <td>Mr. Sanjay Raykhere</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >Veterinary Officer</td>
                                                        <td class="text-center">1</td>
                                                        <td >Dr. Rajesh Tomar</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>Veterinary Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >Range Officer</td>
                                                        <td class="text-center">2</td>
                                                        <td >Mr. N. K.Gangele</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>Zoologist</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >Education Supervisor (Deputy Ranger)</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>Research Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td >Laboratory Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>Head Clerk</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >Accountant</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>LDC</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >Forester</td>
                                                        <td class="text-center">05</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Narendra Prasad Tiwari</li>
                                                                <li>Mr. Rajendra Prasad Mishra</li>
                                                                <li>Mr. Yaduvansh Prasad Tiwari</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>Forest Guard</td>
                                                        <td class="text-center">12</td>
                                                        <td>
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Pradeep Shukla</li>
                                                                <li>Mr. Kaleem Khan</li>
                                                                <li>Mr. Vijay Kumar Saket</li>
                                                                <li>Mr. Satendra Pratap Singh</li>
                                                                <li>Mr. Ravi Kumar Pandey</li>
                                                                <li>Mr. Laxman Singh Parihar</li>
                                                                <li>Mr. Manish Dwivedi</li>
                                                                <li>Mr. Lokesh Dubey</li>
                                                                <li>Mr. Akash Shukla</li>
                                                                <li>Mr. Vishnukant Mishra</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >Assisstant Keeper</td>
                                                        <td class="text-center">4</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr.Pramod Sharan Shukla</li>
                                                                <li>Mr.Vibhuti Narayan Dubey</li>
                                                                <li>Mr. Santosh Kumar Saket</li>
                                                                <li>Mr. Sandeep Kumar Verma</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>Chowkidaar</td>
                                                        <td class="text-center">7</td>
                                                        <td>
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr.Raghvendra Tiwari</li>
                                                                <li>Mr.Ravishankar Kol</li>
                                                                <li>Mr. Rajesh Kol</li>
                                                                <li>Mr. Vijay Kumar Namdeo</li>
                                                                <li>Mr. Ajay Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >Sanitary Assisstant</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Sandeep kumar Maitre</li>
                                                                <li>Mr. Mahesh kumar Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >Skilled/ trained Labour</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Ghanshyam Tiwari</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >Gardener</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Satyaprakash Chaturvedi</li>
                                                                <li>Mr. Vimlesh kushwaha</li>
                                                                <li>Mr. Ramsunder Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >Veterinary Hospital Guard</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Brajesh Mishra</li>
                                                                <li>Mr. Pappu kol</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >Peon</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Desbandhu Tripathi</li>
                                                                <li>Mr. Suneel Bhujwa</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >Computer Operator</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Shobhnath Prajapati</li>
                                                                <li>Pushpinder kumar Tripathi on job rate</li>
                                                            </ol>
                                                        </td>
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
                            <h2>मानव संसाधन</h2>
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
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Designation</th>
                                                        <th class="text-center">Number of Sanctioned Posts</th>
                                                        <th class="text-center">Names of the incumbent</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>Assisstant Conservator of Forest</td>
                                                        <td class="text-center">1</td>
                                                        <td>Mr. Sanjay Raykhere</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >Veterinary Officer</td>
                                                        <td class="text-center">1</td>
                                                        <td >Dr. Rajesh Tomar</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>Veterinary Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >Range Officer</td>
                                                        <td class="text-center">2</td>
                                                        <td >Mr. N. K.Gangele</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>Zoologist</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >Education Supervisor (Deputy Ranger)</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>Research Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td >Laboratory Assisstant</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>Head Clerk</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >Accountant</td>
                                                        <td class="text-center">1</td>
                                                        <td >Vaccant</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>LDC</td>
                                                        <td class="text-center">1</td>
                                                        <td>Vaccant</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >Forester</td>
                                                        <td class="text-center">05</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Narendra Prasad Tiwari</li>
                                                                <li>Mr. Rajendra Prasad Mishra</li>
                                                                <li>Mr. Yaduvansh Prasad Tiwari</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>Forest Guard</td>
                                                        <td class="text-center">12</td>
                                                        <td>
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Pradeep Shukla</li>
                                                                <li>Mr. Kaleem Khan</li>
                                                                <li>Mr. Vijay Kumar Saket</li>
                                                                <li>Mr. Satendra Pratap Singh</li>
                                                                <li>Mr. Ravi Kumar Pandey</li>
                                                                <li>Mr. Laxman Singh Parihar</li>
                                                                <li>Mr. Manish Dwivedi</li>
                                                                <li>Mr. Lokesh Dubey</li>
                                                                <li>Mr. Akash Shukla</li>
                                                                <li>Mr. Vishnukant Mishra</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >Assisstant Keeper</td>
                                                        <td class="text-center">4</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr.Pramod Sharan Shukla</li>
                                                                <li>Mr.Vibhuti Narayan Dubey</li>
                                                                <li>Mr. Santosh Kumar Saket</li>
                                                                <li>Mr. Sandeep Kumar Verma</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>Chowkidaar</td>
                                                        <td class="text-center">7</td>
                                                        <td>
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr.Raghvendra Tiwari</li>
                                                                <li>Mr.Ravishankar Kol</li>
                                                                <li>Mr. Rajesh Kol</li>
                                                                <li>Mr. Vijay Kumar Namdeo</li>
                                                                <li>Mr. Ajay Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >Sanitary Assisstant</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Sandeep kumar Maitre</li>
                                                                <li>Mr. Mahesh kumar Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >Skilled/ trained Labour</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Ghanshyam Tiwari</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >Gardener</td>
                                                        <td class="text-center">3</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Satyaprakash Chaturvedi</li>
                                                                <li>Mr. Vimlesh kushwaha</li>
                                                                <li>Mr. Ramsunder Saket</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >Veterinary Hospital Guard</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Brajesh Mishra</li>
                                                                <li>Mr. Pappu kol</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >Peon</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Desbandhu Tripathi</li>
                                                                <li>Mr. Suneel Bhujwa</li>
                                                            </ol>
                                                        </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >Computer Operator</td>
                                                        <td class="text-center">2</td>
                                                        <td >
                                                            <ol style="padding-left: 20px;">
                                                                <li>Mr. Shobhnath Prajapati</li>
                                                                <li>Pushpinder kumar Tripathi on job rate</li>
                                                            </ol>
                                                        </td>
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
