@extends('layouts.master')

@section('title','MMSJ | Human-Resources')

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
    <div class="breadcumb-area three">
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
                            <h2>Free Ranging Animals</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/save.png')}}" alt="">
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <h2 class="all-h2">Mammals</h2>
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>JUNGLE CAT</td>
                                                        <td class="text-center">Felis chaus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >RHESUS MACAQUE</td>
                                                        <td class="text-center">Macaca mulatta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>RUDDY MONGOOSE</td>
                                                        <td class="text-center">Herpestes smithii</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >INDIAN GREY MONGOOSE</td>
                                                        <td class="text-center">Herpestes edwardsi</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>SMALL INDIAN CIVET</td>
                                                        <td class="text-center">Viverricula indica</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >COMMON PALM CIVET</td>
                                                        <td class="text-center">Paradoxurus hermaphrodites</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>INDIAN HARE</td>
                                                        <td class="text-center">Lepus nigricollis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td >MADRAS TREE SHREW</td>
                                                        <td class="text-center">Anathana ellioti</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>COMMON LANGUR</td>
                                                        <td class="text-center">Presbytis entellus</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="all-h2">Birds</h2>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>INDIAN PEAFOWL</td>
                                                        <td class="text-center">Pavo cristatus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >WHITE-BREASTED WATERHEN</td>
                                                        <td class="text-center">Amaurornis phoenicurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>PURPLE SWAMPHEN</td>
                                                        <td class="text-center">Porphyrio porphyrio</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >COMMON MOORHEN</td>
                                                        <td class="text-center">Gallinula chloropus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>BLACK-CROWNED NIGHT HERON</td>
                                                        <td class="text-center">Nycticorax nycticorax</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >INDIAN POND HERON</td>
                                                        <td class="text-center">Ardeola grayii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>CATTLE EGRET</td>
                                                        <td class="text-center">Bubulcus ibis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td>LITTLE EGRET</td>
                                                        <td class="text-center">Egretta garzetta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>INDIAN BLACK IBIS</td>
                                                        <td class="text-center">Pseudibis papiullosa</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >LITTLE CORMORANT</td>
                                                        <td class="text-center">Microcarbo niger</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>INDIAN CORMORANT</td>
                                                        <td class="text-center">Phalacrocorax fuscicollis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >RED-WATTLED LAPWING</td>
                                                        <td class="text-center">Vanellus indicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>CRESTED SERPENT EAGLE</td>
                                                        <td class="text-center">Spilornis cheela</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >SHORT-TOED SNAKE EAGLE</td>
                                                        <td class="text-center">Circaetus gallicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>SHIKRA</td>
                                                        <td class="text-center">Accipiter badius</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >BLACK-WINGED KITE</td>
                                                        <td class="text-center">Elanus caeruleus </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >COMMON BARN OWL</td>
                                                        <td class="text-center">Tyto alba</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >SPOTTED OWLET</td>
                                                        <td class="text-center">Athene brama</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >FOREST OWLET</td>
                                                        <td class="text-center">Heteroglaux blewitti</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >STORK BILLED KINGFISHER </td>
                                                        <td class="text-center">Plargopsis capensis </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >WHITE THRATED KINGFISHER </td>
                                                        <td class="text-center">Halcyon smyrnensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">22</th>
                                                        <td >PIED  KINGFISHER</td>
                                                        <td class="text-center">Ceryle rudis </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">23</th>
                                                        <td>COMMON KINGFISHER</td>
                                                        <td class="text-center">Alcedo atthis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">24</th>
                                                        <td >GREEN BEE EATER</td>
                                                        <td class="text-center">Merops orientalis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">25</th>
                                                        <td>INDIAN GREY HORNBILL</td>
                                                        <td class="text-center">Ocyceros birostris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">26</th>
                                                        <td >ASIAN KOEL</td>
                                                        <td class="text-center">Eudynamys scolopaceus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">27</th>
                                                        <td>ROSE RING PARAKEET</td>
                                                        <td class="text-center">Psittacula krameri</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">28</th>
                                                        <td >PLUM HEADED PARAKEET</td>
                                                        <td class="text-center">P. cyanocephala</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">29</th>
                                                        <td>SPOTTED DOVE</td>
                                                        <td class="text-center">Stigmatopelia chinensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">30</th>
                                                        <td>INDIAN ROLLER</td>
                                                        <td class="text-center">Coracias bengalensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">31</th>
                                                        <td>COMMON HOOPOE</td>
                                                        <td class="text-center">Upupa epops</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">32</th>
                                                        <td >BLACK DRONGO</td>
                                                        <td class="text-center">Dicrurus marcocercus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">33</th>
                                                        <td>WHITE BELLIED DRONGO</td>
                                                        <td class="text-center">D. caerulescens</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">34</th>
                                                        <td >ASHY DRONGO</td>
                                                        <td class="text-center">D. leucophaeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">35</th>
                                                        <td>HOUSE CROW</td>
                                                        <td class="text-center">Corvus splendens</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">36</th>
                                                        <td >SHORT-EARED OWL</td>
                                                        <td class="text-center">Asio flammeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">37</th>
                                                        <td>INDIAN-EAGLE OWL</td>
                                                        <td class="text-center">Bubo bengalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">38</th>
                                                        <td >ROCK PIGEON</td>
                                                        <td class="text-center">Columba livia</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">39</th>
                                                        <td >LAUGHING DOVE</td>
                                                        <td class="text-center">Streptopelia senegalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">40</th>
                                                        <td >GREATER COUCAL</td>
                                                        <td class="text-center">Centropus sinensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">41</th>
                                                        <td >COMMON HAWK CUCKOO</td>
                                                        <td class="text-center">Hierococcyx varius</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">42</th>
                                                        <td >COMMON CUCKOO</td>
                                                        <td class="text-center">Cuculus canorus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">43</th>
                                                        <td >INDIAN GREY HORNBILL</td>
                                                        <td class="text-center">Ocyceros birostris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">44</th>
                                                        <td >LESSER GOLDEN-BACKED WOODPECKER</td>
                                                        <td class="text-center">Dinopium benghalensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">45</th>
                                                        <td>WHITE-NAPED WOODPECKER</td>
                                                        <td class="text-center">Chrysocolaptes festivus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">46</th>
                                                        <td >BROWN-CAPPED PYGMY WOODPECKER</td>
                                                        <td class="text-center">Dendrocopos moluccensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">47</th>
                                                        <td>YELLOW-CROWNED WOODPECKER</td>
                                                        <td class="text-center">Dendrocopos mahrattensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">48</th>
                                                        <td >BROWN-HEADED BARBET</td>
                                                        <td class="text-center">Psilopogon zeylanicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">49</th>
                                                        <td>COPPERSMITH BARBET</td>
                                                        <td class="text-center">Psilopogon haemacephalus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">50</th>
                                                        <td >BLUE-TAILED BEE-EATER</td>
                                                        <td class="text-center">Merops philippinus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">51</th>
                                                        <td>BLUE - CHEEKED BEE- EATER</td>
                                                        <td class="text-center">Merops persicus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">52</th>
                                                        <td>STORK-BILLED KINGFISHER</td>
                                                        <td class="text-center">Pelargopsis capensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">53</th>
                                                        <td>INDIAN PITTA</td>
                                                        <td class="text-center">Pitta brachyuran</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">54</th>
                                                        <td >SMALL MINIVET</td>
                                                        <td class="text-center">Pericrocotus cinnamomeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">55</th>
                                                        <td>COMMON WOODSHRIKE</td>
                                                        <td class="text-center">Tephrodornis pondicerianus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">56</th>
                                                        <td >LONG-TAILED SHRIKE</td>
                                                        <td class="text-center">Lanius schach</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">57</th>
                                                        <td>RUFOUS TREEPIE</td>
                                                        <td class="text-center">Dendrocitta vagabunda</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">58</th>
                                                        <td >JUNGLE CROW</td>
                                                        <td class="text-center">Corvus macrorhynchos</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">59</th>
                                                        <td>BLACK-HOODED ORIOLE</td>
                                                        <td class="text-center">Oriolus xanthornus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">60</th>
                                                        <td >JUNGLE BABBLER</td>
                                                        <td class="text-center">Turdoides striata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">61</th>
                                                        <td >COMMON IORA</td>
                                                        <td class="text-center">Aegithina tiphia</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">62</th>
                                                        <td >PURPLE SUNBIRD</td>
                                                        <td class="text-center">Cinnyris asiaticus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">63</th>
                                                        <td >BAYA WEAVER</td>
                                                        <td class="text-center">Ploceus philippinus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">64</th>
                                                        <td >INDIAN SILVERBILL</td>
                                                        <td class="text-center">Euodice malabarica</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">65</th>
                                                        <td >SCALY-BREASTED MUNIA</td>
                                                        <td class="text-center">Lonchura punctulata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">66</th>
                                                        <td >TRICOLOURED MUNIA</td>
                                                        <td class="text-center">Lonchura Malacca</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">67</th>
                                                        <td>HOUSE SPARROW</td>
                                                        <td class="text-center">Passer domesticus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">68</th>
                                                        <td >YELLOW-THROATED SPARROW</td>
                                                        <td class="text-center">Gymnoris xanthocolis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">69</th>
                                                        <td>RED-RUMPED SWALLOW</td>
                                                        <td class="text-center">Cecropis daurica</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">70</th>
                                                        <td >GREY WAGTAIL</td>
                                                        <td class="text-center">Motacilla cinerea</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">71</th>
                                                        <td>CITRINE WAGTAIL</td>
                                                        <td class="text-center">Motacilla citreola</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">72</th>
                                                        <td >COMMON TAILORBIRD</td>
                                                        <td class="text-center">Orthotomus sutorius</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">73</th>
                                                        <td>TREE PIPIT</td>
                                                        <td class="text-center">Anthus trivialis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">74</th>
                                                        <td>ASHY-CROWNED SPARROW LARK</td>
                                                        <td class="text-center">Eremopterix griseus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">75</th>
                                                        <td>ASHY PRINIA </td>
                                                        <td class="text-center">Prinia socialis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">76</th>
                                                        <td >PLAIN PRINIA</td>
                                                        <td class="text-center">Prinia inornata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">77</th>
                                                        <td>CINEREOUS TIT</td>
                                                        <td class="text-center">Parus cinereous</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">78</th>
                                                        <td >ORIENTAL WHITE-EYE</td>
                                                        <td class="text-center">Zosterops palpebrosus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">79</th>
                                                        <td>CHESTNUT-BILLED NUTHATCH</td>
                                                        <td class="text-center">Sitta castanea</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">80</th>
                                                        <td >SIBERIAN STONECHAT</td>
                                                        <td class="text-center">Saxicola maurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">81</th>
                                                        <td>BLACK REDSTART</td>
                                                        <td class="text-center">Phoenicurus phoenicurus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">82</th>
                                                        <td >INDIAN ROBIN</td>
                                                        <td class="text-center">Saxicoloides fulicatus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">83</th>
                                                        <td >ORIENTAL MAGPIE ROBIN</td>
                                                        <td class="text-center">Copsycgus saularis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">84</th>
                                                        <td >WHITE-BROWN FANTAIL</td>
                                                        <td class="text-center">Rhipidura aureola</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">85</th>
                                                        <td >INDIAN PARADISE FLYCATCHER</td>
                                                        <td class="text-center">Terpsiphone paradise</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">86</th>
                                                        <td >TICKELL’S BLUE FLYCATCHER</td>
                                                        <td class="text-center">Cyornis tickelliae</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">87</th>
                                                        <td >GREY-HEADED CANARY FLYCATCHER</td>
                                                        <td class="text-center">Culicicapa ceylonensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">88</th>
                                                        <td >RED-VENTED BULBUL</td>
                                                        <td class="text-center">Pycnonotus cafer</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">89</th>
                                                        <td>ASIAN PIED STARLING</td>
                                                        <td class="text-center">Gracupica contra</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">90</th>
                                                        <td >BRAHMINY STARLING</td>
                                                        <td class="text-center">Sturnia pagodarum</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">91</th>
                                                        <td>COMMON MYNA</td>
                                                        <td class="text-center">Acridotheres tristis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">92</th>
                                                        <td >BANK MYNA</td>
                                                        <td class="text-center">Acridotheres ginginianus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">93</th>
                                                        <td>ORANGE-HEADED THRUSH</td>
                                                        <td class="text-center">Geokichla citrine</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">94</th>
                                                        <td >PAINTED STORK</td>
                                                        <td class="text-center">Mycteria leucocephala</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">95</th>
                                                        <td>WOOLY NECKED STORK</td>
                                                        <td class="text-center">Ciconia episcopus</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="all-h2">Reptiles</h2>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>MUGGER/CROCODILE</td>
                                                        <td class="text-center">Crocodylus palustris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >INDIAN ROOFED TURTLE</td>
                                                        <td class="text-center">Pangshura tecta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>INDIAN FLAPSHELL TURTLE</td>
                                                        <td class="text-center">Lissemys punctata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >BROOK’S HOUSE GECKO</td>
                                                        <td class="text-center">Hemidactylus brookii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>YELLOW- GREEN HOUSE GECKO </td>
                                                        <td class="text-center">Hemidactylus flaviviridis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >ASIAN HOUSE GECKO</td>
                                                        <td class="text-center">Hemidactylus frenatus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>BARK GECKO</td>
                                                        <td class="text-center">Hemidactylus leschenautia</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td>INDIAN GARDEN LIZARD</td>
                                                        <td class="text-center">Calotes versicolor</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>BLANFORD’S ROCK AGAMA</td>
                                                        <td class="text-center">Pssamophilus blanfordanus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >FAN-THROATED LIZARD</td>
                                                        <td class="text-center">Sitana ponticeriana</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>COMMON SNAKE SKINK</td>
                                                        <td class="text-center">Lygosoma punctatus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >COMMON INDIAN SKINK</td>
                                                        <td class="text-center">Eutropis carinata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>COMMON INDIAN MONITOR</td>
                                                        <td class="text-center">Varanus bengalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >COMMON WORM SNAKE </td>
                                                        <td class="text-center">Ramphotyphlops braminus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>BEAKED WORM SNAKE </td>
                                                        <td class="text-center">Gryphotyphlops acutus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >INDIAN ROCK PYTHON</td>
                                                        <td class="text-center">Python molurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >COMMON SAND BOA</td>
                                                        <td class="text-center">Gongylophis conicus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >INDIAN RAT SNAKE</td>
                                                        <td class="text-center">Ptyas mucosa</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >COMMON TRINKET SNAKE</td>
                                                        <td class="text-center">Coelognathus Helena Helena</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >COMMON WOLF SNAKE</td>
                                                        <td class="text-center">Lycodon aulicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >BARRED WOLF SNAKE</td>
                                                        <td class="text-center">Lycodon straitus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">22</th>
                                                        <td >BUFF STRIPED KEELBACK</td>
                                                        <td class="text-center">Amphiesma stolatum</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">23</th>
                                                        <td>INDIAN GREEN KEELBACK</td>
                                                        <td class="text-center">Macropisthodon plumbicolor</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">24</th>
                                                        <td >CHECKERED KEELBACK WATER SNAKE</td>
                                                        <td class="text-center">Xenochrophis piscator</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">25</th>
                                                        <td>COMMON KUKRI SNAKE</td>
                                                        <td class="text-center">Oligodon arnensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">26</th>
                                                        <td >BANDED RACER SNAKE</td>
                                                        <td class="text-center">Argyrogena fasciolata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">27</th>
                                                        <td>COMMON CAT SNAKE</td>
                                                        <td class="text-center">Boiga trigonata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">28</th>
                                                        <td >FORSTEN’S CAT SNAKE</td>
                                                        <td class="text-center">Boiga forsteni</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">29</th>
                                                        <td>GREEN VINE SNAKE</td>
                                                        <td class="text-center">Ahaetulla nasutus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">30</th>
                                                        <td>SPECTACLED COBRA</td>
                                                        <td class="text-center">Naja naja</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">31</th>
                                                        <td>COMMON KRAIT</td>
                                                        <td class="text-center">Bungarus caeruleus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">32</th>
                                                        <td >RUSSELL’S VIPER</td>
                                                        <td class="text-center">Daboia russelii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">33</th>
                                                        <td>INDIAN SAW-SCALED VIPER</td>
                                                        <td class="text-center">Echis carinatus</td>
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
                            <h2>निःशुल्क रेंजिंग पशु</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/save.png')}}" alt="">
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sponser-area">
                            {{-- <div class="single-sponser"> --}}
                                <div class="media">
                                    <h2 class="all-h2">Mammals</h2>
                                    <!-- <div class="media-body"> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>JUNGLE CAT</td>
                                                        <td class="text-center">Felis chaus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >RHESUS MACAQUE</td>
                                                        <td class="text-center">Macaca mulatta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>RUDDY MONGOOSE</td>
                                                        <td class="text-center">Herpestes smithii</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >INDIAN GREY MONGOOSE</td>
                                                        <td class="text-center">Herpestes edwardsi</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>SMALL INDIAN CIVET</td>
                                                        <td class="text-center">Viverricula indica</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >COMMON PALM CIVET</td>
                                                        <td class="text-center">Paradoxurus hermaphrodites</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>INDIAN HARE</td>
                                                        <td class="text-center">Lepus nigricollis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td >MADRAS TREE SHREW</td>
                                                        <td class="text-center">Anathana ellioti</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>COMMON LANGUR</td>
                                                        <td class="text-center">Presbytis entellus</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="all-h2">Birds</h2>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>INDIAN PEAFOWL</td>
                                                        <td class="text-center">Pavo cristatus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >WHITE-BREASTED WATERHEN</td>
                                                        <td class="text-center">Amaurornis phoenicurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>PURPLE SWAMPHEN</td>
                                                        <td class="text-center">Porphyrio porphyrio</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >COMMON MOORHEN</td>
                                                        <td class="text-center">Gallinula chloropus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>BLACK-CROWNED NIGHT HERON</td>
                                                        <td class="text-center">Nycticorax nycticorax</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >INDIAN POND HERON</td>
                                                        <td class="text-center">Ardeola grayii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>CATTLE EGRET</td>
                                                        <td class="text-center">Bubulcus ibis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td>LITTLE EGRET</td>
                                                        <td class="text-center">Egretta garzetta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>INDIAN BLACK IBIS</td>
                                                        <td class="text-center">Pseudibis papiullosa</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >LITTLE CORMORANT</td>
                                                        <td class="text-center">Microcarbo niger</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>INDIAN CORMORANT</td>
                                                        <td class="text-center">Phalacrocorax fuscicollis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >RED-WATTLED LAPWING</td>
                                                        <td class="text-center">Vanellus indicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>CRESTED SERPENT EAGLE</td>
                                                        <td class="text-center">Spilornis cheela</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >SHORT-TOED SNAKE EAGLE</td>
                                                        <td class="text-center">Circaetus gallicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>SHIKRA</td>
                                                        <td class="text-center">Accipiter badius</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >BLACK-WINGED KITE</td>
                                                        <td class="text-center">Elanus caeruleus </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >COMMON BARN OWL</td>
                                                        <td class="text-center">Tyto alba</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >SPOTTED OWLET</td>
                                                        <td class="text-center">Athene brama</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >FOREST OWLET</td>
                                                        <td class="text-center">Heteroglaux blewitti</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >STORK BILLED KINGFISHER </td>
                                                        <td class="text-center">Plargopsis capensis </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >WHITE THRATED KINGFISHER </td>
                                                        <td class="text-center">Halcyon smyrnensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">22</th>
                                                        <td >PIED  KINGFISHER</td>
                                                        <td class="text-center">Ceryle rudis </td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">23</th>
                                                        <td>COMMON KINGFISHER</td>
                                                        <td class="text-center">Alcedo atthis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">24</th>
                                                        <td >GREEN BEE EATER</td>
                                                        <td class="text-center">Merops orientalis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">25</th>
                                                        <td>INDIAN GREY HORNBILL</td>
                                                        <td class="text-center">Ocyceros birostris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">26</th>
                                                        <td >ASIAN KOEL</td>
                                                        <td class="text-center">Eudynamys scolopaceus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">27</th>
                                                        <td>ROSE RING PARAKEET</td>
                                                        <td class="text-center">Psittacula krameri</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">28</th>
                                                        <td >PLUM HEADED PARAKEET</td>
                                                        <td class="text-center">P. cyanocephala</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">29</th>
                                                        <td>SPOTTED DOVE</td>
                                                        <td class="text-center">Stigmatopelia chinensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">30</th>
                                                        <td>INDIAN ROLLER</td>
                                                        <td class="text-center">Coracias bengalensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">31</th>
                                                        <td>COMMON HOOPOE</td>
                                                        <td class="text-center">Upupa epops</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">32</th>
                                                        <td >BLACK DRONGO</td>
                                                        <td class="text-center">Dicrurus marcocercus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">33</th>
                                                        <td>WHITE BELLIED DRONGO</td>
                                                        <td class="text-center">D. caerulescens</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">34</th>
                                                        <td >ASHY DRONGO</td>
                                                        <td class="text-center">D. leucophaeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">35</th>
                                                        <td>HOUSE CROW</td>
                                                        <td class="text-center">Corvus splendens</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">36</th>
                                                        <td >SHORT-EARED OWL</td>
                                                        <td class="text-center">Asio flammeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">37</th>
                                                        <td>INDIAN-EAGLE OWL</td>
                                                        <td class="text-center">Bubo bengalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">38</th>
                                                        <td >ROCK PIGEON</td>
                                                        <td class="text-center">Columba livia</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">39</th>
                                                        <td >LAUGHING DOVE</td>
                                                        <td class="text-center">Streptopelia senegalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">40</th>
                                                        <td >GREATER COUCAL</td>
                                                        <td class="text-center">Centropus sinensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">41</th>
                                                        <td >COMMON HAWK CUCKOO</td>
                                                        <td class="text-center">Hierococcyx varius</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">42</th>
                                                        <td >COMMON CUCKOO</td>
                                                        <td class="text-center">Cuculus canorus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">43</th>
                                                        <td >INDIAN GREY HORNBILL</td>
                                                        <td class="text-center">Ocyceros birostris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">44</th>
                                                        <td >LESSER GOLDEN-BACKED WOODPECKER</td>
                                                        <td class="text-center">Dinopium benghalensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">45</th>
                                                        <td>WHITE-NAPED WOODPECKER</td>
                                                        <td class="text-center">Chrysocolaptes festivus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">46</th>
                                                        <td >BROWN-CAPPED PYGMY WOODPECKER</td>
                                                        <td class="text-center">Dendrocopos moluccensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">47</th>
                                                        <td>YELLOW-CROWNED WOODPECKER</td>
                                                        <td class="text-center">Dendrocopos mahrattensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">48</th>
                                                        <td >BROWN-HEADED BARBET</td>
                                                        <td class="text-center">Psilopogon zeylanicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">49</th>
                                                        <td>COPPERSMITH BARBET</td>
                                                        <td class="text-center">Psilopogon haemacephalus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">50</th>
                                                        <td >BLUE-TAILED BEE-EATER</td>
                                                        <td class="text-center">Merops philippinus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">51</th>
                                                        <td>BLUE - CHEEKED BEE- EATER</td>
                                                        <td class="text-center">Merops persicus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">52</th>
                                                        <td>STORK-BILLED KINGFISHER</td>
                                                        <td class="text-center">Pelargopsis capensis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">53</th>
                                                        <td>INDIAN PITTA</td>
                                                        <td class="text-center">Pitta brachyuran</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">54</th>
                                                        <td >SMALL MINIVET</td>
                                                        <td class="text-center">Pericrocotus cinnamomeus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">55</th>
                                                        <td>COMMON WOODSHRIKE</td>
                                                        <td class="text-center">Tephrodornis pondicerianus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">56</th>
                                                        <td >LONG-TAILED SHRIKE</td>
                                                        <td class="text-center">Lanius schach</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">57</th>
                                                        <td>RUFOUS TREEPIE</td>
                                                        <td class="text-center">Dendrocitta vagabunda</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">58</th>
                                                        <td >JUNGLE CROW</td>
                                                        <td class="text-center">Corvus macrorhynchos</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">59</th>
                                                        <td>BLACK-HOODED ORIOLE</td>
                                                        <td class="text-center">Oriolus xanthornus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">60</th>
                                                        <td >JUNGLE BABBLER</td>
                                                        <td class="text-center">Turdoides striata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">61</th>
                                                        <td >COMMON IORA</td>
                                                        <td class="text-center">Aegithina tiphia</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">62</th>
                                                        <td >PURPLE SUNBIRD</td>
                                                        <td class="text-center">Cinnyris asiaticus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">63</th>
                                                        <td >BAYA WEAVER</td>
                                                        <td class="text-center">Ploceus philippinus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">64</th>
                                                        <td >INDIAN SILVERBILL</td>
                                                        <td class="text-center">Euodice malabarica</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">65</th>
                                                        <td >SCALY-BREASTED MUNIA</td>
                                                        <td class="text-center">Lonchura punctulata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">66</th>
                                                        <td >TRICOLOURED MUNIA</td>
                                                        <td class="text-center">Lonchura Malacca</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">67</th>
                                                        <td>HOUSE SPARROW</td>
                                                        <td class="text-center">Passer domesticus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">68</th>
                                                        <td >YELLOW-THROATED SPARROW</td>
                                                        <td class="text-center">Gymnoris xanthocolis</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">69</th>
                                                        <td>RED-RUMPED SWALLOW</td>
                                                        <td class="text-center">Cecropis daurica</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">70</th>
                                                        <td >GREY WAGTAIL</td>
                                                        <td class="text-center">Motacilla cinerea</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">71</th>
                                                        <td>CITRINE WAGTAIL</td>
                                                        <td class="text-center">Motacilla citreola</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">72</th>
                                                        <td >COMMON TAILORBIRD</td>
                                                        <td class="text-center">Orthotomus sutorius</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">73</th>
                                                        <td>TREE PIPIT</td>
                                                        <td class="text-center">Anthus trivialis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">74</th>
                                                        <td>ASHY-CROWNED SPARROW LARK</td>
                                                        <td class="text-center">Eremopterix griseus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">75</th>
                                                        <td>ASHY PRINIA </td>
                                                        <td class="text-center">Prinia socialis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">76</th>
                                                        <td >PLAIN PRINIA</td>
                                                        <td class="text-center">Prinia inornata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">77</th>
                                                        <td>CINEREOUS TIT</td>
                                                        <td class="text-center">Parus cinereous</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">78</th>
                                                        <td >ORIENTAL WHITE-EYE</td>
                                                        <td class="text-center">Zosterops palpebrosus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">79</th>
                                                        <td>CHESTNUT-BILLED NUTHATCH</td>
                                                        <td class="text-center">Sitta castanea</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">80</th>
                                                        <td >SIBERIAN STONECHAT</td>
                                                        <td class="text-center">Saxicola maurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">81</th>
                                                        <td>BLACK REDSTART</td>
                                                        <td class="text-center">Phoenicurus phoenicurus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">82</th>
                                                        <td >INDIAN ROBIN</td>
                                                        <td class="text-center">Saxicoloides fulicatus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">83</th>
                                                        <td >ORIENTAL MAGPIE ROBIN</td>
                                                        <td class="text-center">Copsycgus saularis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">84</th>
                                                        <td >WHITE-BROWN FANTAIL</td>
                                                        <td class="text-center">Rhipidura aureola</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">85</th>
                                                        <td >INDIAN PARADISE FLYCATCHER</td>
                                                        <td class="text-center">Terpsiphone paradise</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">86</th>
                                                        <td >TICKELL’S BLUE FLYCATCHER</td>
                                                        <td class="text-center">Cyornis tickelliae</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">87</th>
                                                        <td >GREY-HEADED CANARY FLYCATCHER</td>
                                                        <td class="text-center">Culicicapa ceylonensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">88</th>
                                                        <td >RED-VENTED BULBUL</td>
                                                        <td class="text-center">Pycnonotus cafer</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">89</th>
                                                        <td>ASIAN PIED STARLING</td>
                                                        <td class="text-center">Gracupica contra</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">90</th>
                                                        <td >BRAHMINY STARLING</td>
                                                        <td class="text-center">Sturnia pagodarum</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">91</th>
                                                        <td>COMMON MYNA</td>
                                                        <td class="text-center">Acridotheres tristis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">92</th>
                                                        <td >BANK MYNA</td>
                                                        <td class="text-center">Acridotheres ginginianus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">93</th>
                                                        <td>ORANGE-HEADED THRUSH</td>
                                                        <td class="text-center">Geokichla citrine</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">94</th>
                                                        <td >PAINTED STORK</td>
                                                        <td class="text-center">Mycteria leucocephala</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">95</th>
                                                        <td>WOOLY NECKED STORK</td>
                                                        <td class="text-center">Ciconia episcopus</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="all-h2">Reptiles</h2>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="info">
                                                        <th class="text-center">SNo.</th>
                                                        <th class="text-center">Common Name</th>
                                                        <th class="text-center">Scientific Name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- On cells (`td` or `th`) -->
                                                    <tr class="active">
                                                        <th class="text-center">1</th>
                                                        <td>MUGGER/CROCODILE</td>
                                                        <td class="text-center">Crocodylus palustris</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">2</th>
                                                        <td >INDIAN ROOFED TURTLE</td>
                                                        <td class="text-center">Pangshura tecta</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">3</th>
                                                        <td>INDIAN FLAPSHELL TURTLE</td>
                                                        <td class="text-center">Lissemys punctata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">4</th>
                                                        <td >BROOK’S HOUSE GECKO</td>
                                                        <td class="text-center">Hemidactylus brookii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">5</th>
                                                        <td>YELLOW- GREEN HOUSE GECKO </td>
                                                        <td class="text-center">Hemidactylus flaviviridis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">6</th>
                                                        <td >ASIAN HOUSE GECKO</td>
                                                        <td class="text-center">Hemidactylus frenatus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">7</th>
                                                        <td>BARK GECKO</td>
                                                        <td class="text-center">Hemidactylus leschenautia</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">8</th>
                                                        <td>INDIAN GARDEN LIZARD</td>
                                                        <td class="text-center">Calotes versicolor</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">9</th>
                                                        <td>BLANFORD’S ROCK AGAMA</td>
                                                        <td class="text-center">Pssamophilus blanfordanus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">10</th>
                                                        <td >FAN-THROATED LIZARD</td>
                                                        <td class="text-center">Sitana ponticeriana</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">11</th>
                                                        <td>COMMON SNAKE SKINK</td>
                                                        <td class="text-center">Lygosoma punctatus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">12</th>
                                                        <td >COMMON INDIAN SKINK</td>
                                                        <td class="text-center">Eutropis carinata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">13</th>
                                                        <td>COMMON INDIAN MONITOR</td>
                                                        <td class="text-center">Varanus bengalensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">14</th>
                                                        <td >COMMON WORM SNAKE </td>
                                                        <td class="text-center">Ramphotyphlops braminus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">15</th>
                                                        <td>BEAKED WORM SNAKE </td>
                                                        <td class="text-center">Gryphotyphlops acutus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">16</th>
                                                        <td >INDIAN ROCK PYTHON</td>
                                                        <td class="text-center">Python molurus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">17</th>
                                                        <td >COMMON SAND BOA</td>
                                                        <td class="text-center">Gongylophis conicus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">18</th>
                                                        <td >INDIAN RAT SNAKE</td>
                                                        <td class="text-center">Ptyas mucosa</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">19</th>
                                                        <td >COMMON TRINKET SNAKE</td>
                                                        <td class="text-center">Coelognathus Helena Helena</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">20</th>
                                                        <td >COMMON WOLF SNAKE</td>
                                                        <td class="text-center">Lycodon aulicus</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">21</th>
                                                        <td >BARRED WOLF SNAKE</td>
                                                        <td class="text-center">Lycodon straitus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">22</th>
                                                        <td >BUFF STRIPED KEELBACK</td>
                                                        <td class="text-center">Amphiesma stolatum</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">23</th>
                                                        <td>INDIAN GREEN KEELBACK</td>
                                                        <td class="text-center">Macropisthodon plumbicolor</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">24</th>
                                                        <td >CHECKERED KEELBACK WATER SNAKE</td>
                                                        <td class="text-center">Xenochrophis piscator</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">25</th>
                                                        <td>COMMON KUKRI SNAKE</td>
                                                        <td class="text-center">Oligodon arnensis</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">26</th>
                                                        <td >BANDED RACER SNAKE</td>
                                                        <td class="text-center">Argyrogena fasciolata</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">27</th>
                                                        <td>COMMON CAT SNAKE</td>
                                                        <td class="text-center">Boiga trigonata</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">28</th>
                                                        <td >FORSTEN’S CAT SNAKE</td>
                                                        <td class="text-center">Boiga forsteni</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">29</th>
                                                        <td>GREEN VINE SNAKE</td>
                                                        <td class="text-center">Ahaetulla nasutus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">30</th>
                                                        <td>SPECTACLED COBRA</td>
                                                        <td class="text-center">Naja naja</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">31</th>
                                                        <td>COMMON KRAIT</td>
                                                        <td class="text-center">Bungarus caeruleus</td>
                                                    </tr>

                                                    <tr class="success">
                                                        <th class="text-center">32</th>
                                                        <td >RUSSELL’S VIPER</td>
                                                        <td class="text-center">Daboia russelii</td>
                                                    </tr>

                                                    <tr class="active">
                                                        <th class="text-center">33</th>
                                                        <td>INDIAN SAW-SCALED VIPER</td>
                                                        <td class="text-center">Echis carinatus</td>
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
