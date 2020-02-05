<!-- Size chart modal-->
    <div class="modal fade" id="size-chart">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist" style="margin-bottom: -1rem;">

              <li class="nav-item">
                <a class="nav-link active" href="#mens" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Zonas de Envio</a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="#womens" data-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Zonas de Envio</a>
              </li> -->
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="mens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">Nombre</th>
                        <th class="align-middle">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($zonas as $zona)
                      <tr>
                        <td class="bg-secondary font-weight-medium">{{ $zona->nombre }}</td>
                        <td>{{ $zona->precio_dolar }} {{ $zona->paises->moneda->simbolo }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- <div class="tab-pane fade" id="womens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">US<br>Sizes</th>
                        <th class="align-middle">Euro<br>Sizes</th>
                        <th class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-secondary font-weight-medium">4</td>
                        <td>35</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>