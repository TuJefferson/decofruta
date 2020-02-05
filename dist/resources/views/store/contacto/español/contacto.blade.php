
    
    <!-- Page Title (Light)-->
    <div class="bg-secondary py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-star">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Contacts</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 mb-0">Contacts</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <!-- Contact detail cards-->
    <section class="container-fluid pt-grid-gutter">
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-grid-gutter"><a class="card" href="#map" data-scroll>
            <div class="card-body text-center"><i class="czi-location h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h6 mb-2">Main store address</h3>
              <p class="font-size-sm text-muted">caracas chacaito</p>
              <div class="font-size-sm text-primary">Click to see map<i class="czi-arrow-right align-middle ml-1"></i></div>
            </div></a></div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
          <div class="card">
            <div class="card-body text-center"><i class="czi-time h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h6 mb-3">Working hours</h3>
              <ul class="list-unstyled font-size-sm text-muted mb-0">
                <li>Mon - Fri: 10AM - 7PM</li>
                <li class="mb-0">Sta: 11AM - 5PM</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
          <div class="card">
            <div class="card-body text-center"><i class="czi-phone h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h6 mb-3">Phone numbers</h3>
              <ul class="list-unstyled font-size-sm mb-0">
                <li><span class="text-muted mr-1">For customers:</span><a class="nav-link-style" href="tel:+108044357260">+1 (080) 44 357 260</a></li>
                <li class="mb-0"><span class="text-muted mr-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+1 00 33 169 7720</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
          <div class="card">
            <div class="card-body text-center"><i class="czi-mail h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h6 mb-3">Email addresses</h3>
              <ul class="list-unstyled font-size-sm mb-0">
                <li><span class="text-muted mr-1">For customers:</span><a class="nav-link-style" href="mailto:+108044357260">customer@example.com</a></li>
                <li class="mb-0"><span class="text-muted mr-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Outlet stores-->


    <section class="container pt-4 mt-md-4 mb-5">
      <h2 class="h3 text-center mb-3">Tiendas en {{ $pais_tienda->nombre }}</h2>
      <div class="row pt-4">

        @foreach($tiendas as $tienda)
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
          <div class="card border-0 box-shadow">
            <iframe width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" src="{{$tienda->google_map}}"></iframe>
            <div class="card-body">
              <h6>{{ $tienda->nombre }}</h6>
              <ul class="list-unstyled mb-0">
                <li class="media pb-3 border-bottom">
                  <i class="czi-location font-size-lg mt-2 mb-0 text-primary"></i>
                  <div class="media-body pl-3">
                    <span class="font-size-ms text-muted">Encuéntranos</span>
                    <a class="d-block text-heading font-size-sm" href="#">{{ $tienda->direccion }}</a>
                  </div>
                </li>
                <li class="media pt-2 pb-3 border-bottom">
                  <i class="czi-phone font-size-lg mt-2 mb-0 text-primary"></i>
                  <div class="media-body pl-3">
                    <span class="font-size-ms text-muted">Llamanos</span>
                    <a class="d-block text-heading font-size-sm" href="tel:+178632256040">{{ $tienda->telefono_local }}</a>
                  </div>
                </li>

                <li class="media pt-2 pb-3 border-bottom">
                  <i class="czi-mail font-size-lg mt-2 mb-0 text-primary"></i>
                  <div class="media-body pl-3">
                    <span class="font-size-ms text-muted">Escribenos al Whatsapp</span>
                    <a class="d-block text-heading font-size-sm" href="https://api.whatsapp.com/send?phone={{$tienda->codigo_pais_whatsapp}}{{$tienda->whatsapp}}&text={{$tienda->mensaje_whatsapp}}
                    ">{{ $tienda->whatsapp }}</a>
                  </div>
                </li>

                <li class="media pt-2">
                  <i class="czi-mail font-size-lg mt-2 mb-0 text-primary"></i>
                  <div class="media-body pl-3">
                    <span class="font-size-ms text-muted">Escribenos</span>
                    <a class="d-block text-heading font-size-sm" href="mailto:{{ $tienda->email }}">{{ $tienda->email }}</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </section>


    <div class="container px-0">
      <div class="row no-gutters">
        <div class="col-lg-12 px-4 px-xl-5 py-5 border-top">
          <h2 class="h4 mb-4">Escríbenos</h2>
          <form class="needs-validation mb-3" novalidate>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required>
                  <div class="invalid-feedback">Please fill in you name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required>
                  <div class="invalid-feedback">Please provide valid email address!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required>
                  <div class="invalid-feedback">Please provide valid phone number!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-subject">Subject:</label>
                  <input class="form-control" type="text" id="cf-subject" placeholder="Provide short title of your request">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
              <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <button class="btn btn-primary" type="submit">Send message</button>
          </form>
        </div>
      </div>
    </div>


    <!-- Split section: Map + Contact form-->
    <!-- <div class="container-fluid px-0" id="map">
      <div class="row no-gutters">
        <div class="col-lg-6 iframe-full-height-wrap">
          <iframe class="iframe-full-height" width="600" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53357.14257194912!2d-73.07268695801845!3d40.78017062807504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396+Lillian+Blvd%2C+Holbrook%2C+NY+11741%2C+USA!5e0!3m2!1sen!2sua!4v1558703206875!5m2!1sen!2sua"></iframe>
        </div>
        <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
          <h2 class="h4 mb-4">Drop us a line</h2>
          <form class="needs-validation mb-3" novalidate>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required>
                  <div class="invalid-feedback">Please fill in you name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required>
                  <div class="invalid-feedback">Please provide valid email address!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required>
                  <div class="invalid-feedback">Please provide valid phone number!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cf-subject">Subject:</label>
                  <input class="form-control" type="text" id="cf-subject" placeholder="Provide short title of your request">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
              <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <button class="btn btn-primary" type="submit">Send message</button>
          </form>
        </div>
      </div>
    </div> -->
   
    
