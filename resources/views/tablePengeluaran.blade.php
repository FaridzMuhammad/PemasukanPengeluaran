@extends('layouts.sideBarnavBar')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Pengeluaran</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default" style=">
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
                @foreach ($Pengeluaran as $dataPengeluaran)
                <tr>
                    <td>{{ number_format($dataPengeluaran->nominal)}}</td>
                    <td>{{ $dataPengeluaran->kategori}}</td>
                    <td>{{ $dataPengeluaran->tanggal}}</td>
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
var dataPengeluaran = {!! json_encode($Pengeluaran -> toArray()) !!}
var nominalPengeluaran = [];
var tanggalPengeluaran = [];
console.log(dataPengeluaran)
for(var i = 0; i < dataPengeluaran.length; i++){
    nominalPengeluaran[i] = dataPengeluaran[i].nominal;
    tanggalPengeluaran[i] = dataPengeluaran[i].tanggal;
}
console.log(nominalPengeluaran[0])
var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

var areaChartData = {
  labels  : [tanggalPengeluaran[0],tanggalPengeluaran[1],tanggalPengeluaran[2],tanggalPengeluaran[3],tanggalPengeluaran[4],tanggalPengeluaran[5],tanggalPengeluaran[6]],
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
      data                : [nominalPengeluaran[0], nominalPengeluaran[1], nominalPengeluaran[2], nominalPengeluaran[3], nominalPengeluaran[4], nominalPengeluaran[5], nominalPengeluaran[6]]
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
