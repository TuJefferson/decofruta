                <!-- modal productohome -->
                @include('store.modales.español.productohome')

                <section class="wn__product__area brown--color pt--80  pb--30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__title text-center">
                                    <h2 class="title__be--2">Productos <span class="color--theme">Destacados</span></h2>
                                    <b>Disfruta de nuestros deliciosos ramos frutales</b>
                                </div>
                            </div>
                        </div>
                        <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
                            @foreach($productos_destacados as $producto)
                            <div class="product product__style--3">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product__thumb">
                                        <a class="first__img" href="">
                                            <img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="{{ $producto->descripcion }}">
                                        </a>
                                        <a class="second__img animation1" href="{{ route('product-detail' , $producto->slug) }}">
                                            <img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="{{ $producto->descripcion }}">
                                        </a>
                                        <div class="hot__box">
                                            <span class="hot-label">{{ $producto->estatus_es }}</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                            <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li>
                                                        <a class="cart" href="cart.html">
                                                            <i class="bi bi-shopping-bag4"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist" href="wishlist.html">
                                                            <i class="bi bi-shopping-cart-full"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="compare" href="#">
                                                            <i class="bi bi-heart-beat"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                            <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                              <i class="fas fa-eye"></i>
                                                          </span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <li class="on">
                                                <i class="fa fa-star-o"></i>
                                            </li>
                                            <li class="on">
                                                <i class="fa fa-star-o"></i>
                                            </li>
                                            <li class="on">
                                                <i class="fa fa-star-o"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-o"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body d-flex justify-content-between align-items-center">
                    &nbsp;
                    <a style="border-radius: 30px" href="{{ route('ver-todos') }}" class="btn btn-primary btn-sm">Ver todos</a>
                </div>

            </section>





            <section class="wn__bestseller__area bg--white pt--80  pb--30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title text-center">
                                <h2 class="title__be--2"><span class="color--theme">Ocasiones</span></h2>
                                <p>Ramos frutales para toda ocasión</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--50">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="product__nav nav justify-content-center" role="tablist">

                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-amor" role="tab">Amor</a>

                                <a class="nav-item nav-link " data-toggle="tab" href="#nav-cumpleanos" role="tab">Cumpleaños</a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-nacimiento" role="tab">Nacimiento</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-parael" role="tab">Para ÉL</a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-paraella" role="tab">Para Ella</a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-felicitaciones" role="tab">Felicitaciones</a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-celebraciones" role="tab">Celebraciones</a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-sanvalentin" role="tab">San Valentín</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab__container mt--60">
                        <!-- ocacion amor -->
                        <div class="row single__tab tab-pane fade show active" id="nav-amor" role="tabpanel">
                            <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                                @foreach($productos_amor as $producto)
                                <div class="single__product">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product product__style--3">
                                            <div class="product__thumb">
                                                <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                                <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                                <div class="hot__box">
                                                    <span class="hot-label">{{ $producto->estatus_es }}</span>
                                                </div>
                                            </div>
                                            <div class="product__content content--center content--center">
                                                <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                                <ul class="prize d-flex">
                                                    <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                                    <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                                </ul>
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        <ul class="add_to_links">
                                                            <li>
                                                                <a class="cart" href="cart.html">
                                                                    <i class="bi bi-shopping-bag4"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="wishlist" href="wishlist.html">
                                                                    <i class="bi bi-shopping-cart-full"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="compare" href="#">
                                                                    <i class="bi bi-heart-beat"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                                    <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                                      <i class="fas fa-eye"></i>
                                                                  </span>
                                                              </a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>

                                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>

                                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>

                                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>

                                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Ocacion cumpleaños -->
                    <div class="row single__tab tab-pane fade" id="nav-cumpleanos" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            @foreach($productos_cumpleanos as $producto)
                            <div class="single__product">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">{{ $producto->estatus_es }}</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center content--center">
                                            <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                            <ul class="prize d-flex">
                                                <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                                <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li>
                                                            <a class="cart" href="cart.html">
                                                                <i class="bi bi-shopping-bag4"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="wishlist" href="wishlist.html">
                                                                <i class="bi bi-shopping-cart-full"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="compare" href="#">
                                                                <i class="bi bi-heart-beat"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                                <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                                  <i class="fas fa-eye"></i>
                                                              </span>
                                                          </a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <div class="product__hover--content">
                                            <ul class="rating d-flex">
                                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>

                                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>

                                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>

                                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>

                                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Ocacion nacimiento -->
                <div class="row single__tab tab-pane fade" id="nav-nacimiento" role="tabpanel">
                    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                        @foreach($productos_nacimiento as $producto)
                        <div class="single__product">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product product__style--3">
                                    <div class="product__thumb">
                                        <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                        <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                        <div class="hot__box">
                                            <span class="hot-label">{{ $producto->estatus_es }}</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center content--center">
                                        <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                        <ul class="prize d-flex">
                                            <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                            <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li>
                                                        <a class="cart" href="cart.html">
                                                            <i class="bi bi-shopping-bag4"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist" href="wishlist.html">
                                                            <i class="bi bi-shopping-cart-full"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="compare" href="#">
                                                            <i class="bi bi-heart-beat"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                            <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                              <i class="fas fa-eye"></i>
                                                          </span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>

                                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>

                                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>

                                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>

                                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Ocacion parael -->
            <div class="row single__tab tab-pane fade" id="nav-parael" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    @foreach($productos_parael as $producto)
                    <div class="single__product">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">{{ $producto->estatus_es }}</span>
                                    </div>
                                </div>
                                <div class="product__content content--center content--center">
                                    <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                    <ul class="prize d-flex">
                                        <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                        <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li>
                                                    <a class="cart" href="cart.html">
                                                        <i class="bi bi-shopping-bag4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="wishlist" href="wishlist.html">
                                                        <i class="bi bi-shopping-cart-full"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="compare" href="#">
                                                        <i class="bi bi-heart-beat"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                        <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                          <i class="fas fa-eye"></i>
                                                      </span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__hover--content">
                                    <ul class="rating d-flex">
                                        <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>

                                        <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>

                                        <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>

                                        <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>

                                        <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Ocacion paraella -->
        <div class="row single__tab tab-pane fade" id="nav-paraella" role="tabpanel">
            <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                @foreach($productos_paraella as $producto)
                <div class="single__product">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product product__style--3">
                            <div class="product__thumb">
                                <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                                <div class="hot__box">
                                    <span class="hot-label">{{ $producto->estatus_es }}</span>
                                </div>
                            </div>
                            <div class="product__content content--center content--center">
                                <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                                <ul class="prize d-flex">
                                    <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                    <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                </ul>
                                <div class="action">
                                    <div class="actions_inner">
                                        <ul class="add_to_links">
                                            <li>
                                                <a class="cart" href="cart.html">
                                                    <i class="bi bi-shopping-bag4"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="wishlist" href="wishlist.html">
                                                    <i class="bi bi-shopping-cart-full"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="compare" href="#">
                                                    <i class="bi bi-heart-beat"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                    <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                      <i class="fas fa-eye"></i>
                                                  </span>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__hover--content">
                                <ul class="rating d-flex">
                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>

                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>

                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>

                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>

                                    <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Ocacion felicitaciones -->
    <div class="row single__tab tab-pane fade" id="nav-felicitaciones" role="tabpanel">
        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
            @foreach($productos_felicitaciones as $producto)
            <div class="single__product">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product product__style--3">
                        <div class="product__thumb">
                            <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                            <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                            <div class="hot__box">
                                <span class="hot-label">{{ $producto->estatus_es }}</span>
                            </div>
                        </div>
                        <div class="product__content content--center content--center">
                            <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                            <ul class="prize d-flex">
                                <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                                <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                            </ul>
                            <div class="action">
                                <div class="actions_inner">
                                    <ul class="add_to_links">
                                        <li>
                                            <a class="cart" href="cart.html">
                                                <i class="bi bi-shopping-bag4"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="wishlist" href="wishlist.html">
                                                <i class="bi bi-shopping-cart-full"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="compare" href="#">
                                                <i class="bi bi-heart-beat"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                                <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                                  <i class="fas fa-eye"></i>
                                              </span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="product__hover--content">
                            <ul class="rating d-flex">
                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                    <i class="fas fa-star-half-alt"></i>
                                </span>

                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                    <i class="fas fa-star-half-alt"></i>
                                </span>

                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                    <i class="fas fa-star-half-alt"></i>
                                </span>

                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                    <i class="fas fa-star-half-alt"></i>
                                </span>

                                <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Ocacion celebraciones -->
