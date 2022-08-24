@extends('layouts.sideBarnavBar')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Pemasukan</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>Nominal</th>
                <th>Kategori</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pemasukan as $dataPemasukan)
                <tr>
                    <td>{{ number_format($dataPemasukan->nominal)}}</td>
                    <td>{{ $dataPemasukan->kategori}}</td>
                    <td>{{ $dataPemasukan->tanggal}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Area Chart</h3>

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
      <div class="chart">
        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <script>

        //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var dataPemasukan = {!! json_encode($pemasukan -> toArray()) !!}
    var nominalPemasukan = [];
    var tanggalPemasukan = [];
    console.log(dataPemasukan)
    for(var i = 0; i < dataPemasukan.length; i++){
        nominalPemasukan[i] = dataPemasukan[i].nominal;
        tanggalPemasukan[i] = dataPemasukan[i].tanggal;
    }
    console.log(nominalPemasukan[0])
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [tanggalPemasukan[0],tanggalPemasukan[1],tanggalPemasukan[2],tanggalPemasukan[3],tanggalPemasukan[4],tanggalPemasukan[5],tanggalPemasukan[6]],
      datasets: [
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [nominalPemasukan[0], nominalPemasukan[1], nominalPemasukan[2], nominalPemasukan[3], nominalPemasukan[4], nominalPemasukan[5], nominalPemasukan[6]]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

  </script>

@endsection


