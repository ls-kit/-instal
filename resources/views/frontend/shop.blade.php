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
                                <h3><a href="#">ABBIGLIAMENTO</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/ABBIGLIAMENTO.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">SCARPE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/SCARPE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">ACCESSORI ABBIGLAIAMENTO</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/ACCESSORI ABBIGLAIAMENTO.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">PROFUMERIE & COSMETICI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/PROFUMERIE & COSMETICI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">BICICLETTE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/BICICLETTE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">LAMPADARI & LAMPADE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/LAMPADARI & LAMPADE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">TAPPETI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/TAPPETI .jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">ARREDAMENTO</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/ARREDAMENTO.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">GIOIELLERIE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/GIOIELLERIE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">MATERASSI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/MATERASSI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">STRUMENTI MUSICALI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/STRUMENTI MUSICALI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">PESCI & ACQUARI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/PESCI & ACQUARI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">OCCHIALI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/OCCHIALI .jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">TENDE ESTERNO & INTERNO</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/TENDE ESTERNO & INTERNO.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">GADGETS & REGALI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/GADGETS & REGALI .jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">PETS & ACCESSORI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/PETS & ACCESSORI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">PORTE & FINESTRE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/PORTE & FINESTRE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">QUADRI & LITOGRAFIE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/QUADRI & LITOGRAFIE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">DIY & GARDENING</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/DIY & GARDENING.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">AUTO RICAMBI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/AUTO RICAMBI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">VINO & LIQUORI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/VINO & LIQUORI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">GIOCATTOLI</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/GIOCATTOLI.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">BORSE & VALIGIE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/BORSE & VALIGIE.jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">LINGERIE</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/LINGERIE .jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 fix">
                            <div class="shop-item">
                                <h3><a href="#">PARRUCCHE & EXTENTIONS</a></h3>
                                <div class="shop-img">
                                    <img src="images/physical-shop/PARRUCCHE & EXTENTIONS .jpg" alt="image" class="w-100">
                                    <div class="text-overlay">
                                        <a href="#"><i class="fas fa-store-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop section end -->
@endsection
