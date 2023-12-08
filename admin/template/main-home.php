<main class = "col-md-9 ms-sm-auto col-lg-10 px-md-4 borda-torta mt-5">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Dashboard
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
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <h4 class="font-weight-normal mb-3">Lucro do mês<i class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">$ 450,000</h2>
          <h6 class="card-text">Aumentou em 60%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <h4 class="font-weight-normal mb-3">Consultas feitas no mês<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">4,500</h2>
          <h6 class="card-text">Aumentou em 10%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <h4 class="font-weight-normal mb-3">Visitas no site <i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">3,000</h2>
          <h6 class="card-text">Diminuiu em 5%</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Consultas recentes</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> Clientes </th>
                  <th> Assunto </th>
                  <th> Status </th>
                  <th> Data </th>
                  <th> ID </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="/ImperioDonto/img/Yuri.jpg" class="me-2" alt="image"> Yuri Alberto
                  </td>
                  <td> Consulta concluida com exito </td>
                  <td>
                    <label class="badge badge-gradient-success">CONCLUIDA</label>
                  </td>
                  <td> Dez 5, 2023 </td>
                  <td> WD-54334 </td>
                </tr>
                <tr>
                  <td>
                    <img src="/ImperioDonto/img/cassio.jpg" class="me-2" alt="image"> Cassio Ramos
                  </td>
                  <td> Consulta em andamento </td>
                  <td>
                    <label class="badge badge-gradient-warning">EM ANDAMENTO</label>
                  </td>
                  <td> Dez 12, 2023 </td>
                  <td> WD-54353 </td>
                </tr>
                <tr>
                  <td>
                    <img src="/ImperioDonto/img/roger.jpg" class="me-2" alt="image"> Roger Guedes
                  </td>
                  <td> Consulta agendada </td>
                  <td>
                    <label class="badge badge-gradient-info">AGENDADA</label>
                  </td>
                  <td> Dez 16, 2023 </td>
                  <td> WD-42432 </td>
                </tr>
                <tr>
                  <td>
                    <img src="/ImperioDonto/img/joao paulo.jpg" class="me-2" alt="image"> João Paulo
                  </td>
                  <td> Consulta cancelada </td>
                  <td>
                    <label class="badge badge-gradient-danger">CANCELADA</label>
                  </td>
                  <td> Dez 3, 2023 </td>
                  <td> WD-32132 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Horarios X Agendados (Ult.1 Ano)</h4>
            <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
          </div>
          <canvas id="visit-sale-chart" class="mt-4"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Atendimento por dentistas no mês</h4>
          <canvas id="traffic-chart"></canvas>
          <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
        </div>
      </div>
    </div>
</main>
