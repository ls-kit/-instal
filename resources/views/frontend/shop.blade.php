@extends('frontend.layouts.app')
@section('content')
    <!-- breadcrumb section start -->
    <section class="breadcrump-sec sec-padding">
        <div class="container">
            <div class="breadcrumb-text t-center">
                <h2>Shop</h2>
                <span><a href="index">Home</a> / </span>
                <span class="disabled">Shop</span>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- shop section start -->
    <section class="shop-sec physical-shop-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">
                    <div class="product-category">
                        <ul>
                            <h4>CATEGORIE</h4>
                            <li><a href="#">Make-up</a></li>
                            <li><a href="#">Cura di sé</a></li>
                            <li><a href="#">Profumi</a></li>
                            <li><a href="#">Per il viso</a></li>
                            <li><a href="#">Per i capelli</a></li>

                            <h4>MOSTRA SOLO</h4>
                            <li><a href="#">In-store</a></li>
                            <li><a href="#">In promozione</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="filter">
                        <span class="filter-title">Ordina</span>
                        <select name="" id="">
                            <option value="Popolari">Popolari</option>
                            <option value="Nuovi">Nuovi</option>
                            <option value="Nome A-Z">Nome A-Z</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/accessories accessori.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Accessories accessori</a>
                                    </div>
                                </div>
                                <h3><a href="#">Accessories accessori</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/auto parts parti auto.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Auto parts parti auto</a>
                                    </div>
                                </div>
                                <h3><a href="#">Auto parts parti auto</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/bags & suitcases borse & valigie.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Bags & suitcases borse & valigie</a>
                                    </div>
                                </div>
                                <h3><a href="#">Bags & suitcases borse & valigie</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/carpets negozio tappeti.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Carpets negozio tappeti</a></i>
                                    </div>
                                </div>
                                <h3><a href="#">Carpets negozio tappeti</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/chandaliers lampadari.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Chandaliers lampadari</a></i>
                                    </div>
                                </div>
                                <h3><a href="#">Chandaliers lampadari</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/clothing negozi abbigliamento.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Clothing negozi abbigliamento</a>
                                    </div>
                                </div>
                                <h3><a href="#">Clothing negozi abbigliamento</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/courtains tende interno ed esterno.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Courtains tende interno ed esterno</a>
                                    </div>
                                </div>
                                <h3><a href="#">Courtains tende interno ed esterno</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/DIY & gardening fai da te & giardinaggio.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">DIY & gardening fai da te & giardinaggio</a>
                                    </div>
                                </div>
                                <h3><a href="#">DIY & gardening fai da te & giardinaggio</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/doors & windows porte e finestre.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Doors & windows porte e finestre</a>
                                    </div>
                                </div>
                                <h3><a href="#">Doors & windows porte e finestre</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/eyewear negozio occhiali.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Eyewear negozio occhiali</a>
                                    </div>
                                </div>
                                <h3><a href="#">Eyewear negozio occhiali</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/fishes & aquariums pesci e acquari.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Fishes & aquariums pesci e acquari</a>
                                    </div>
                                </div>
                                <h3><a href="#">Fishes & aquariums pesci e acquari</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/foto vino x mallporium.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Foto vino x mallporium</a>
                                    </div>
                                </div>
                                <h3><a href="#">Foto vino x mallporium</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/furnitures arredamento.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Furnitures arredamento</a>
                                    </div>
                                </div>
                                <h3><a href="#">Furnitures arredamento</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/gadgets & gifts gadgets & regali.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Gadgets & gifts gadgets & regali</a>
                                    </div>
                                </div>
                                <h3><a href="#">Gadgets & gifts gadgets & regali</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/jewelery store gioellerie.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Jewelery store gioellerie</a>
                                    </div>
                                </div>
                                <h3><a href="#">Jewelery store gioellerie</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/lingerie lingerie.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Lingerie lingerie</a>
                                    </div>
                                </div>
                                <h3><a href="#">Lingerie lingerie</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/matresses materassi.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Matresses materassi</a>
                                    </div>
                                </div>
                                <h3><a href="#">Matresses materassi</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/musical instruments strumenti musiacali.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Musical instruments strumenti musiacali</a>
                                    </div>
                                </div>
                                <h3><a href="#">Musical instruments strumenti musiacali</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/paintings & lithigraphies quadri & litografie.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Paintings & lithigraphies quadri & litografie</a>
                                    </div>
                                </div>
                                <h3><a href="#">Paintings & lithigraphies quadri & litografie</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/perfumeries profumerie.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Perfumeries profumerie</a>
                                    </div>
                                </div>
                                <h3><a href="#">Perfumeries profumerie</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/pets & accesories pets & accessori.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Pets & accesories pets & accessori</a>
                                    </div>
                                </div>
                                <h3><a href="#">Pets & accesories pets & accessori</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/shoes scarpe.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Shoes scarpe</a>
                                    </div>
                                </div>
                                <h3><a href="#">Shoes scarpe</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <div class="shop-img">
                                    <img src="images/physical-shop/toys giocattoli.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#">Toys giocattoli</a>
                                    </div>
                                </div>
                                <h3><a href="#">Toys giocattoli</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop section end -->
@endsection
