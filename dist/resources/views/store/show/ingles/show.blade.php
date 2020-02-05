@extends('store.template')

 


@section('content')

  
    <!-- Size chart modal-->
    <div class="modal fade" id="size-chart">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist" style="margin-bottom: -1rem;">
              <li class="nav-item"><a class="nav-link active" href="#mens" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Men's sizes</a></li>
              <li class="nav-item"><a class="nav-link" href="#womens" data-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Women's sizes</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="mens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">US<br>Sizes</th>
                        <th class="align-middle">Euro<br>Sizes</th>
                        <th class="align-middle">UK<br>Sizes</th>
                        <th class="align-middle">Inches</th>
                        <th class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6</td>
                        <td>39</td>
                        <td>5.5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6.5</td>
                        <td>39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7</td>
                        <td>40</td>
                        <td>6.5</td>
                        <td>9.625"</td>
                        <td>24.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7.5</td>
                        <td>40-41</td>
                        <td>7</td>
                        <td>9.75"</td>
                        <td>24.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8</td>
                        <td>41</td>
                        <td>7.5</td>
                        <td>9.9375"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8.5</td>
                        <td>41-42</td>
                        <td>8</td>
                        <td>10.125"</td>
                        <td>25.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9</td>
                        <td>42</td>
                        <td>8.5</td>
                        <td>10.25"</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9.5</td>
                        <td>42-43</td>
                        <td>9</td>
                        <td>10.4375"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10</td>
                        <td>43</td>
                        <td>9.5</td>
                        <td>10.5625"</td>
                        <td>27</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10.5</td>
                        <td>43-44</td>
                        <td>10</td>
                        <td>10.75"</td>
                        <td>27.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11</td>
                        <td>44</td>
                        <td>10.5</td>
                        <td>10.9375"</td>
                        <td>27.9</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11.5</td>
                        <td>44-45</td>
                        <td>11</td>
                        <td>11.125"</td>
                        <td>28.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">12</td>
                        <td>45</td>
                        <td>11.5</td>
                        <td>11.25"</td>
                        <td>28.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">13</td>
                        <td>46</td>
                        <td>12.5</td>
                        <td>11.5625"</td>
                        <td>29.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">14</td>
                        <td>47</td>
                        <td>13.5</td>
                        <td>11.875"</td>
                        <td>30.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">15</td>
                        <td>48</td>
                        <td>14.5</td>
                        <td>12.1875"</td>
                        <td>31</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">16</td>
                        <td>49</td>
                        <td>15.5</td>
                        <td>12.5"</td>
                        <td>31.8</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="womens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">US<br>Sizes</th>
                        <th class="align-middle">Euro<br>Sizes</th>
                        <th class="align-middle">UK<br>Sizes</th>
                        <th class="align-middle">Inches</th>
                        <th class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-secondary font-weight-medium">4</td>
                        <td>35</td>
                        <td>2</td>
                        <td>8.1875"</td>
                        <td>20.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">4.5</td>
                        <td>35</td>
                        <td>2.5</td>
                        <td>8.375"</td>
                        <td>21.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">5</td>
                        <td>35-36</td>
                        <td>3</td>
                        <td>8.5"</td>
                        <td>21.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">5.5</td>
                        <td>36</td>
                        <td>3.5</td>
                        <td>8.75"</td>
                        <td>22.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6</td>
                        <td>36-37</td>
                        <td>4</td>
                        <td>8.875"</td>
                        <td>22.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6.5</td>
                        <td>37</td>
                        <td>4.5</td>
                        <td>9.0625"</td>
                        <td>23</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7</td>
                        <td>37-38</td>
                        <td>5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7.5</td>
                        <td>38</td>
                        <td>5.5</td>
                        <td>9.375"</td>
                        <td>23.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8</td>
                        <td>38-39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8.5</td>
                        <td>39</td>
                        <td>6.5</td>
                        <td>9.6875"</td>
                        <td>24.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9</td>
                        <td>39-40</td>
                        <td>7</td>
                        <td>9.875"</td>
                        <td>25.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9.5</td>
                        <td>40</td>
                        <td>7.5</td>
                        <td>10"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10</td>
                        <td>40-41</td>
                        <td>8</td>
                        <td>10.1875"</td>
                        <td>25.9</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10.5</td>
                        <td>41</td>
                        <td>8.5</td>
                        <td>10.3125"</td>
                        <td>26.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11</td>
                        <td>41-42</td>
                        <td>9</td>
                        <td>10.5"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11.5</td>
                        <td>42</td>
                        <td>9.5</td>
                        <td>10.6875"</td>
                        <td>27.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">12</td>
                        <td>42-43</td>
                        <td>10</td>
                        <td>10.875"</td>
                        <td>27.6</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    
    <!-- Page Title (Shop)-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$producto->name}}</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">{{$producto->name}}</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container">
      <!-- Gallery + details-->
      <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-7 pr-lg-0 pt-lg-4">
              <div class="cz-product-gallery">
                <div class="cz-preview order-sm-2">
                  <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                </div>
                <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a><a class="cz-thumblist-item video-item" href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                    <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div></a></div>
              </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
              <div class="product-details ml-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                  <button class="btn-wishlist mr-0 mr-lg-n3" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div>
                
                <?php
                    $descuento = $producto->price_dolar - 10;
                ?>
             
                <div class="mb-3">
                  <span class="h3 font-weight-normal text-accent mr-1">${{$producto->price_dolar}}</span>
                  <del class="text-muted font-size-lg mr-3">$ {{$descuento}} </del>
                  <span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                </div>
                <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                <div class="position-relative mr-n4 mb-3">
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                    <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color2">
                    <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color3">
                    <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                  </div>
                  <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>{{$producto->estatus_es}}</div>
                </div>
                <form class="mb-grid-gutter" method="post">
                  <div class="form-group">
                    <div class="d-flex justify-content-between align-items-center pb-1">
                      <label class="font-weight-medium" for="product-size">Size:</label><a class="nav-link-style font-size-sm" href="#size-chart" data-toggle="modal"><i class="czi-ruler lead align-middle mr-1 mt-n1"></i>Size guide</a>
                    </div>
                    <select class="custom-select" required id="product-size">
                      <option value="">Select size</option>
                      <option value="xs">XS</option>
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                      <option value="xl">XL</option>
                    </select>
                  </div>
                  <div class="form-group d-flex align-items-center">

                    <input min="1" class="custom-select mr-3" style="width: 5rem;" type="number">


               <!--      <select class="custom-select mr-3" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select> -->
                    
                    <button class="btn btn-primary btn-shadow btn-block" type="submit">
                      <a href="{{route('cart-add', $producto->id)}}">
                        <i class="czi-cart font-size-lg mr-2"></i>
                        Add to Cart
                      </a>
                    </button>
                  </div>
                </form>
                <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                    </div>
                    <div class="collapse show" id="productInfo" data-parent="#productPanels">
                      <div class="card-body">
                        <h6 class="font-size-sm mb-2">Descripción</h6>
                        <ul class="font-size-sm pl-4">
                          <li>{{$producto->description}}</li>
                        </ul>
                        <h6 class="font-size-sm mb-2">Composition</h6>
                        <ul class="font-size-sm pl-4 mb-0">
                          <li>183260098</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shippingOptions" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="czi-delivery text-muted lead align-middle mt-n1 mr-2"></i>Shipping options<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                    </div>
                    <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                      <div class="card-body font-size-sm">
                        <div class="d-flex justify-content-between border-bottom pb-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Courier</div>
                            <div class="font-size-sm text-muted">2 - 4 days</div>
                          </div>
                          <div>$26.50</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local shipping</div>
                            <div class="font-size-sm text-muted">up to one week</div>
                          </div>
                          <div>$10.00</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Flat rate</div>
                            <div class="font-size-sm text-muted">5 - 7 days</div>
                          </div>
                          <div>$33.85</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">UPS ground shipping</div>
                            <div class="font-size-sm text-muted">4 - 6 days</div>
                          </div>
                          <div>$18.00</div>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local pickup from store</div>
                            <div class="font-size-sm text-muted">&mdash;</div>
                          </div>
                          <div>$0.00</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#localStore" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="czi-location text-muted font-size-lg align-middle mt-n1 mr-2"></i>Find in local store<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                    </div>
                    <div class="collapse" id="localStore" data-parent="#productPanels">
                      <div class="card-body">
                        <select class="custom-select">
                          <option value>Select your country</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Belgium">Belgium</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="Spain">Spain</option>
                          <option value="UK">United Kingdom</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Sharing-->
                <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product description section 1-->
      <div class="row align-items-center py-md-3">
        <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-lg" src="img/shop/single/prod-img.jpg" alt="Image"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
          <h2 class="h3 mb-4 pb-2">High quality materials</h2>
          <h6 class="font-size-base mb-3">Soft cotton blend</h6>
          <p class="font-size-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
          <h6 class="font-size-base mb-3">Washing instructions</h6>
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#wash" data-toggle="tab" role="tab"><i class="czi-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#bleach" data-toggle="tab" role="tab"><i class="czi-bleach font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#hand-wash" data-toggle="tab" role="tab"><i class="czi-hand-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#ironing" data-toggle="tab" role="tab"><i class="czi-ironing font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#dry-clean" data-toggle="tab" role="tab"><i class="czi-dry-clean font-size-xl"></i></a></li>
          </ul>
          <div class="tab-content text-muted font-size-sm">
            <div class="tab-pane fade show active" id="wash" role="tabpanel">30° mild machine washing</div>
            <div class="tab-pane fade" id="bleach" role="tabpanel">Do not use any bleach</div>
            <div class="tab-pane fade" id="hand-wash" role="tabpanel">Hand wash normal (30°)</div>
            <div class="tab-pane fade" id="ironing" role="tabpanel">Low temperature ironing</div>
            <div class="tab-pane fade" id="dry-clean" role="tabpanel">Do not dry clean</div>
          </div>
        </div>
      </div>
      <!-- Product description section 2-->
      <div class="row align-items-center py-4 py-lg-5">
        <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-lg" src="img/shop/single/prod-map.png" alt="Map"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
          <h2 class="h3 mb-4 pb-2">Where is it made?</h2>
          <h6 class="font-size-base mb-3">Apparel Manufacturer, Ltd.</h6>
          <p class="font-size-sm text-muted pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
          <div class="d-flex mb-2">
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">3258</h4>
              <p>Workers</p>
            </div>
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">43%</h4>
              <p>Female</p>
            </div>
            <div class="text-center">
              <h4 class="h2 text-accent mb-1">57%</h4>
              <p>Male</p>
            </div>
          </div>
          <h6 class="font-size-base mb-3">Factory information</h6>
          <p class="font-size-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
    </div>
    <!-- Reviews-->
    <div class="border-top border-bottom my-lg-3 py-5">
      <div class="container pt-md-2" id="reviews">
        <div class="row pb-3">
          <div class="col-lg-4 col-md-5">
            <h2 class="h3 mb-4">74 Reviews</h2>
            <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
            <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">43</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">16</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">9</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">4</span>
            </div>
            <div class="d-flex align-items-center">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">2</span>
            </div>
          </div>
        </div>
        <hr class="mt-4 pb-4 mb-3">
        <div class="row">
          <!-- Reviews list-->
          <div class="col-md-7">
            <div class="d-flex justify-content-end pb-4">
              <div class="form-inline flex-nowrap">
                <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                <select class="custom-select custom-select-sm" id="sort-reviews">
                  <option>Newest</option>
                  <option>Oldest</option>
                  <option>Popular</option>
                  <option>High rating</option>
                  <option>Low rating</option>
                </select>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Rafael Marquez</h6><span class="font-size-ms text-muted">June 28, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">15</button>
                <button class="btn-dislike" type="button">3</button>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/02.jpg" alt="Barbara Palson"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Barbara Palson</h6><span class="font-size-ms text-muted">May 17, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                  <div class="font-size-ms text-muted">99% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">34</button>
                <button class="btn-dislike" type="button">1</button>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Daniel Adams</h6><span class="font-size-ms text-muted">May 8, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">75% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">26</button>
                <button class="btn-dislike" type="button">9</button>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more reviews</button>
            </div>
          </div>
          <!-- Leave review form-->
          <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
            <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
              <h3 class="h4 pb-2">Write a review</h3>
              <form class="needs-validation" method="post" novalidate>
                <div class="form-group">
                  <label for="review-name">Your name<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" required id="review-name">
                  <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                </div>
                <div class="form-group">
                  <label for="review-email">Your email<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" required id="review-email">
                  <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                </div>
                <div class="form-group">
                  <label for="review-rating">Rating<span class="text-danger">*</span></label>
                  <select class="custom-select" required id="review-rating">
                    <option value="">Choose rating</option>
                    <option value="5">5 stars</option>
                    <option value="4">4 stars</option>
                    <option value="3">3 stars</option>
                    <option value="2">2 stars</option>
                    <option value="1">1 star</option>
                  </select>
                  <div class="invalid-feedback">Please choose rating!</div>
                </div>
                <div class="form-group">
                  <label for="review-text">Review<span class="text-danger">*</span></label>
                  <textarea class="form-control" rows="6" required id="review-text"></textarea>
                  <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                </div>
                <div class="form-group">
                  <label for="review-pros">Pros</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                </div>
                <div class="form-group mb-4">
                  <label for="review-cons">Cons</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                </div>
                <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product carousel (Style with)-->
    <div class="container pt-5">
      <h2 class="h3 text-center pb-4">Style with</h2>
      <div class="cz-carousel cz-controls-static cz-controls-outside">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Jeans</a>
                <h3 class="product-title font-size-sm"><a href="#">Slim Taper Fit Jeans</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/17.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">Cotton T-shirt Regular Fit</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$9.<small>50</small></span>
                    <del class="font-size-sm text-muted">$11.<small>50</small></del>
                  </div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/18.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Shoes</a>
                <h3 class="product-title font-size-sm"><a href="#">Men’s Leather Keds</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$64.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/19.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">3 Color Collection of T-shirts</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$27.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">Cotton Polo Regular Fit</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$13.<small>50</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product carousel (You may also like)-->
    <div class="container py-5 my-md-3">
      <h2 class="h3 text-center pb-4">You may also like</h2>
      <div class="cz-carousel cz-controls-static cz-controls-outside">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/21.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$26.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/22.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/23.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/24.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$25.<small>00</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="validate" action="https://studio.us12.list-manage.com/subscribe/post-json?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126&amp;c=?" method="get" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form">
                <div class="input-group input-group-overlay flex-nowrap">
                  <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="email" name="EMAIL" id="mce-EMAIL" value="" placeholder="Your email" required>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe*</button>
                  </div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div><small class="form-text text-light opacity-50" id="mc-helper">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                <div class="subscribe-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="mr-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light pb-4 mb-3">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="img/footer-logo-light.png" alt="Cartzilla"/></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $
                  </button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <select class="custom-select custom-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-right mb-4">
              <div class="mb-3"><a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a></div><img class="d-inline-block" width="187" src="img/cards-alt.png" alt="Payment methods"/>
            </div>
          </div>
          <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>

































































































































































































































































  <!-- Main wrapper -->
  <div class="wrapper" id="wrapper">
    
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-12">
                <div class="wn__single__product">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="wn__fotorama__wrapper">
                        <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                            <a href="1.jpg"><img src="images/product/1.jpg" alt=""></a>
                            <a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>
                            <a href="3.jpg"><img src="images/product/3.jpg" alt=""></a>
                            <a href="4.jpg"><img src="images/product/4.jpg" alt=""></a>
                            <a href="5.jpg"><img src="images/product/5.jpg" alt=""></a>
                            <a href="6.jpg"><img src="images/product/6.jpg" alt=""></a>
                            <a href="7.jpg"><img src="images/product/7.jpg" alt=""></a>
                            <a href="8.jpg"><img src="images/product/8.jpg" alt=""></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="product__info__main">
                        <h1>{{$producto->name}}</h1>
                        <div class="product-reviews-summary d-flex">
                          <ul class="rating-summary d-flex">
                          <li><i class="zmdi zmdi-star-outline"></i></li>
                          <li><i class="zmdi zmdi-star-outline"></i></li>
                          <li><i class="zmdi zmdi-star-outline"></i></li>
                          <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                          <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                          </ul>
                        </div>
                        <div class="price-box">
                          <span>{{$producto->price_dolar}}</span>
                        </div>
                    <div class="product__overview">
                          <p>{{$producto->description}}</p>
                        </div>
                        <div class="box-tocart d-flex">
                          <span>Qty</span>
                          <input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
                          <div class="addtocart__actions">
                      
                            <button class="tocart" title="Add to Cart">
                              <a href="{{route('cart-add', $producto->id)}}">
                                Add to cart
                              </a>
                            </button>

                          </div>
                      <div class="product-addto-links clearfix">
                        <a class="wishlist" href="#"></a>
                        <a class="compare" href="#"></a>
                      </div>
                        </div>
                    <div class="product_meta">
                      <span class="posted_in">Categories: 
                        <a href="#">Adventure</a>, 
                        <a href="#">Kids' Music</a>
                      </span>
                    </div>
                    <div class="product-share">
                      <ul>
                        <li class="categories-title">Share :</li>
                        <li>
                          <a href="#">
                            <i class="icon-social-twitter icons"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="icon-social-tumblr icons"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="icon-social-facebook icons"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="icon-social-linkedin icons"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product__info__detailed">
              <div class="pro_details_nav nav justify-content-start" role="tablist">
                              <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Description</a>
                              <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
                              <a class="nav-item nav-link" data-toggle="tab" href="#nav-faqs" role="tab">FAQS</a>
                          </div>
                          <div class="tab__container">
                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                  <div class="description__attribute">
                    <p>{{$producto->description}}</p>
                    <ul>
                      <li>• Two-tone gray heather hoodie.</li>
                      <li>• Drawstring-adjustable hood. </li>
                      <li>• Machine wash/dry.</li>
                    </ul>
                  </div>
                            </div>
                            <!-- End Single Tab Content -->
                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                  <div class="review__attribute">
                    <h1>Customer Reviews</h1>
                    <h2>Hastech</h2>
                    <div class="review__ratings__type d-flex">
                      <div class="review-ratings">
                        <div class="rating-summary d-flex">
                          <span>Quality</span>
                            <ul class="rating d-flex">
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="rating-summary d-flex">
                          <span>Price</span>
                            <ul class="rating d-flex">
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                        <div class="rating-summary d-flex">
                          <span>value</span>
                            <ul class="rating d-flex">
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                      </div>
                      <div class="review-content">
                        <p>Hastech</p>
                        <p>Review by Hastech</p>
                        <p>Posted on 11/6/2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="review-fieldset">
                    <h2>You're reviewing:</h2>
                    <h3>Chaz Kangeroo Hoodie</h3>
                    <div class="review-field-ratings">
                      <div class="product-review-table">
                        <div class="review-field-rating d-flex">
                          <span>Quality</span>
                          <ul class="rating d-flex">
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                        <div class="review-field-rating d-flex">
                          <span>Price</span>
                          <ul class="rating d-flex">
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                        <div class="review-field-rating d-flex">
                          <span>Value</span>
                          <ul class="rating d-flex">
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="review_form_field">
                      <div class="input__box">
                        <span>Nickname</span>
                        <input id="nickname_field" type="text" name="nickname">
                      </div>
                      <div class="input__box">
                        <span>Summary</span>
                        <input id="summery_field" type="text" name="summery">
                      </div>
                      <div class="input__box">
                        <span>Review</span>
                        <textarea name="review"></textarea>
                      </div>
                      <div class="review-form-actions">
                        <button>Submit Review</button>
                      </div>
                    </div>
                  </div>
                            </div>
                            <!-- End Single Tab Content -->

                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade show active" id="nav-faqs" role="tabpanel">
                  <div class="description__attribute">
                    <p>'Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superi'or warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
                    <ul>
                      <li>• Two-tone gray heather hoodie.</li>
                      <li>• Drawstring-adjustable hood. </li>
                      <li>• Machine wash/dry.</li>
                    </ul>
                  </div>
                            </div>
                            <!-- End Single Tab Content -->
                          </div>
                </div>
            <div class="wn__related__product pt--80 pb--50">
              <div class="section__title text-center">
                <h2 class="title__be--2">Related Products</h2>
              </div>
              <div class="row mt--60">
                <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALLER</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">robin parrish</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/3.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/4.jpg" alt="product image"></a>
                      <div class="hot__box color--2">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">The Remainng</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/7.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/8.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">Lando</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$50.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/9.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/10.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">Doctor Wldo</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/11.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALER</span>
                      </div>
                    </div>
                    <div class="product__content content--center content--center">
                      <h4><a href="single-product.html">Animals Life</a></h4>
                      <ul class="prize d-flex">
                        <li>$50.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/6.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALER</span>
                      </div>
                    </div>
                    <div class="product__content content--center content--center">
                      <h4><a href="single-product.html">Olio Madu</a></h4>
                      <ul class="prize d-flex">
                        <li>$50.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                </div>
              </div>
            </div>
            <div class="wn__related__product">
              <div class="section__title text-center">
                <h2 class="title__be--2">upsell products</h2>
              </div>
              <div class="row mt--60">
                <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALLER</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">robin parrish</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/3.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/4.jpg" alt="product image"></a>
                      <div class="hot__box color--2">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">The Remainng</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/7.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/8.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">Lando</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$50.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/9.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/10.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">HOT</span>
                      </div>
                    </div>
                    <div class="product__content content--center">
                      <h4><a href="single-product.html">Doctor Wldo</a></h4>
                      <ul class="prize d-flex">
                        <li>$35.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/11.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALER</span>
                      </div>
                    </div>
                    <div class="product__content content--center content--center">
                      <h4><a href="single-product.html">Animals Life</a></h4>
                      <ul class="prize d-flex">
                        <li>$50.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                  <!-- Start Single Product -->
                  <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                      <a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
                      <a class="second__img animation1" href="single-product.html"><img src="images/books/6.jpg" alt="product image"></a>
                      <div class="hot__box">
                        <span class="hot-label">BEST SALER</span>
                      </div>
                    </div>
                    <div class="product__content content--center content--center">
                      <h4><a href="single-product.html">Olio Madu</a></h4>
                      <ul class="prize d-flex">
                        <li>$50.00</li>
                        <li class="old_prize">$35.00</li>
                      </ul>
                      <div class="action">
                        <div class="actions_inner">
                          <ul class="add_to_links">
                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product__hover--content">
                        <ul class="rating d-flex">
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li class="on"><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Start Single Product -->
                </div>
              </div>
            </div>
              </div>
              <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                <div class="shop__sidebar">
                  <aside class="wedget__categories poroduct--cat">
                    <h3 class="wedget__title">Categorias</h3>
                    <ul>
                      @foreach($categorias as $categoria)
                      <li><a href="#">{{$categoria->name}} <span>(3)</span></a></li>
                      @endforeach()
                      
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
                  <aside class="wedget__categories poroduct--compare">
                    <h3 class="wedget__title">Compare</h3>
                    <ul>
                      <li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
                      <li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
                      <li><a href="#">x</a><a href="#">Dignissim venenatis</a></li>
                    </ul>
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
            </div>
          </div>
        </div>
        <!-- End main Content -->
    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
      <form id="search_mini_form--2" class="minisearch" action="#">
        <div class="field__search">
          <input type="text" placeholder="Search entire store here...">
          <div class="action">
            <a href="#"><i class="zmdi zmdi-search"></i></a>
          </div>
        </div>
      </form>
      <div class="close__wrap">
        <span>close</span>
      </div>
    </div>
    <!-- End Search Popup -->
    <!-- Footer Area -->
    <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
      <div class="footer-static-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer__widget footer__menu">
                <div class="ft__logo">
                  <a href="index.html">
                    <img src="images/logo/3.png" alt="logo">
                  </a>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                </div>
                <div class="footer__content">
                  <ul class="social__net social__net--2 d-flex justify-content-center">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-google"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                  </ul>
                  <ul class="mainmenu d-flex justify-content-center">
                    <li><a href="index.html">Trending</a></li>
                    <li><a href="index.html">Best Seller</a></li>
                    <li><a href="index.html">All Product</a></li>
                    <li><a href="index.html">Wishlist</a></li>
                    <li><a href="index.html">Blog</a></li>
                    <li><a href="index.html">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="copyright">
                <div class="copy__right__inner text-left">
                  <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="payment text-right">
                <img src="images/icons/payment.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- //Footer Area -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social__net social__net--2 d-flex justify-content-start">
                                            <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="{{route('cart-add', $producto->id)}}">Add to cart1</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

  </div>
  <!-- //Main wrapper -->



@endsection

