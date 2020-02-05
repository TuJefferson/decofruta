<!-- modal productohome -->
    @include('store.modales.español.productohome')

	<div style="background-image: url(img/productos/pp.jpg);" class="ht__bradcaump__area bg-image--6">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title">Shop Grid</h2>
						<nav class="bradcaump-content">
							<a class="breadcrumb_item" href="">Home</a>
							<span class="brd-separetor">/</span>
							<span class="breadcrumb_item active">Shop Grid</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">List left sidebar</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Shop list left sidebar</h1>
        </div>
      </div>
    </div>


    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <!-- Sidebar-->
          <div class="cz-sidebar rounded-lg box-shadow-lg" id="shop-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
              <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close">
              	<span class="d-inline-block font-size-xs font-weight-normal align-middle">Cerrar filtro</span>
              	<span class="d-inline-block align-middle ml-2" aria-hidden="true">×</span>
              </button>
            </div>
            <div class="cz-sidebar-body" data-simplebar="init" data-simplebar-auto-hide="true">
            	<div class="simplebar-wrapper" style="margin: -30px -16px -30px -30px;">
            		<div class="simplebar-height-auto-observer-wrapper">
            			<div class="simplebar-height-auto-observer">
            				
            			</div>
            		</div>
            		<div class="simplebar-mask">
            			<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
            				<div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
            					<div class="simplebar-content" style="padding: 30px 16px 30px 30px;">



						
							<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title">Categorias</h3>
								<ul>
									@foreach($categorias as $categoria)

									<li><a href="{{ route('ver-categoria', $categoria->id) }}">{{ $categoria->nombre }}<span>0</span></a></li>
									@endforeach
									
								</ul>
							</aside>
							<aside class="wedget__categories pro--range">
								<h3 class="wedget__title">Filter by price</h3>
								<div class="content-shopby">
									<div class="price_filter s-filter clear">
										<form action="#" method="GET">
											<div id="slider-range"></div>
											<div class="slider__range--output">
												<div class="price__output--wrap">
													<div class="price--output">
														<span>Price :</span><input type="text" id="amount" readonly="">
													</div>
													<div class="price--filter">
														<a href="#">Filter</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</aside>
							<aside class="wedget__categories poroduct--tag">
								<h3 class="wedget__title">Product Tags</h3>
								<ul>
									<li><a href="#">Biography</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Cookbooks</a></li>
									<li><a href="#">Health & Fitness</a></li>
									<li><a href="#">History</a></li>
									<li><a href="#">Mystery</a></li>
									<li><a href="#">Inspiration</a></li>
									<li><a href="#">Religion</a></li>
									<li><a href="#">Fiction</a></li>
									<li><a href="#">Fantasy</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">Toys</a></li>
									<li><a href="#">Hoodies</a></li>
								</ul>
							</aside>
							<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
							</aside>
									
              <!-- Categories-->
              <div class="widget widget-categories mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Categories</h3>
                <div class="accordion mt-n1" id="shop-categories">
                  <!-- Shoes-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shoes" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="shoes" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">1,953</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Pumps &amp; High Heels</span><span class="font-size-xs text-muted ml-3">247</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ballerinas &amp; Flats</span><span class="font-size-xs text-muted ml-3">156</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sandals</span><span class="font-size-xs text-muted ml-3">310</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sneakers</span><span class="font-size-xs text-muted ml-3">402</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Boots</span><span class="font-size-xs text-muted ml-3">393</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ankle Boots</span><span class="font-size-xs text-muted ml-3">50</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Loafers</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Slip-on</span><span class="font-size-xs text-muted ml-3">122</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Flip Flops</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Clogs &amp; Mules</span><span class="font-size-xs text-muted ml-3">24</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Athletic Shoes</span><span class="font-size-xs text-muted ml-3">31</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Oxfords</span><span class="font-size-xs text-muted ml-3">9</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Smart Shoes</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Clothing-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#clothing" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="clothing">Clothing<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse show" id="clothing" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">2,548</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Blazers &amp; Suits</span><span class="font-size-xs text-muted ml-3">235</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Blouses</span><span class="font-size-xs text-muted ml-3">410</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Cardigans &amp; Jumpers</span><span class="font-size-xs text-muted ml-3">107</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Dresses</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Hoodie &amp; Sweatshirts</span><span class="font-size-xs text-muted ml-3">122</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Jackets &amp; Coats</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Jeans</span><span class="font-size-xs text-muted ml-3">215</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lingerie</span><span class="font-size-xs text-muted ml-3">150</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Maternity Wear</span><span class="font-size-xs text-muted ml-3">8</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Nightwear</span><span class="font-size-xs text-muted ml-3">26</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Shirts</span><span class="font-size-xs text-muted ml-3">164</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Shorts</span><span class="font-size-xs text-muted ml-3">147</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Socks &amp; Tights</span><span class="font-size-xs text-muted ml-3">139</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sportswear</span><span class="font-size-xs text-muted ml-3">65</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Swimwear</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">T-shirts &amp; Vests</span><span class="font-size-xs text-muted ml-3">209</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Tops</span><span class="font-size-xs text-muted ml-3">132</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Trousers</span><span class="font-size-xs text-muted ml-3">105</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Underwear</span><span class="font-size-xs text-muted ml-3">87</span></a></li>
                          </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 538px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 68px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Bags-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#bags" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="bags">Bags<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="bags" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">801</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Handbags</span><span class="font-size-xs text-muted ml-3">238</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Backpacks</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Wallets</span><span class="font-size-xs text-muted ml-3">104</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Luggage</span><span class="font-size-xs text-muted ml-3">115</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lumbar Packs</span><span class="font-size-xs text-muted ml-3">17</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Duffle Bags</span><span class="font-size-xs text-muted ml-3">9</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Bag / Travel Accessories</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Diaper Bags</span><span class="font-size-xs text-muted ml-3">5</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lunch Bags</span><span class="font-size-xs text-muted ml-3">8</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Messenger Bags</span><span class="font-size-xs text-muted ml-3">2</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Laptop Bags</span><span class="font-size-xs text-muted ml-3">31</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Briefcases</span><span class="font-size-xs text-muted ml-3">45</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sport Bags</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sunglasses-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#sunglasses" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">Sunglasses<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="sunglasses" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">1,842</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Sunglasses</span><span class="font-size-xs text-muted ml-3">953</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Sunglasses</span><span class="font-size-xs text-muted ml-3">589</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Classic Sunglasses</span><span class="font-size-xs text-muted ml-3">300</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Watches-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#watches" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="watches">Watches<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="watches" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">734</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Watches</span><span class="font-size-xs text-muted ml-3">572</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Casual Watches</span><span class="font-size-xs text-muted ml-3">110</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Luxury Watches</span><span class="font-size-xs text-muted ml-3">34</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Watches</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Accessories-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#accessories" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="accessories">Accessories<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="accessories" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">920</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Belts</span><span class="font-size-xs text-muted ml-3">364</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Hats</span><span class="font-size-xs text-muted ml-3">405</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Jewelry</span><span class="font-size-xs text-muted ml-3">131</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Cosmetics</span><span class="font-size-xs text-muted ml-3">20</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Price range-->
              <div class="widget mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Price</h3>
                <div class="cz-range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                  <div class="cz-range-slider-ui noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(25%, 0px) scale(0.43, 1);"></div></div><div class="noUi-origin" style="transform: translate(-750%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="680.0" aria-valuenow="250.0" aria-valuetext="$250"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$250</div></div></div><div class="noUi-origin" style="transform: translate(-320%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="250.0" aria-valuemax="1000.0" aria-valuenow="680.0" aria-valuetext="$680"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$680</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 1%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 2%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 3%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 4%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 6%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 7%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 8%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 9%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 10%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 11%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 12%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 13%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 14%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 16%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 17%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 18%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 19%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 20%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 21%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 22%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 23%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 24%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 25%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="250" style="left: 25%;">250</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 26%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 27%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 28%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 29%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 30%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 31%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 32%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 33%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 34%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 36%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 37%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 38%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 39%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 40%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 41%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 42%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 43%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 44%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 46%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 47%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 48%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 49%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="500" style="left: 50%;">500</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 51%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 52%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 53%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 54%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 56%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 57%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 58%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 59%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 60%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 61%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 62%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 63%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 64%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 66%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 67%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 68%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 69%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 70%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 71%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 72%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 73%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 74%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 75%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="750" style="left: 75%;">750</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 76%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 77%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 78%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 79%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 80%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 81%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 82%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 83%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 84%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 86%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 87%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 88%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 89%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 90%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 91%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 92%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 93%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 94%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 96%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 97%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 98%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 99%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="1000" style="left: 100%;">1000</div></div></div>
                  <div class="d-flex pb-1">
                    <div class="w-50 pr-2 mr-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control cz-range-slider-value-min" type="text">
                      </div>
                    </div>
                    <div class="w-50 pl-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control cz-range-slider-value-max" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter by Brand-->
              <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Brand</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                  <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                  <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="adidas">
                      <label class="custom-control-label cz-filter-item-text" for="adidas">Adidas</label>
                    </div><span class="font-size-xs text-muted">425</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="ataylor">
                      <label class="custom-control-label cz-filter-item-text" for="ataylor">Ann Taylor</label>
                    </div><span class="font-size-xs text-muted">15</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="armani">
                      <label class="custom-control-label cz-filter-item-text" for="armani">Armani</label>
                    </div><span class="font-size-xs text-muted">18</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="banana">
                      <label class="custom-control-label cz-filter-item-text" for="banana">Banana Republic</label>
                    </div><span class="font-size-xs text-muted">103</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="bilabong">
                      <label class="custom-control-label cz-filter-item-text" for="bilabong">Bilabong</label>
                    </div><span class="font-size-xs text-muted">27</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="birkenstock">
                      <label class="custom-control-label cz-filter-item-text" for="birkenstock">Birkenstock</label>
                    </div><span class="font-size-xs text-muted">10</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="klein">
                      <label class="custom-control-label cz-filter-item-text" for="klein">Calvin Klein</label>
                    </div><span class="font-size-xs text-muted">365</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="columbia">
                      <label class="custom-control-label cz-filter-item-text" for="columbia">Columbia</label>
                    </div><span class="font-size-xs text-muted">508</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="converse">
                      <label class="custom-control-label cz-filter-item-text" for="converse">Converse</label>
                    </div><span class="font-size-xs text-muted">176</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="dockers">
                      <label class="custom-control-label cz-filter-item-text" for="dockers">Dockers</label>
                    </div><span class="font-size-xs text-muted">54</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="fruit">
                      <label class="custom-control-label cz-filter-item-text" for="fruit">Fruit of the Loom</label>
                    </div><span class="font-size-xs text-muted">739</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="hanes">
                      <label class="custom-control-label cz-filter-item-text" for="hanes">Hanes</label>
                    </div><span class="font-size-xs text-muted">92</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="choo">
                      <label class="custom-control-label cz-filter-item-text" for="choo">Jimmy Choo</label>
                    </div><span class="font-size-xs text-muted">17</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="levis">
                      <label class="custom-control-label cz-filter-item-text" for="levis">Levi's</label>
                    </div><span class="font-size-xs text-muted">361</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="lee">
                      <label class="custom-control-label cz-filter-item-text" for="lee">Lee</label>
                    </div><span class="font-size-xs text-muted">264</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wearhouse">
                      <label class="custom-control-label cz-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                    </div><span class="font-size-xs text-muted">75</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="newbalance">
                      <label class="custom-control-label cz-filter-item-text" for="newbalance">New Balance</label>
                    </div><span class="font-size-xs text-muted">218</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="nike">
                      <label class="custom-control-label cz-filter-item-text" for="nike">Nike</label>
                    </div><span class="font-size-xs text-muted">810</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="navy">
                      <label class="custom-control-label cz-filter-item-text" for="navy">Old Navy</label>
                    </div><span class="font-size-xs text-muted">147</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="polo">
                      <label class="custom-control-label cz-filter-item-text" for="polo">Polo Ralph Lauren</label>
                    </div><span class="font-size-xs text-muted">64</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="puma">
                      <label class="custom-control-label cz-filter-item-text" for="puma">Puma</label>
                    </div><span class="font-size-xs text-muted">370</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="reebok">
                      <label class="custom-control-label cz-filter-item-text" for="reebok">Reebok</label>
                    </div><span class="font-size-xs text-muted">506</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="skechers">
                      <label class="custom-control-label cz-filter-item-text" for="skechers">Skechers</label>
                    </div><span class="font-size-xs text-muted">209</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="hilfiger">
                      <label class="custom-control-label cz-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                    </div><span class="font-size-xs text-muted">487</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="armour">
                      <label class="custom-control-label cz-filter-item-text" for="armour">Under Armour</label>
                    </div><span class="font-size-xs text-muted">90</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="urban">
                      <label class="custom-control-label cz-filter-item-text" for="urban">Urban Outfitters</label>
                    </div><span class="font-size-xs text-muted">152</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="vsecret">
                      <label class="custom-control-label cz-filter-item-text" for="vsecret">Victoria's Secret</label>
                    </div><span class="font-size-xs text-muted">238</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wolverine">
                      <label class="custom-control-label cz-filter-item-text" for="wolverine">Wolverine</label>
                    </div><span class="font-size-xs text-muted">29</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wrangler">
                      <label class="custom-control-label cz-filter-item-text" for="wrangler">Wrangler</label>
                    </div><span class="font-size-xs text-muted">115</span>
                  </li>
                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 812px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 45px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
              </div>
              <!-- Filter by Size-->
              <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Size</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                  <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                  <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-xs">
                      <label class="custom-control-label cz-filter-item-text" for="size-xs">XS</label>
                    </div><span class="font-size-xs text-muted">34</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-s">
                      <label class="custom-control-label cz-filter-item-text" for="size-s">S</label>
                    </div><span class="font-size-xs text-muted">57</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-m">
                      <label class="custom-control-label cz-filter-item-text" for="size-m">M</label>
                    </div><span class="font-size-xs text-muted">198</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-l">
                      <label class="custom-control-label cz-filter-item-text" for="size-l">L</label>
                    </div><span class="font-size-xs text-muted">72</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-xl">
                      <label class="custom-control-label cz-filter-item-text" for="size-xl">XL</label>
                    </div><span class="font-size-xs text-muted">46</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-39">
                      <label class="custom-control-label cz-filter-item-text" for="size-39">39</label>
                    </div><span class="font-size-xs text-muted">112</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-40">
                      <label class="custom-control-label cz-filter-item-text" for="size-40">40</label>
                    </div><span class="font-size-xs text-muted">85</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-41">
                      <label class="custom-control-label cz-filter-item-text" for="size-40">41</label>
                    </div><span class="font-size-xs text-muted">210</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-42">
                      <label class="custom-control-label cz-filter-item-text" for="size-42">42</label>
                    </div><span class="font-size-xs text-muted">57</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-43">
                      <label class="custom-control-label cz-filter-item-text" for="size-43">43</label>
                    </div><span class="font-size-xs text-muted">30</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-44">
                      <label class="custom-control-label cz-filter-item-text" for="size-44">44</label>
                    </div><span class="font-size-xs text-muted">61</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-45">
                      <label class="custom-control-label cz-filter-item-text" for="size-45">45</label>
                    </div><span class="font-size-xs text-muted">23</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-46">
                      <label class="custom-control-label cz-filter-item-text" for="size-46">46</label>
                    </div><span class="font-size-xs text-muted">19</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-47">
                      <label class="custom-control-label cz-filter-item-text" for="size-47">47</label>
                    </div><span class="font-size-xs text-muted">15</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-48">
                      <label class="custom-control-label cz-filter-item-text" for="size-48">48</label>
                    </div><span class="font-size-xs text-muted">12</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-49">
                      <label class="custom-control-label cz-filter-item-text" for="size-49">49</label>
                    </div><span class="font-size-xs text-muted">8</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-50">
                      <label class="custom-control-label cz-filter-item-text" for="size-50">50</label>
                    </div><span class="font-size-xs text-muted">6</span>
                  </li>
                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 476px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 77px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
              </div>
              <!-- Filter by Color-->
              <div class="widget">
                <h3 class="widget-title">Color</h3>
                <div class="d-flex flex-wrap">
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-blue-gray">
                    <label class="custom-option-label rounded-circle" for="color-blue-gray"><span class="custom-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-burgundy">
                    <label class="custom-option-label rounded-circle" for="color-burgundy"><span class="custom-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-teal">
                    <label class="custom-option-label rounded-circle" for="color-teal"><span class="custom-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-teal">Teal</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-brown">
                    <label class="custom-option-label rounded-circle" for="color-brown"><span class="custom-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-brown">Brown</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-coral-red">
                    <label class="custom-option-label rounded-circle" for="color-coral-red"><span class="custom-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-navy">
                    <label class="custom-option-label rounded-circle" for="color-navy"><span class="custom-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-navy">Navy</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-charcoal">
                    <label class="custom-option-label rounded-circle" for="color-charcoal"><span class="custom-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-sky-blue">
                    <label class="custom-option-label rounded-circle" for="color-sky-blue"><span class="custom-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                  </div>
                </div>
              </div>
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1659px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
          </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          <!-- Toolbar-->
          
						<div class="row">
							<div class="col-lg-12">
								<div
									class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
										<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid"
											role="tab"><i class="fa fa-th"></i></a>
										<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i
												class="fa fa-list"></i></a>
									</div>
									<p>Showing 1–12 of 40 results</p>
									<div class="orderby__wrapper">
										<span>Sort By</span>
										<select class="shot__byselect">
											<option>Default sorting</option>
											<option>HeadPhone</option>
											<option>Furniture</option>
											<option>Jewellery</option>
											<option>Handmade</option>
											<option>Kids</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="tab__container">
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
								<div class="row">
									
									@foreach($productos as $producto)
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('product-detail' , $producto->slug) }}">
												<img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="product image">
											</a>
											<a class="second__img animation1" href="{{ route('product-detail' , $producto->slug) }}">
												<img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="product image">
											</a>
											<div class="hot__box">
												<span class="hot-label">{{ $producto->estatus_es }}</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{ route('product-detail' , $producto->slug) }}">{{ $producto->nombre }}</a></h4>
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
									@endforeach
								</div>
								
							</div>
							<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
								<div class="list__view__wrapper">
									<!-- Start Single Product -->
									@foreach($productos as $producto)
									<div class="list__view">
										<div class="thumb">
											<a class="first__img" href="single-product.html">
												<img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="product images">
											</a>
											<a class="second__img animation1" href="single-product.html">
												<img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="product images">
											</a>
										</div>
										<div class="content">
											<h2><a href="single-product.html">{{ $producto->nombre }}</a></h2>
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
											<ul class="prize__box">
												<li>{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
												<li class="old__prize">{{ $producto->paises->moneda->simbolo }} {{ $producto->price_dolar }}</li>
											</ul>
											<p> {{ $producto->descripcion }}</p>

											<ul class="cart__action d-flex">
												<li class="cart">
													<a href="{{ route('cart-add') }}">Agregar al carrito</a>
												</li>
												<li class="wishlist">
													<a href="cart.html"></a>
												</li>
												<li class="compare">
													<a href="cart.html"></a>
												</li>
											</ul>

										</div>
									</div>
									<hr class="pt-3 mt-3">
									@endforeach

								</div>
							</div>
						</div>


          <hr class="pt-3 mt-3">



    
          <!-- Pagination-->
          <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
              	<a class="page-link" href="#">
              		<!-- <span style="font-size: 20px; color: #4fbdba; position: relative;top: 3px;">
                    	<i class="fas fa-angle-left"></i>
                  	</span>Previo -->
              	</a>
              </li>
            </ul>
            <ul class="pagination">
              <li class="page-item d-sm-none">
              	<span class="page-link page-link-static">{{ $productos->links() }}</span>
              </li>

              <li class="page-item d-none d-sm-block" aria-current="page">
              	{{ $productos->links() }}
              </li>
              
            </ul>
            <ul class="pagination">
              <li class="page-item">
              	<a class="page-link" href="#" aria-label="Siguiente"><!-- Siguiente
              		<span style="font-size: 20px; color: #4fbdba; position: relative;top: 3px;">
                    	<i class="fas fa-angle-right"></i>
                  	</span> -->
              	</a>
              </li>
            </ul>
          </nav>
        </section>
      </div>
    </div>









		<!-- Start Shop Page -->
		<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
						<div class="shop__sidebar">
							<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title">Product Categories</h3>
								<ul>
									<li><a href="#">Biography <span>(3)</span></a></li>
									<li><a href="#">Business <span>(4)</span></a></li>
									<li><a href="#">Cookbooks <span>(6)</span></a></li>
									<li><a href="#">Health & Fitness <span>(7)</span></a></li>
									<li><a href="#">History <span>(8)</span></a></li>
									<li><a href="#">Mystery <span>(9)</span></a></li>
									<li><a href="#">Inspiration <span>(13)</span></a></li>
									<li><a href="#">Romance <span>(20)</span></a></li>
									<li><a href="#">Fiction/Fantasy <span>(22)</span></a></li>
									<li><a href="#">Self-Improvement <span>(13)</span></a></li>
									<li><a href="#">Humor Books <span>(17)</span></a></li>
									<li><a href="#">Harry Potter <span>(20)</span></a></li>
									<li><a href="#">Land of Stories <span>(34)</span></a></li>
									<li><a href="#">Kids' Music <span>(60)</span></a></li>
									<li><a href="#">Toys & Games <span>(3)</span></a></li>
									<li><a href="#">hoodies <span>(3)</span></a></li>
								</ul>
							</aside>
							<aside class="wedget__categories pro--range">
								<h3 class="wedget__title">Filter by price</h3>
								<div class="content-shopby">
									<div class="price_filter s-filter clear">
										<form action="#" method="GET">
											<div id="slider-range"></div>
											<div class="slider__range--output">
												<div class="price__output--wrap">
													<div class="price--output">
														<span>Price :</span><input type="text" id="amount" readonly="">
													</div>
													<div class="price--filter">
														<a href="#">Filter</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</aside>
							<aside class="wedget__categories poroduct--tag">
								<h3 class="wedget__title">Product Tags</h3>
								<ul>
									<li><a href="#">Biography</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Cookbooks</a></li>
									<li><a href="#">Health & Fitness</a></li>
									<li><a href="#">History</a></li>
									<li><a href="#">Mystery</a></li>
									<li><a href="#">Inspiration</a></li>
									<li><a href="#">Religion</a></li>
									<li><a href="#">Fiction</a></li>
									<li><a href="#">Fantasy</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">Toys</a></li>
									<li><a href="#">Hoodies</a></li>
								</ul>
							</aside>
							<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
							</aside>
						</div>
					</div>
					<div class="col-lg-9 col-12 order-1 order-lg-2">
						<div class="row">
							<div class="col-lg-12">
								<div
									class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
										<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid"
											role="tab"><i class="fa fa-th"></i></a>
										<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i
												class="fa fa-list"></i></a>
									</div>
									<p>Showing 1–12 of 40 results</p>
									<div class="orderby__wrapper">
										<span>Sort By</span>
										<select class="shot__byselect">
											<option>Default sorting</option>
											<option>HeadPhone</option>
											<option>Furniture</option>
											<option>Jewellery</option>
											<option>Handmade</option>
											<option>Kids</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>