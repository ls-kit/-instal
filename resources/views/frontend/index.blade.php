@extends('frontend.layouts.app')

@section('content')

    <!-- banner section start  -->
    <section class="item banner-sec" style="background-image: url(images/banner2.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-12 col-lg-6">
                    <div class="banner-caption" data-aos="/zoom-in">
                        <h2>Finanziamenti semplici per servizi che contano</h2>
                        <h4>instalpay : la rivoluzione</h4>
                        <h5>Siamo una piattaforma tecnologica che ti consente di offrire ai tuoi clienti prestiti al consumo in tempo reale presso il loro domicilio o negozio</h5>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="main-slider owl-carousel">
                        <div class="item d-flex justify-center py-1">
                            <div class="card">
                                <div class="card-img">
                                    <img src="images/card/maccanico-moto.jpg" alt="image">
                                </div>
                                <h3>
                                    Motor Service
                                    <span>120 euro x 4 rate</span>
                                </h3>
                            </div>
                        </div>
                        <div class="item d-flex justify-center py-1">
                            <div class="card">
                                <div class="card-img">
                                    <img src="images/card/cambia-le-gomme-auto-4-rate-da-100.jpg" alt="image">
                                </div>
                                <h3>
                                    cambia le gomme della tua auto 
                                    <!-- 120 euro x 4 rate , senza interessi ,senza busta paga  -->
                                    <span>120 euro x 4</span>
                                </h3>
                            </div>
                        </div>
                        <div class="item d-flex justify-center py-1">
                            <div class="card">
                                <div class="card-img">
                                    <img src="images/card/boiler.jpg" alt="image">
                                </div>
                                <h3>
                                    cambia la caldaia sconto ecobonus 65 % 
                                    <!-- subito in fattura 2497 put a cross on it and wrtite 839 euro 4 x 209.75 , no interessi no busta paga  -->
                                    <span>839 euro 4 x 209.75</span>
                                </h3>
                            </div>
                        </div>
                        <div class="item d-flex justify-center py-1">
                            <div class="card">
                                <div class="card-img">
                                    <img src="images/card/pubblicità-trasloco.jpg" alt="image">
                                </div>
                                <h3>
                                    trasloca ora e paga poi es. trasloco nella stessa città, appartamento 70 mq circa
                                     <!-- 4x 175 euro , senza interessi , senza busta paga -->
                                    <span>4x 175 euro</span>
                                </h3>
                            </div>
                        </div>
                        <div class="item d-flex justify-center py-1">
                            <div class="card">
                                <div class="card-img">
                                    <img src="images/card/pubblicità-materasso.jpg" alt="image">
                                </div>
                                <h3>
                                    cambia ora il tuo materasso e paga dopo
                                    <span>430 euro 4 x 107,50</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end  -->

    <!-- work section start  -->
    <section class="work-sec sec-padding">
        <div class="container">
            <div class="title">
                <h2>Come <span>funziona</span></h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-center">
                    <div class="work-item">
                        <img src="images/work/1.png" alt="image" class="w-100">
                        <h3>Perché Instalpay</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, dolore natus distinctio</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-center">
                    <div class="work-item">
                        <img src="images/work/2.png" alt="image" class="w-100">
                        <h3>Perché Instalpay</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, dolore natus distinctio</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-center">
                    <div class="work-item">
                        <img src="images/work/3.png" alt="image" class="w-100">
                        <h3>Perché Instalpay</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, dolore natus distinctio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work section end -->

    <!-- services section start -->
    <section class="services category-sec sec-padding clearfix">
        <div class="container" data-aos="fade-right" data-aos-duration="1000">
            <div class="title"> 
                <h2>Ser<span>vizi</span></h2>
            </div>
            <div class="owl-carousel service-slider">
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/IMBIANCHINI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">IMBIANCHINI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">IMBIANCHINI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/PIASTRELLISTI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">PIASTRELLISTI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">PIASTRELLISTI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/PICCOLI LAVORI EDILI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">PICCOLI LAVORI EDILI</a></h3></div>
                            </div>
                        <h3><a href="#">PICCOLI LAVORI EDILI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/ELETTRICISTI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">ELETTRICISTI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">ELETTRICISTI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/GIARDINIERI ANTENNISTI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">GIARDINIERI ANTENNISTI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">GIARDINIERI ANTENNISTI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/PORTE E FINESTRE.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">PORTE E FINESTRE</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">PORTE E FINESTRE</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/TAPPEZZIERI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">TAPPEZZIERI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">TAPPEZZIERI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/GOMMISTI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">GOMMISTI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">GOMMISTI</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/RIPARAZIONI VETRI AUTO.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">RIPARAZIONI VETRI AUTO</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">RIPARAZIONI VETRI AUTO</a></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="category-item">
                        <div class="category-img">
                            <img src="images/services/DENTISTI.jpg" alt="image" class="w-100">
                            <div class="text-overlay">
                                <h3><a href="#">DENTISTI</a></h3>
                            </div>
                        </div>
                        <h3><a href="#">DENTISTI</a></h3>
                    </div>
                </div>
            </div>
            <div class="btn btn-success">
                <a href="service">Tutti i servizi <span><i class='fas fa-arrow-right'></i></span></a>
            </div>
        </div>
    </section>
    <!-- services section end -->

    <!-- ecommerce section start -->
    <section class="ecommerce-sec sec-padding">
        <div class="container">
            <div class="title">   
                <h2><span>Piattaforma</span> di e-commerce</h2>
            </div>
            <div class="owl-carousel ecommerce-slide" data-aos="/fade-right" data-aos-duration="1000">
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/amazon.png" alt="logo">
                            <h3>Amazon</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/etsy.png" alt="logo">
                            <h3>Etsy</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/dpop.png" alt="logo">
                            <h3>Depop</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/zalando.png" alt="logo">
                            <h3>Zalando</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/farfetch.png" alt="logo">
                            <h3>Farfetch</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/harrods.png" alt="logo">
                            <h3>Harrods</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/manomano.png" alt="logo">
                            <h3>Manomano</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/luisaviaroma.png" alt="logo">
                            <h3>Luisaviaroma</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/mallporium.png" alt="logo">
                            <h3>Mallporium</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/asos.png" alt="logo">
                            <h3>Asos</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/forzieri.png" alt="logo">
                            <h3>Forzieri</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="ecommerce-item">
                        <a href="#">
                            <img src="images/ecommerce/aboutyou.png" alt="logo">
                            <h3>Aboutyou</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ecommerce section end -->

    <!-- physicalshop section start -->
    <section class="physical-shop-sec sec-padding clearfix">
        <div class="container">
            <div class="title"> 
                <h2>Negozio <span>fisico</span></h2>
            </div>
            <div class="row" data-aos="/fade-left" data-aos-duration="1000">
                <div class="owl-carousel shop-slider">
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Accessories accessori</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/accessories accessori.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Auto parts parti auto</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/auto parts parti auto.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Bags & suitcases borse & valigie</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/bags & suitcases borse & valigie.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Carpets negozio tappeti</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/carpets negozio tappeti.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Chandaliers lampadari</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/chandaliers lampadari.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Clothing negozi abbigliamento</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/clothing negozi abbigliamento.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Courtains tende interno ed esterno</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/courtains tende interno ed esterno.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">DIY & gardening fai da te & giardinaggio</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/DIY & gardening fai da te & giardinaggio.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Doors & windows porte e finestre</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/doors & windows porte e finestre.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Eyewear negozio occhiali</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/eyewear negozio occhiali.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Fishes & aquariums pesci e acquari</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/fishes & aquariums pesci e acquari.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Foto vino x mallporium</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/foto vino x mallporium.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Furnitures arredamento</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/furnitures arredamento.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Gadgets & gifts gadgets & regali</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/gadgets & gifts gadgets & regali.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Jewelery store gioellerie</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/jewelery store gioellerie.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Lingerie lingerie</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/lingerie lingerie.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Matresses materassi</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/matresses materassi.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Musical instruments strumenti musiacali</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/musical instruments strumenti musiacali.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Paintings & lithigraphies quadri & litografie</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/paintings & lithigraphies quadri & litografie.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Perfumeries profumerie</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/perfumeries profumerie.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Pets & accesories pets & accessori</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/pets & accesories pets & accessori.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Shoes scarpe</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/shoes scarpe.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-item">
                            <h3><a href="#">Toys giocattoli</a></h3>
                            <div class="shop-img">
                                <img src="images/physical-shop/toys giocattoli.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <a href="#"><i class="fas fa-store-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="shop-page-link">
                <a href="shop">Mostra più negozi in Bellezza <span><i class='fas fa-arrow-right'></i></span></a>
            </div>
        </div>
    </section>
    <!-- physicalshop section end -->

    <!-- why section start  -->
    <section class="about-sec sec-padding">
        <div class="container">
            <div class="title">
                <h2>Perché <span>instalpay</span></h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 d-block d-lg-flex justify-end order-2 order-md-1">
                    <div class="about-list">
                        <ul>
                            <li>
                                <span class="icon"><i class="far fa-clock"></i></span>
                                <span class="num">1</span>
                                <span class="list">esito in 2 minuti</span>
                            </li>
                            <li>
                                <span class="icon"><i class="far fa-thumbs-up"></i></span>
                                <span class="num">2</span>
                                <span class="list">Trasparenza</span>
                            </li>
                            <li>
                                <span class="icon"><i class="far fa-eye"></i></span>
                                <span class="num">3</span>
                                <span class="list">Termini chiari</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-dollar-sign"></i></span>
                                <span class="num">4</span>
                                <span class="list">nessun costo nascosto</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 t-center order-1 order-md-2">
                    <div class="about-img">
                        <a href="signup"><img src="images/why.png" alt="image"></a>
                    </div>
                    <div class="btn btn-success mt-3 mb-3 mb-0-lg">
                        <a href="profile">Verifica subito l'idoneità</a>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-block d-lg-flex justify-center order-3 order-md-3">
                    <div class="about-list">
                        <ul>
                            <li>
                                <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                                <span class="num">5</span>
                                <span class="list">no interessi</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-money-bill-wave"></i></span>
                                <span class="num">6</span>
                                <span class="list">no busta paga</span>
                            </li>
                            <li>
                                <span class="icon"><i class="far fa-credit-card"></i></span>
                                <span class="num">7</span>
                                <span class="list">no linee di credito</span>
                            </li>
                            <li>
                                <span class="icon"><i class="far fa-smile"></i></span>
                                <span class="num">8</span>
                                <span class="list">Semplicità</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- why section end  -->

    <!-- ================================================ -->
    <!-- category section start -->
    <section class="category-sec sec-padding clearfix">
        <div class="container">
            <div class="title">
                <h2>Cate<span>gorie</span></h2>
            </div>
            <div class="row" data-aos="/fade-left" data-aos-duration="1000">
                <div class="owl-carousel category-slide">
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/3D-printers-stampanti-3D.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">3D printers stampanti 3D</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">3D printers stampanti 3D</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/adult-toys-giocattoli-per-adulti.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Adult toys giocattoli per adulti</a></h3></div>
                                </div>
                            <h3><a href="#">Adult toys giocattoli per adulti</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/skiing-&-snow-si-&-neve.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Skiing & snow si & neve</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Skiing & snow si & neve</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/antenna-playr-antennista.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Antenna playr antennista</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Antenna playr antennista</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/wedding-matrimoni.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Wedding-matrimoni</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Wedding-matrimoni</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/cell-phones-&-tablets-cellulari-e-tablets.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Cell phones & tablets cellulari e tablets</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Cell phones & tablets cellulari e tablets</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/coachbuilder-carrozziere.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Coachbuilder carrozziere</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Coachbuilder carrozziere</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/drones-droni.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Drones droni</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Drones droni</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/flowers-&-bonsai-fiori-&-bonsai.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Flowers & bonsai fiori & bonsai</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Flowers & bonsai fiori & bonsai</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-item">
                            <div class="category-img">
                                <img src="images/category/blackmiths-fabbro.jpg" alt="image" class="w-100">
                                <div class="text-overlay">
                                    <h3><a href="#">Blackmiths fabbro</a></h3>
                                </div>
                            </div>
                            <h3><a href="#">Blackmiths fabbro</a></h3>
                        </div>
                    </div>
                    
                </div>  
            </div>

            <div class="btn btn-success">
                <a href="category">All Categorie <span><i class='fas fa-arrow-right'></i></span></a>
            </div>
        </div>
    </section>
    <!-- category section end -->
    <!-- ========================================================== -->

    <!-- info section end  -->
    <section class="info-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="info-item merchant">
                        <img src="images/info/1.png" alt="">
                        <h2>Merchants</h2>
                        <p>Ci integriamo direttamente con il tuo software aziendale, in modo che i clienti possano presentare domanda in pochi secondi</p>
                        <div class="btn">
                            <a href="signup">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="info-item bg-skyblue consumer">
                        <img src="images/info/2.png" alt="">
                        <h2>Consumers</h2>
                        <p>Ci integriamo direttamente con il tuo software aziendale, in modo che i clienti possano presentare domanda in pochi secondi</p>
                        <div class="btn">
                            <a href="signup">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="info-item developer">
                        <img src="images/info/3.png" alt="">
                        <h2>Developers</h2>
                        <p>Ci integriamo direttamente con il tuo software aziendale, in modo che i clienti possano presentare domanda in pochi secondi</p>
                        <div class="btn">
                            <a href="signup">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info section end  -->

@endsection
