@extends('layouts.master')

@section('title','MMSJ | Reptiles')

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
    <div class="breadcumb-area five twooo">
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
                        <h2>Reptiles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="remember-content">
                        <ul>
                            <li>
                                <span>1</span>
                                <p>MUGGER/CROCODILE (Crocodylus palustris)</p>
                            </li>
                            <li>
                                <span>2</span>
                                <p>INDIAN ROOFED TURTLE (Pangshura tecta)</p>
                            </li>
                            <li>
                                <span>3</span>
                                <p>INDIAN FLAPSHELL TURTLE (Lissemys punctata)</p>
                            </li>
                            <li>
                                <span>4</span>
                                <p>BROOK'S HOUSE GECKO (Hemidactylus brookii)</p>
                            </li>
                            <li>
                                <span>5</span>
                                <p>YELLOW- GREEN HOUSE GECKO (Hemidactylus flaviviridis)</p>
                            </li>
                            <li>
                                <span>6</span>
                                <p>ASIAN HOUSE GECKO (Hemidactylus frenatus)</p>
                            </li>
                            <li>
                                <span>7</span>
                                <p>BARK GECKO (Hemidactylus leschenautia)</p>
                            </li>
                            <li>
                                <span>8</span>
                                <p>INDIAN GARDEN LIZARD (Calotes versicolor)</p>
                            </li>
                            <li>
                                <span>9</span>
                                <p>BLANFORD'S ROCK AGAMA (Pssamophilus blanfordanus)</p>
                            </li>
                            <li>
                                <span>10</span>
                                <p>FAN-THROATED LIZARD (Sitana ponticeriana)</p>
                            </li>
                            <li>
                                <span>11</span>
                                <p>COMMON SNAKE SKINK (Lygosoma punctatus)</p>
                            </li>
                            <li>
                                <span>12</span>
                                <p>COMMON INDIAN SKINK (Eutropis carinata)</p>
                            </li>
                            <li>
                                <span>13</span>
                                <p>COMMON INDIAN MONITOR (Varanus bengalensis)</p>
                            </li>
                            <li>
                                <span>14</span>
                                <p>COMMON WORM SNAKE (Ramphotyphlops braminus)</p>
                            </li>
                            <li>
                                <span>15</span>
                                <p>BEAKED WORM SNAKE (Gryphotyphlops acutus)</p>
                            </li>
                            <li>
                                <span>16</span>
                                <p>INDIAN ROCK PYTHON (Python molurus)</p>
                            </li>
                            <li>
                                <span>17</span>
                                <p>COMMON SAND BOA (Gongylophis conicus)</p>
                            </li>
                            <li>
                                <span>18</span>
                                <p>INDIAN RAT SNAKE (Ptyas mucosa)</p>
                            </li>
                            <li>
                                <span>19</span>
                                <p>COMMON TRINKET SNAKE (Coelognathus Helena Helena)</p>
                            </li>
                            <li>
                                <span>20</span>
                                <p>COMMON WOLF SNAKE (Lycodon aulicus)</p>
                            </li>
                            <li>
                                <span>21</span>
                                <p>BARRED WOLF SNAKE (Lycodon straitus)</p>
                            </li>
                            <li>
                                <span>22</span>
                                <p>BUFF STRIPED KEELBACK (Amphiesma stolatum)</p>
                            </li>
                            <li>
                                <span>23</span>
                                <p>INDIAN GREEN KEELBACK (Macropisthodon plumbicolor)</p>
                            </li>
                            <li>
                                <span>24</span>
                                <p>CHECKERED KEELBACK WATER SNAKE (Xenochrophis piscator)</p>
                            </li>
                            <li>
                                <span>25</span>
                                <p>COMMON KUKRI SNAKE (Oligodon arnensis)</p>
                            </li>
                            <li>
                                <span>26</span>
                                <p>BANDED RACER SNAKE (Argyrogena fasciolata)</p>
                            </li>
                            <li>
                                <span>27</span>
                                <p>COMMON CAT SNAKE (Boiga trigonata)</p>
                            </li>
                            <li>
                                <span>28</span>
                                <p>FORSTEN'S CAT SNAKE (Boiga forsteni)</p>
                            </li>
                            <li>
                                <span>29</span>
                                <p>GREEN VINE SNAKE (Ahaetulla nasutus)</p>
                            </li>
                            <li>
                                <span>30</span>
                                <p>SPECTACLED COBRA (Naja naja)</p>
                            </li>
                            <li>
                                <span>31</span>
                                <p>COMMON KRAIT (Bungarus caeruleus)</p>
                            </li>
                            <li>
                                <span>32</span>
                                <p>RUSSELL'S VIPER (Daboia russelii)</p>
                            </li>
                            <li>
                                <span>33</span>
                                <p>INDIAN SAW-SCALED VIPER (Echis carinatus)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/reptiles.jpg')}}" alt="">
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
