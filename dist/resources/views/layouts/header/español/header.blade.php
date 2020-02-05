 
  <!-- modal inicia sesion -->
  @include('store.modales.español.iniciosesion')

  <!-- modal buscar -->
  @include('store.modales.español.buscar')

  <header>
    <!-- TOPBAR -->
    <div class="topbar topbar-dark">
      <div class="container-fluid">
        <!-- MOVIL -->
        <div class="topbar-text dropdown d-md-none">
          <a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">ATC</a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="">
                <img class="mb-1 mr-1" src="{{ asset('img/map-pin.svg') }}">(00) 33 169 7720
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="">
                <img class="mb-1 mr-1" src="{{ asset('img/map-pin.svg') }}">Rastreo de orden
              </a>
            </li>
          </ul>
        </div>
        <!-- MOVIL -->
        <!-- ESCRITORIO -->
        <div class="topbar-text text-nowrap d-none d-md-inline-block">
          <img class="mb-1 mr-1" src="{{ asset('img/map-pin.svg') }}">
          <span class="text-muted mr-1">Contacto</span>
          <a class="topbar-link" href="">(0414) 229-59-78</a>
          <img style="margin-left: 15px" class="mb-1 mr-1" src="{{ asset('img/map-pin.svg') }}">
          <span class="text-muted mr-1">Verificar Orden</span>
          <!-- <a class="topbar-link" href="">(00) 33 169 7720</a> -->
         <!--  <img style="margin-left: 15px" class="mb-1 mr-1" src="{{ asset('img/help-circle.svg') }}">
          <span class="text-muted mr-1">Preguntas frecuentes</span> -->
          <!-- <a class="topbar-link" href="">(00) 33 169 7720</a> -->
          <img style="margin-left: 15px" class="mb-1 mr-1" src="{{ asset('img/phone.svg') }}">
          <span class="text-muted mr-1">
            <a href="{{ route('contacto')}}">Contactanos</a>
          </span>
        </div>
        <div class="ml-3 text-nowrap">
          <div class="topbar-text dropdown disable-autohide ">
            <div class="ml-3 text-nowrap navbar-expand-lg d-none d-sm-none d-lg-block">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Moneda</a>
                  <ul class="dropdown-menu">
                    @foreach($monedas as $moneda)
                    <li>
                      <a class="dropdown-item" href="">{{$moneda->nombre}}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Idioma</a>
                  <ul style="position: absolute; left: -15px;" class="dropdown-menu">
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                    @foreach (array_keys(config('locale.languages')) as $lang)
                    @if ($lang != App::getLocale())
                    <li>
                      <a class="dropdown-item" href="{!! route('lang.swap', $lang) !!}">
                        @if($lang == 'en')
                        Ingles
                        @else
                        Español
                        @endif
                      </a>
                    </li>
                    @endif
                    @endforeach
                    @endif
                  </ul>
                </li>
                <li style="color: #31939a" class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Paises</a>
                  <ul style="position: absolute; left: -125px;" class="dropdown-menu">
                    @foreach($paises as $pais)
                    <li>
                     <a class="dropdown-item" href="{{ route('home-'.$pais->href_pais) }}"><img class="mb-1 mr-2" src="{{ asset('img/paises/'.$pais->imagen_pais) }}" alt="USA">
                       {{$pais->nombre}}</a>
                     </li>
                     @endforeach
                   </ul>
                 </li>
               </ul>
             </div>
             <!-- ESCRITORIO -->
             <!-- MOVIL -->
             <div class="d-lg-none d-md-block">
              <a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">
                <!-- <img class="mr-2" width="20" src="img/flags/en.png" alt="" > -->
                <span style="font-size: 1.3em; color: #31939a;"> <i class="fas fa-language"></i> </span> / <span style="font-size: 1.3em; color: #31939a;"> <i class="fas fa-dollar-sign"></i> </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item">
                  <select class="custom-select custom-select-sm">
                    @foreach($monedas as $moneda)
                    <option value="usd">{{$moneda->name}}</option>
                    @endforeach
                    
                  </select>
                </li>
                @foreach($paises as $pais)
                <li>
                  <a class="dropdown-item pb-1" href="#">
                    <img class="mr-2" width="20" src="{{ asset('img/paises/'.$pais->imagen_pais) }}" alt="Français"/>{{ $pais->nombre}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- MOVIL -->
          </div>
        </div>
      </div>
    </div>
    <!-- FIN TOPBAR -->

    <!-- HEADER -->
    <div class="navbar-sticky">
      <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="{{ route('home') }}" style="min-width: 7rem;">
            <img width="200" src="{{ asset('img/logo/ldecofrutag.png') }}" alt="Decofruta"/>
          </a>

          <a class="navbar-brand d-sm-none mr-2 order-lg-1" href="{{ route('home') }}" style="min-width: 4.625rem;">
            <img width="74" src="{{ asset('img/iconos/icog.png') }}" alt="Decofruta"/>
          </a>

          <div class="navbar-toolbar d-flex align-items-center order-lg-3">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>


            <a class="search__active navbar-tool d-none d-lg-flex">
              <span class="navbar-tool-tooltip">Buscar</span>
              <div class="navbar-tool-icon-box">
                <span style="font-size: 1.2em; color: #4fbdba;">
                  <i class="fas fa-search"></i>
                </span>
              </div>
            </a>

            <a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html">
              <span class="navbar-tool-tooltip">Favoritos</span>
              <div class="navbar-tool-icon-box">
                <span style="font-size: 1.2em; color: #4fbdba;">
                  <i class="fas fa-heart"></i>
                </span>
              </div>
            </a>
            <a class="navbar-tool ml-1 mr-n1" href="#signin-modal" data-toggle="modal">

              <span class="navbar-tool-tooltip">Inicio Sesión</span>
              <div class="navbar-tool-icon-box">
                <span style="font-size: 1.2em; color: #4fbdba;">
                  <i class="far fa-user"></i>
                </span>
              </div>
            </a>

            <div class="navbar-tool dropdown ml-3">
              <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{route('cart-show')}}">
                <span class="navbar-tool-label">4</span>
                <span style="font-size: 1.3em; color: #4fbdba;">
                  <!-- <i class="fas fa-shopping-cart"></i> -->
                  <i class="fas fa-cart-arrow-down"></i>
                </span>
              </a>
              <!-- Cart dropdown-->
              <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                <div class="widget widget-cart px-3 pt-2 pb-3">
                  <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">

                   <div class="widget-cart-item pb-2 border-bottom">

                    <button class="close text-danger" type="button" aria-label="Remove">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="media align-items-center">
                      <a class="d-block mr-2" href="shop-single-v1.html">
                        <img width="64" src="img/shop/cart/widget/01.jpg" alt="Product"/>
                      </a>
                      <div class="media-body">
                        <h6 class="widget-product-title">
                          <a href="shop-single-v1.html">Women Colorblock Sneakers</a>
                        </h6>

                        <div class="widget-product-meta">
                          <span class="text-accent mr-2">$150.<small>00</small></span>
                          <span class="text-muted">x 1</span>
                        </div>

                      </div>
                    </div>
                  </div>


                  <div class="widget-cart-item py-2 border-bottom">
                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                    <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/02.jpg" alt="Product"/></a>
                      <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="widget-cart-item py-2 border-bottom">
                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                    <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/03.jpg" alt="Product"/></a>
                      <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="widget-cart-item py-2 border-bottom">
                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                    <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/04.jpg" alt="Product"/></a>
                      <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                  <div class="font-size-sm mr-2 py-2">
                    <span class="text-muted">Subtotal:</span>
                    <span class="text-accent font-size-base ml-1">$265.<small>00</small></span>
                  </div>
                  <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart
                    <i class="czi-arrow-right ml-1 mr-n1"></i>
                  </a>
                </div>
                <a class="btn btn-primary btn-sm btn-block" href="{{route('cart-show')}}">
                  <i class="czi-card mr-2 font-size-base align-middle"></i>Checkout
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
        




          <!-- Primary menu-->
          <ul class="navbar-nav" >
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle pl-0" href="" data-toggle="dropdown">
                Categorias 
                <span style="font-size: 1.2em; color:#4fbdba;">
                  <i class="fas fa-caret-down"></i>
                </span>
              </a>

                  <ul class="dropdown-menu">
                   
                    <li class="dropdown mega-dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">
                        Ocasiones
                      </a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <!-- <h6 class="font-size-base mb-3">Computers</h6> -->
                              <ul class="widget-list">
                              @foreach($categorias as $categoria)
                                <li class="widget-list-item pb-1">
                                  <a class="widget-list-link" href="{{ route('ver-categoria', $categoria->id) }}">{{ $categoria->nombre}}</a>
                                </li>
                              @endforeach
                              </ul>
                            </div>
                          </div>
                          
                          <!-- <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                            <a class="d-block mb-2" href="#">
                            <img src="img/shop/departments/07.jpg" alt="Computers &amp; Accessories"></a>
                            <div class="font-size-sm mb-3">Starting from <span class="font-weight-medium">$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div> -->
                        </div>
                      </div>
                    </li>

                    <li class="dropdown mega-dropdown">
                      <a class="dropdown-item dropdown-toggle" href="" data-toggle="dropdown">
                        Temporadas
                      </a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <!-- <h6 class="font-size-base mb-3">Computers</h6> -->
                              <ul class="widget-list">
                              @foreach($temporadas as $temporada)
                                <li class="widget-list-item pb-1">
                                  <a class="widget-list-link" href="{{ route('ver-temporada', $temporada->id) }}">{{ $temporada->nombre}}</a>
                                </li>
                              @endforeach
                              </ul>
                            </div>
                          </div>
                          
                          <!-- <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                            <a class="d-block mb-2" href="#">
                            <img src="img/shop/departments/07.jpg" alt="Computers &amp; Accessories"></a>
                            <div class="font-size-sm mb-3">Starting from <span class="font-weight-medium">$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div> -->
                        </div>
                      </div>
                    </li>
                
                  </ul>
                </li>
        


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('ver-temporada', $temporadaunica->id) }}">{{ $temporadaunica->nombre }}
              </a>
            </li>




            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Postres y Bebidas</a>
              <ul class="dropdown-menu">
                <li class="dropdown">
                  <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Postres</a>
                  <ul class="dropdown-menu">
                    @foreach($postres as $postre)
                    <li>
                      <a class="dropdown-item" href="">{{ $postre->nombre }}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Bebidas</a>
                  <ul class="dropdown-menu">
                    @foreach($bebidas as $bebida)
                    <li>
                      <a class="dropdown-item" href="">{{ $bebida->nombre }}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('home') }}" data-toggle="dropdown">Decolatier
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('home') }}" data-toggle="dropdown">Ofertas Especiales
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('home') }}" data-toggle="dropdown">Regalos corporativos
              </a>
            </li>

        
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
              <div class="dropdown-menu p-0">
                <div class="d-flex flex-wrap flex-md-nowrap px-2">
                  <div class="mega-dropdown-column py-4 px-3">
                    <div class="widget widget-links mb-3">
                      <h6 class="font-size-base mb-3">Shop layouts</h6>
                      <ul class="widget-list">
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                      </ul>
                    </div>
                    <div class="widget widget-links">
                      <h6 class="font-size-base mb-3">Marketplace</h6>
                      <ul class="widget-list">
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="mega-dropdown-column py-4 px-3">
                    <div class="widget widget-links">
                      <h6 class="font-size-base mb-3">Shop pages</h6>
                      <ul class="widget-list">
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                        <li class="widget-list-item pb-1"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="mega-dropdown-column py-4 pr-3"><a class="d-block" href="#"><img src="img/shop/menu-banner.jpg" alt="Promo banner"/></a></div>
                </div>
              </div>
            </li> -->

            <!-- <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbar Variants</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                    <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                    <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                    <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                    <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                    <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                    <li><a class="dropdown-item" href="navbar-electro-store.html">Electronics Store</a></li>
                    <li><a class="dropdown-item" href="navbar-marketplace.html">Marketplace</a></li>
                  </ul>
                </li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                    <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                    <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">404 Not Found</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                    <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog List Layouts</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                    <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Grid Layouts</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                    <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="blog-single.html">Single Post</a></li>
              </ul>
            </li> -->

                  </ul>
                </div>
              </div>
            </div>
            <!-- Search collapse-->
            <div class="search-box collapse" id="searchBox">
              <div class="card pt-2 pb-4 border-0 rounded-0">
                <div class="container">
                  <div class="input-group-overlay">
                    <div class="input-group-prepend-overlay">
                      <span class="input-group-text">
                        <span style="font-size: 1.2em; color: #4fbdba;">
                  <i class="fas fa-search"></i>
                </span>
                      </span>
                    </div>
                    <input class="form-control prepended-form-control" type="text" placeholder="Buscar productos">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Page Content-->