<div class="row single__tab tab-pane fade" id="nav-celebraciones" role="tabpanel">
    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
        @foreach($productos_celebraciones as $producto)
        <div class="single__product">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                        <div class="hot__box">
                            <span class="hot-label">{{ $producto->estatus_es }}</span>
                        </div>
                    </div>
                    <div class="product__content content--center content--center">
                        <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                        <ul class="prize d-flex">
                            <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                            <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                        </ul>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li>
                                        <a class="cart" href="cart.html">
                                            <i class="bi bi-shopping-bag4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="wishlist" href="wishlist.html">
                                            <i class="bi bi-shopping-cart-full"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="compare" href="#">
                                            <i class="bi bi-heart-beat"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                            <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                              <i class="fas fa-eye"></i>
                                          </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<!-- Ocacion sanvalentin -->
<div class="row single__tab tab-pane fade" id="nav-sanvalentin" role="tabpanel">
    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
        @foreach($productos_sanvalentin as $producto)
        <div class="single__product">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img src="{{ asset('img/productos/'.$producto->imagen) }}   " alt="product image"></a>
                        <div class="hot__box">
                            <span class="hot-label">{{ $producto->estatus_es }}</span>
                        </div>
                    </div>
                    <div class="product__content content--center content--center">
                        <h4><a href="single-product.html">{{ $producto->nombre }}</a></h4>
                        <ul class="prize d-flex">
                            <li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                            <li class="old_prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
                        </ul>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li>
                                        <a class="cart" href="cart.html">
                                            <i class="bi bi-shopping-bag4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="wishlist" href="wishlist.html">
                                            <i class="bi bi-shopping-cart-full"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="compare" href="#">
                                            <i class="bi bi-heart-beat"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#quick-view{{$producto->id}}">
                                            <span style="font-size: 20px; color:rgb(40, 176, 176) ;">
                                              <i class="fas fa-eye"></i>
                                          </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>

                            <span style="font-size: 15px; color: rgb(40, 176, 176);">
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
</div>
</section>


                <!-- <section class="wn__newsletter__area bg-image--2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                            <div class="section__title text-center">
                                <h2>Quédate con nosotros</h2>

                            </div>
                            <div class="newsletter__block text-center">
                                <p>Suscríbase a nuestros boletines informativos ahora y manténgase actualizado con nuevas colecciones y ofertas exclusivas.</p>
                                <form action="#">
                                    <div class="newsletter__box">
                                        <input type="email" placeholder="Ingresa tu Email">
                                        <button>Suscribir</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->
