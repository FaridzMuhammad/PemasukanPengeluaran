@extends('layouts.sideBarnavBar')
@section('content')
    <h1>Dasboard</h1>

    <div class="row">
        <div class="col">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><img style="width: 50px; height:70px;" src="{{ asset('AdminLTE/dist/img/Dolar.png') }}" alt=""></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Uang</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><img style="width: 50px; height: 55px;" src="{{ asset('AdminLTE/dist/img/up arrow.png') }}" alt=""></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pemasukan</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><img style="width: 50px; height: 55px;" src="{{ asset('AdminLTE/dist/img/down arrow.png') }}" alt=""></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pengeluaran</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

      </div>

      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Donut Chart</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
      </div>



      <script>

    var dataPemasukan = {!! json_encode($pemasukan -> toArray()) !!}
    var nominalPemasukan = [];
    var kategoriPemasukan = [];
    // console.log(dataPemasukan)
    // for(var i = 0; i < dataPemasukan.length; i++){

    //     for(var j = 0; j<dataPemasukan.length; j++){
    //         if(dataPemasukan[i].kategori == dataPemasukan[j].kategori)
    //         {

    //         }

    //     }
    // }
    console.log(dataPemasukan.kategori)

    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: dataPemasukan.kategori,
      datasets: [
        {
          data: dataPemasukan.nominal,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
      </script>
@endsection
