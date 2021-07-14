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
    <div class="breadcumb-area three twooo">
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

    @if (session('locale') == 'en')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>Bird's</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="remember-content">
                            <ul>
                                <li>
                                    <span>1</span>
                                    <p>INDIAN PEAFOWL (Pavo cristatus)</p>
                                </li>
                                <li>
                                    <span>2</span>
                                    <p>WHITE-BREASTED WATERHEN (Amaurornis phoenicurus)</p>
                                </li>
                                <li>
                                    <span>3</span>
                                    <p>PURPLE SWAMPHEN (Porphyrio porphyrio)</p>
                                </li>
                                <li>
                                    <span>4</span>
                                    <p>COMMON MOORHEN (Gallinula chloropus)</p>
                                </li>
                                <li>
                                    <span>5</span>
                                    <p>BLACK-CROWNED NIGHT HERON (Nycticorax nycticorax)</p>
                                </li>
                                <li>
                                    <span>6</span>
                                    <p>INDIAN POND HERON (Ardeola grayii)</p>
                                </li>
                                <li>
                                    <span>7</span>
                                    <p>CATTLE EGRET (Bubulcus ibis)</p>
                                </li>
                                <li>
                                    <span>8</span>
                                    <p>LITTLE EGRET (Egretta garzetta)</p>
                                </li>
                                <li>
                                    <span>9</span>
                                    <p>INDIAN BLACK IBIS (Pseudibis papiullosa)</p>
                                </li>
                                <li>
                                    <span>10</span>
                                    <p>LITTLE CORMORANT (Microcarbo niger)</p>
                                </li>
                                <li>
                                    <span>11</span>
                                    <p>INDIAN CORMORANT (Phalacrocorax fuscicollis)</p>
                                </li>
                                <li>
                                    <span>12</span>
                                    <p>RED-WATTLED LAPWING (Vanellus indicus)</p>
                                </li>
                                <li>
                                    <span>13</span>
                                    <p>CRESTED SERPENT EAGLE (Spilornis cheela)</p>
                                </li>
                                <li>
                                    <span>14</span>
                                    <p>SHORT-TOED SNAKE EAGLE (Circaetus gallicus)</p>
                                </li>
                                <li>
                                    <span>15</span>
                                    <p>SHIKRA (Accipiter badius)</p>
                                </li>
                                <li>
                                    <span>16</span>
                                    <p>BLACK-WINGED KITE (Elanus caeruleus)</p>
                                </li>
                                <li>
                                    <span>17</span>
                                    <p>COMMON BARN OWL (Tyto alba)</p>
                                </li>
                                <li>
                                    <span>18</span>
                                    <p>SPOTTED OWLET (Athene brama)</p>
                                </li>
                                <li>
                                    <span>19</span>
                                    <p>FOREST OWLET (Heteroglaux blewitti)</p>
                                </li>
                                <li>
                                    <span>20</span>
                                    <p>STORK BILLED KINGFISHER (Plargopsis capensis)</p>
                                </li>
                                <li>
                                    <span>21</span>
                                    <p>WHITE THRATED KINGFISHER (Halcyon smyrnensis)</p>
                                </li>
                                <li>
                                    <span>22</span>
                                    <p>PIED KINGFISHER (Ceryle rudis)</p>
                                </li>
                                <li>
                                    <span>23</span>
                                    <p>COMMON KINGFISHER (Alcedo atthis)</p>
                                </li>
                                <li>
                                    <span>24</span>
                                    <p>GREEN BEE EATER (Merops orientalis)</p>
                                </li>
                                <li>
                                    <span>25</span>
                                    <p>INDIAN GREY HORNBILL (Ocyceros birostris)</p>
                                </li>
                                <li>
                                    <span>26</span>
                                    <p>ASIAN KOEL (Eudynamys scolopaceus)</p>
                                </li>
                                <li>
                                    <span>27</span>
                                    <p>ROSE RING PARAKEET (Psittacula krameri)</p>
                                </li>
                                <li>
                                    <span>28</span>
                                    <p>PLUM HEADED PARAKEET (P. cyanocephala)</p>
                                </li>
                                <li>
                                    <span>29</span>
                                    <p>SPOTTED DOVE (Stigmatopelia chinensis)</p>
                                </li>
                                <li>
                                    <span>30</span>
                                    <p>INDIAN ROLLER (Coracias bengalensis)</p>
                                </li>
                                <li>
                                    <span>31</span>
                                    <p>COMMON HOOPOE (Upupa epops)</p>
                                </li>
                                <li>
                                    <span>32</span>
                                    <p>BLACK DRONGO (Dicrurus marcocercus)</p>
                                </li>
                                <li>
                                    <span>33</span>
                                    <p>WHITE BELLIED DRONGO (D. caerulescens)</p>
                                </li>
                                <li>
                                    <span>34</span>
                                    <p>ASHY DRONGO (D. leucophaeus)</p>
                                </li>
                                <li>
                                    <span>35</span>
                                    <p>HOUSE CROW (Corvus splendens)</p>
                                </li>
                                <li>
                                    <span>36</span>
                                    <p>SHORT-EARED OWL (Asio flammeus)</p>
                                </li>
                                <li>
                                    <span>37</span>
                                    <p>INDIAN-EAGLE OWL (Bubo bengalensis)</p>
                                </li>
                                <li>
                                    <span>38</span>
                                    <p>ROCK PIGEON (Columba livia)</p>
                                </li>
                                <li>
                                    <span>39</span>
                                    <p>LAUGHING DOVE (Streptopelia senegalensis)</p>
                                </li>
                                <li>
                                    <span>40</span>
                                    <p>GREATER COUCAL (Centropus sinensis)</p>
                                </li>
                                <li>
                                    <span>41</span>
                                    <p>COMMON HAWK CUCKOO (Hierococcyx varius)</p>
                                </li>
                                <li>
                                    <span>42</span>
                                    <p>COMMON CUCKOO (Cuculus canorus)</p>
                                </li>
                                <li>
                                    <span>43</span>
                                    <p>INDIAN GREY HORNBILL (Ocyceros birostris)</p>
                                </li>
                                <li>
                                    <span>44</span>
                                    <p>LESSER GOLDEN-BACKED WOODPECKER (Dinopium benghalensis)</p>
                                </li>
                                <li>
                                    <span>45</span>
                                    <p>WHITE-NAPED WOODPECKER (Chrysocolaptes festivus)</p>
                                </li>
                                <li>
                                    <span>46</span>
                                    <p>BROWN-CAPPED PYGMY WOODPECKER (Dendrocopos moluccensis)</p>
                                </li>
                                <li>
                                    <span>47</span>
                                    <p>YELLOW-CROWNED WOODPECKER (Dendrocopos mahrattensis)</p>
                                </li>
                                <li>
                                    <span>48</span>
                                    <p>BROWN-HEADED BARBET (Psilopogon zeylanicus)</p>
                                </li>
                                <li>
                                    <span>49</span>
                                    <p>COPPERSMITH BARBET (Psilopogon haemacephalus)</p>
                                </li>
                                <li>
                                    <span>50</span>
                                    <p>BLUE-TAILED BEE-EATER (Merops philippinus)</p>
                                </li>
                                <li>
                                    <span>51</span>
                                    <p>BLUE - CHEEKED BEE- EATER (Merops persicus)</p>
                                </li>
                                <li>
                                    <span>52</span>
                                    <p>STORK-BILLED KINGFISHER (Pelargopsis capensis)</p>
                                </li>
                                <li>
                                    <span>53</span>
                                    <p>INDIAN PITTA (Pitta brachyuran)</p>
                                </li>
                                <li>
                                    <span>54</span>
                                    <p>SMALL MINIVET (Pericrocotus cinnamomeus)</p>
                                </li>
                                <li>
                                    <span>55</span>
                                    <p>COMMON WOODSHRIKE (Tephrodornis pondicerianus)</p>
                                </li>
                                <li>
                                    <span>56</span>
                                    <p>LONG-TAILED SHRIKE (Lanius schach)</p>
                                </li>
                                <li>
                                    <span>57</span>
                                    <p>RUFOUS TREEPIE (Dendrocitta vagabunda)</p>
                                </li>
                                <li>
                                    <span>58</span>
                                    <p>JUNGLE CROW (Corvus macrorhynchos)</p>
                                </li>
                                <li>
                                    <span>59</span>
                                    <p>BLACK-HOODED ORIOLE (Oriolus xanthornus)</p>
                                </li>
                                <li>
                                    <span>60</span>
                                    <p>JUNGLE BABBLER (Turdoides striata)</p>
                                </li>
                                <li>
                                    <span>61</span>
                                    <p>COMMON IORA (Aegithina tiphia)</p>
                                </li>
                                <li>
                                    <span>62</span>
                                    <p>PURPLE SUNBIRD (Cinnyris asiaticus)</p>
                                </li>
                                <li>
                                    <span>63</span>
                                    <p>BAYA WEAVER (Ploceus philippinus)</p>
                                </li>
                                <li>
                                    <span>64</span>
                                    <p>INDIAN SILVERBILL (Euodice malabarica)</p>
                                </li>
                                <li>
                                    <span>65</span>
                                    <p>SCALY-BREASTED MUNIA (Lonchura punctulata)</p>
                                </li>
                                <li>
                                    <span>66</span>
                                    <p>TRICOLOURED MUNIA (Lonchura Malacca)</p>
                                </li>
                                <li>
                                    <span>67</span>
                                    <p>HOUSE SPARROW (Passer domesticus)</p>
                                </li>
                                <li>
                                    <span>68</span>
                                    <p>YELLOW-THROATED SPARROW (Gymnoris xanthocolis)</p>
                                </li>
                                <li>
                                    <span>69</span>
                                    <p>RED-RUMPED SWALLOW (Cecropis daurica)</p>
                                </li>
                                <li>
                                    <span>70</span>
                                    <p>GREY WAGTAIL (Motacilla cinerea)</p>
                                </li>
                                <li>
                                    <span>71</span>
                                    <p>CITRINE WAGTAIL (Motacilla citreola)</p>
                                </li>
                                <li>
                                    <span>72</span>
                                    <p>COMMON TAILORBIRD (Orthotomus sutorius)</p>
                                </li>
                                <li>
                                    <span>73</span>
                                    <p>TREE PIPIT (Anthus trivialis)</p>
                                </li>
                                <li>
                                    <span>74</span>
                                    <p>ASHY-CROWNED SPARROW LARK (Eremopterix griseus)</p>
                                </li>
                                <li>
                                    <span>75</span>
                                    <p>ASHY PRINIA (Prinia socialis)</p>
                                </li>
                                <li>
                                    <span>76</span>
                                    <p>PLAIN PRINIA (Prinia inornata)</p>
                                </li>
                                <li>
                                    <span>77</span>
                                    <p>CINEREOUS TIT (Parus cinereous)</p>
                                </li>
                                <li>
                                    <span>78</span>
                                    <p>ORIENTAL WHITE-EYE (Zosterops palpebrosus)</p>
                                </li>
                                <li>
                                    <span>79</span>
                                    <p>CHESTNUT-BILLED NUTHATCH (Sitta castanea)</p>
                                </li>
                                <li>
                                    <span>80</span>
                                    <p>SIBERIAN STONECHAT (Saxicola maurus)</p>
                                </li>
                                <li>
                                    <span>81</span>
                                    <p>BLACK REDSTART (Phoenicurus phoenicurus)</p>
                                </li>
                                <li>
                                    <span>82</span>
                                    <p>INDIAN ROBIN (Saxicoloides fulicatus)</p>
                                </li>
                                <li>
                                    <span>83</span>
                                    <p>ORIENTAL MAGPIE ROBIN (Copsycgus saularis)</p>
                                </li>
                                <li>
                                    <span>84</span>
                                    <p>WHITE-BROWN FANTAIL (Rhipidura aureola)</p>
                                </li>
                                <li>
                                    <span>85</span>
                                    <p>INDIAN PARADISE FLYCATCHER (Terpsiphone paradise)</p>
                                </li>
                                <li>
                                    <span>86</span>
                                    <p>TICKELL'S BLUE FLYCATCHER (Cyornis tickelliae)</p>
                                </li>
                                <li>
                                    <span>87</span>
                                    <p>GREY-HEADED CANARY FLYCATCHER (Culicicapa ceylonensis)</p>
                                </li>
                                <li>
                                    <span>88</span>
                                    <p>RED-VENTED BULBUL (Pycnonotus cafer)</p>
                                </li>
                                <li>
                                    <span>89</span>
                                    <p>ASIAN PIED STARLING (Gracupica contra)</p>
                                </li>
                                <li>
                                    <span>90</span>
                                    <p>BRAHMINY STARLING (Sturnia pagodarum)</p>
                                </li>
                                <li>
                                    <span>91</span>
                                    <p>COMMON MYNA (Acridotheres tristis)</p>
                                </li>
                                <li>
                                    <span>92</span>
                                    <p>BANK MYNA (Acridotheres ginginianus)</p>
                                </li>
                                <li>
                                    <span>93</span>
                                    <p>ORANGE-HEADED THRUSH (Geokichla citrine)</p>
                                </li>
                                <li>
                                    <span>94</span>
                                    <p>PAINTED STORK (Mycteria leucocephala)</p>
                                </li>
                                <li>
                                    <span>95</span>
                                    <p>WOOLY NECKED STORK (Ciconia episcopus)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/birds.jpg')}}" alt="">
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
    @endif


    @if (session('locale') == 'hi')
        <!-- Remember Start Here -->
        <div class="remember-area faq-area threee gallery-open">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>पक्षी</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="remember-content">
                            <ul>
                                <li>
                                    <span>1</span>
                                    <p>INDIAN PEAFOWL (Pavo cristatus)</p>
                                </li>
                                <li>
                                    <span>2</span>
                                    <p>WHITE-BREASTED WATERHEN (Amaurornis phoenicurus)</p>
                                </li>
                                <li>
                                    <span>3</span>
                                    <p>PURPLE SWAMPHEN (Porphyrio porphyrio)</p>
                                </li>
                                <li>
                                    <span>4</span>
                                    <p>COMMON MOORHEN (Gallinula chloropus)</p>
                                </li>
                                <li>
                                    <span>5</span>
                                    <p>BLACK-CROWNED NIGHT HERON (Nycticorax nycticorax)</p>
                                </li>
                                <li>
                                    <span>6</span>
                                    <p>INDIAN POND HERON (Ardeola grayii)</p>
                                </li>
                                <li>
                                    <span>7</span>
                                    <p>CATTLE EGRET (Bubulcus ibis)</p>
                                </li>
                                <li>
                                    <span>8</span>
                                    <p>LITTLE EGRET (Egretta garzetta)</p>
                                </li>
                                <li>
                                    <span>9</span>
                                    <p>INDIAN BLACK IBIS (Pseudibis papiullosa)</p>
                                </li>
                                <li>
                                    <span>10</span>
                                    <p>LITTLE CORMORANT (Microcarbo niger)</p>
                                </li>
                                <li>
                                    <span>11</span>
                                    <p>INDIAN CORMORANT (Phalacrocorax fuscicollis)</p>
                                </li>
                                <li>
                                    <span>12</span>
                                    <p>RED-WATTLED LAPWING (Vanellus indicus)</p>
                                </li>
                                <li>
                                    <span>13</span>
                                    <p>CRESTED SERPENT EAGLE (Spilornis cheela)</p>
                                </li>
                                <li>
                                    <span>14</span>
                                    <p>SHORT-TOED SNAKE EAGLE (Circaetus gallicus)</p>
                                </li>
                                <li>
                                    <span>15</span>
                                    <p>SHIKRA (Accipiter badius)</p>
                                </li>
                                <li>
                                    <span>16</span>
                                    <p>BLACK-WINGED KITE (Elanus caeruleus)</p>
                                </li>
                                <li>
                                    <span>17</span>
                                    <p>COMMON BARN OWL (Tyto alba)</p>
                                </li>
                                <li>
                                    <span>18</span>
                                    <p>SPOTTED OWLET (Athene brama)</p>
                                </li>
                                <li>
                                    <span>19</span>
                                    <p>FOREST OWLET (Heteroglaux blewitti)</p>
                                </li>
                                <li>
                                    <span>20</span>
                                    <p>STORK BILLED KINGFISHER (Plargopsis capensis)</p>
                                </li>
                                <li>
                                    <span>21</span>
                                    <p>WHITE THRATED KINGFISHER (Halcyon smyrnensis)</p>
                                </li>
                                <li>
                                    <span>22</span>
                                    <p>PIED KINGFISHER (Ceryle rudis)</p>
                                </li>
                                <li>
                                    <span>23</span>
                                    <p>COMMON KINGFISHER (Alcedo atthis)</p>
                                </li>
                                <li>
                                    <span>24</span>
                                    <p>GREEN BEE EATER (Merops orientalis)</p>
                                </li>
                                <li>
                                    <span>25</span>
                                    <p>INDIAN GREY HORNBILL (Ocyceros birostris)</p>
                                </li>
                                <li>
                                    <span>26</span>
                                    <p>ASIAN KOEL (Eudynamys scolopaceus)</p>
                                </li>
                                <li>
                                    <span>27</span>
                                    <p>ROSE RING PARAKEET (Psittacula krameri)</p>
                                </li>
                                <li>
                                    <span>28</span>
                                    <p>PLUM HEADED PARAKEET (P. cyanocephala)</p>
                                </li>
                                <li>
                                    <span>29</span>
                                    <p>SPOTTED DOVE (Stigmatopelia chinensis)</p>
                                </li>
                                <li>
                                    <span>30</span>
                                    <p>INDIAN ROLLER (Coracias bengalensis)</p>
                                </li>
                                <li>
                                    <span>31</span>
                                    <p>COMMON HOOPOE (Upupa epops)</p>
                                </li>
                                <li>
                                    <span>32</span>
                                    <p>BLACK DRONGO (Dicrurus marcocercus)</p>
                                </li>
                                <li>
                                    <span>33</span>
                                    <p>WHITE BELLIED DRONGO (D. caerulescens)</p>
                                </li>
                                <li>
                                    <span>34</span>
                                    <p>ASHY DRONGO (D. leucophaeus)</p>
                                </li>
                                <li>
                                    <span>35</span>
                                    <p>HOUSE CROW (Corvus splendens)</p>
                                </li>
                                <li>
                                    <span>36</span>
                                    <p>SHORT-EARED OWL (Asio flammeus)</p>
                                </li>
                                <li>
                                    <span>37</span>
                                    <p>INDIAN-EAGLE OWL (Bubo bengalensis)</p>
                                </li>
                                <li>
                                    <span>38</span>
                                    <p>ROCK PIGEON (Columba livia)</p>
                                </li>
                                <li>
                                    <span>39</span>
                                    <p>LAUGHING DOVE (Streptopelia senegalensis)</p>
                                </li>
                                <li>
                                    <span>40</span>
                                    <p>GREATER COUCAL (Centropus sinensis)</p>
                                </li>
                                <li>
                                    <span>41</span>
                                    <p>COMMON HAWK CUCKOO (Hierococcyx varius)</p>
                                </li>
                                <li>
                                    <span>42</span>
                                    <p>COMMON CUCKOO (Cuculus canorus)</p>
                                </li>
                                <li>
                                    <span>43</span>
                                    <p>INDIAN GREY HORNBILL (Ocyceros birostris)</p>
                                </li>
                                <li>
                                    <span>44</span>
                                    <p>LESSER GOLDEN-BACKED WOODPECKER (Dinopium benghalensis)</p>
                                </li>
                                <li>
                                    <span>45</span>
                                    <p>WHITE-NAPED WOODPECKER (Chrysocolaptes festivus)</p>
                                </li>
                                <li>
                                    <span>46</span>
                                    <p>BROWN-CAPPED PYGMY WOODPECKER (Dendrocopos moluccensis)</p>
                                </li>
                                <li>
                                    <span>47</span>
                                    <p>YELLOW-CROWNED WOODPECKER (Dendrocopos mahrattensis)</p>
                                </li>
                                <li>
                                    <span>48</span>
                                    <p>BROWN-HEADED BARBET (Psilopogon zeylanicus)</p>
                                </li>
                                <li>
                                    <span>49</span>
                                    <p>COPPERSMITH BARBET (Psilopogon haemacephalus)</p>
                                </li>
                                <li>
                                    <span>50</span>
                                    <p>BLUE-TAILED BEE-EATER (Merops philippinus)</p>
                                </li>
                                <li>
                                    <span>51</span>
                                    <p>BLUE - CHEEKED BEE- EATER (Merops persicus)</p>
                                </li>
                                <li>
                                    <span>52</span>
                                    <p>STORK-BILLED KINGFISHER (Pelargopsis capensis)</p>
                                </li>
                                <li>
                                    <span>53</span>
                                    <p>INDIAN PITTA (Pitta brachyuran)</p>
                                </li>
                                <li>
                                    <span>54</span>
                                    <p>SMALL MINIVET (Pericrocotus cinnamomeus)</p>
                                </li>
                                <li>
                                    <span>55</span>
                                    <p>COMMON WOODSHRIKE (Tephrodornis pondicerianus)</p>
                                </li>
                                <li>
                                    <span>56</span>
                                    <p>LONG-TAILED SHRIKE (Lanius schach)</p>
                                </li>
                                <li>
                                    <span>57</span>
                                    <p>RUFOUS TREEPIE (Dendrocitta vagabunda)</p>
                                </li>
                                <li>
                                    <span>58</span>
                                    <p>JUNGLE CROW (Corvus macrorhynchos)</p>
                                </li>
                                <li>
                                    <span>59</span>
                                    <p>BLACK-HOODED ORIOLE (Oriolus xanthornus)</p>
                                </li>
                                <li>
                                    <span>60</span>
                                    <p>JUNGLE BABBLER (Turdoides striata)</p>
                                </li>
                                <li>
                                    <span>61</span>
                                    <p>COMMON IORA (Aegithina tiphia)</p>
                                </li>
                                <li>
                                    <span>62</span>
                                    <p>PURPLE SUNBIRD (Cinnyris asiaticus)</p>
                                </li>
                                <li>
                                    <span>63</span>
                                    <p>BAYA WEAVER (Ploceus philippinus)</p>
                                </li>
                                <li>
                                    <span>64</span>
                                    <p>INDIAN SILVERBILL (Euodice malabarica)</p>
                                </li>
                                <li>
                                    <span>65</span>
                                    <p>SCALY-BREASTED MUNIA (Lonchura punctulata)</p>
                                </li>
                                <li>
                                    <span>66</span>
                                    <p>TRICOLOURED MUNIA (Lonchura Malacca)</p>
                                </li>
                                <li>
                                    <span>67</span>
                                    <p>HOUSE SPARROW (Passer domesticus)</p>
                                </li>
                                <li>
                                    <span>68</span>
                                    <p>YELLOW-THROATED SPARROW (Gymnoris xanthocolis)</p>
                                </li>
                                <li>
                                    <span>69</span>
                                    <p>RED-RUMPED SWALLOW (Cecropis daurica)</p>
                                </li>
                                <li>
                                    <span>70</span>
                                    <p>GREY WAGTAIL (Motacilla cinerea)</p>
                                </li>
                                <li>
                                    <span>71</span>
                                    <p>CITRINE WAGTAIL (Motacilla citreola)</p>
                                </li>
                                <li>
                                    <span>72</span>
                                    <p>COMMON TAILORBIRD (Orthotomus sutorius)</p>
                                </li>
                                <li>
                                    <span>73</span>
                                    <p>TREE PIPIT (Anthus trivialis)</p>
                                </li>
                                <li>
                                    <span>74</span>
                                    <p>ASHY-CROWNED SPARROW LARK (Eremopterix griseus)</p>
                                </li>
                                <li>
                                    <span>75</span>
                                    <p>ASHY PRINIA (Prinia socialis)</p>
                                </li>
                                <li>
                                    <span>76</span>
                                    <p>PLAIN PRINIA (Prinia inornata)</p>
                                </li>
                                <li>
                                    <span>77</span>
                                    <p>CINEREOUS TIT (Parus cinereous)</p>
                                </li>
                                <li>
                                    <span>78</span>
                                    <p>ORIENTAL WHITE-EYE (Zosterops palpebrosus)</p>
                                </li>
                                <li>
                                    <span>79</span>
                                    <p>CHESTNUT-BILLED NUTHATCH (Sitta castanea)</p>
                                </li>
                                <li>
                                    <span>80</span>
                                    <p>SIBERIAN STONECHAT (Saxicola maurus)</p>
                                </li>
                                <li>
                                    <span>81</span>
                                    <p>BLACK REDSTART (Phoenicurus phoenicurus)</p>
                                </li>
                                <li>
                                    <span>82</span>
                                    <p>INDIAN ROBIN (Saxicoloides fulicatus)</p>
                                </li>
                                <li>
                                    <span>83</span>
                                    <p>ORIENTAL MAGPIE ROBIN (Copsycgus saularis)</p>
                                </li>
                                <li>
                                    <span>84</span>
                                    <p>WHITE-BROWN FANTAIL (Rhipidura aureola)</p>
                                </li>
                                <li>
                                    <span>85</span>
                                    <p>INDIAN PARADISE FLYCATCHER (Terpsiphone paradise)</p>
                                </li>
                                <li>
                                    <span>86</span>
                                    <p>TICKELL'S BLUE FLYCATCHER (Cyornis tickelliae)</p>
                                </li>
                                <li>
                                    <span>87</span>
                                    <p>GREY-HEADED CANARY FLYCATCHER (Culicicapa ceylonensis)</p>
                                </li>
                                <li>
                                    <span>88</span>
                                    <p>RED-VENTED BULBUL (Pycnonotus cafer)</p>
                                </li>
                                <li>
                                    <span>89</span>
                                    <p>ASIAN PIED STARLING (Gracupica contra)</p>
                                </li>
                                <li>
                                    <span>90</span>
                                    <p>BRAHMINY STARLING (Sturnia pagodarum)</p>
                                </li>
                                <li>
                                    <span>91</span>
                                    <p>COMMON MYNA (Acridotheres tristis)</p>
                                </li>
                                <li>
                                    <span>92</span>
                                    <p>BANK MYNA (Acridotheres ginginianus)</p>
                                </li>
                                <li>
                                    <span>93</span>
                                    <p>ORANGE-HEADED THRUSH (Geokichla citrine)</p>
                                </li>
                                <li>
                                    <span>94</span>
                                    <p>PAINTED STORK (Mycteria leucocephala)</p>
                                </li>
                                <li>
                                    <span>95</span>
                                    <p>WOOLY NECKED STORK (Ciconia episcopus)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('public/assets/images/birds.jpg')}}" alt="">
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
    @endif

@endsection
