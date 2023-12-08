<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Suprimentos
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Visão Geral <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Niveis de estoque <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">60%</h2>
                    <h6 class="card-text">Precisa reabastecer</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-secondary card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Custos deste mês<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">5,670</h2>
                    <h6 class="card-text">Aumentou em 30%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Orçamento <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">10,000</h2>
                    <h6 class="card-text">Orçamento estabelecido</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <hr>
           
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Custos da Clinica (Ult.1 Ano)</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gastos em categorias de suprimentos</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                  </div>
                </div>
              </div>
            </div>

            <hr>

              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Historico de Pedidos</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th> Pedidos </th>
                              <th> Quantidade </th>
                              <th> Status </th>
                              <th> Data de entrega </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="/ImperioDonto/img/bisturi-472-ponteiro-thimon-2-yrdd4gfpbl.jpg" class="me-2" alt="image"> Bisturis
                              </td>
                              <td> 70x </td>
                              <td>
                                <label class="badge badge-gradient-success">ENTREGUE</label>
                              </td>
                              <td> Dez 5, 2023 </td>
                            </tr>
                            <tr>
                              <td>
                                <img src="/ImperioDonto/img/luva.jpg" class="me-2" alt="image"> 
                                Luvas descartaveis de latex
                              </td> 
                              <td> 40x </td>
                              <td>
                                <label class="badge badge-gradient-warning">A CAMINHO</label>
                              </td>
                              <td> Dez 12, 2023 </td>
                              
                            </tr>
                            <tr>
                              <td>
                                <img src="/ImperioDonto/img/kit.jpg" class="me-2" alt="image"> Kit endodontia
                              </td>
                              <td> 20x </td>
                              <td>
                                <label class="badge badge-gradient-warning">A CAMINHO</label>
                              </td>
                              <td> Dez 16, 2023 </td>
                              
                            </tr>
                            <tr>
                              <td>
                                <img src="/ImperioDonto/img/sondas.jpg" class="me-2" alt="image"> Sondas esploradoras
                              </td>
                              <td> 10x </td>
                              <td>
                                <label class="badge badge-gradient-warning">A CAMINHO</label>
                              </td>
                              <td> Dez 3, 2023 </td>

                              <tr>
                                <td>
                                  <img src="/ImperioDonto/img/espelho-bucal.jpg" class="me-2" alt="image"> Espelho bucal
                                </td>
                                <td> 2x </td>
                                <td>
                                  <label class="badge badge-gradient-warning">A CAMINHO</label>
                                </td>
                                <td> Dez 3, 2023 </td>
                              
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>