@extends('layouts.sideBarnavBar')
@section('content')
    <h1>Dasboard</h1>

    <div class="row">
        <div class="col">
            <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><img style="width: 50px; height:70px;"
                        src="{{ asset('AdminLTE/dist/img/Dolar.png') }}" alt=""></span>

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
                <span class="info-box-icon"><img style="width: 50px; height: 55px;"
                        src="{{ asset('AdminLTE/dist/img/up arrow.png') }}" alt=""></span>

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
                <span class="info-box-icon"><img style="width: 50px; height: 55px;"
                        src="{{ asset('AdminLTE/dist/img/down arrow.png') }}" alt=""></span>

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

    <div class="row">
    <div class="col">
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
            <canvas id="donutPemasukan"
                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
    <div class="col">
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
            <canvas id="donutPengeluaran"
                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
    </div>


    <script>
        var dataPemasukan = {!! json_encode($pemasukan->toArray()) !!}
        var dataPengeluaran = {!! json_encode($pengeluaran->toArray()) !!}
        var nominalPemasukan = [];
        var kategoriPemasukan = [];
        var nominalPengeluaran = [];
        var kategoriPengeluaran = [];
        var graphDataPengeluaran = [];
        var graphLabelPengeluaran = [];
        var graphLabelPemasukan = [];
        var graphDataPemasukan = [];


        for (var i = 0; i < dataPemasukan.length; i++) {
            nominalPemasukan[i] = dataPemasukan[i].nominal;
            kategoriPemasukan[i] = dataPemasukan[i].kategori;
        }

        for (var j = 0; j < dataPengeluaran.length; j++) {
            nominalPengeluaran[j] = dataPengeluaran[j].nominal;
            kategoriPengeluaran[j] = dataPengeluaran[j].kategori;
        }

        // console.log(nominalPengeluaran)

        var x = 0;
        for (var i = 0; i < dataPemasukan.length; i++) {
            var tempKatPem = kategoriPemasukan[i];
            var tempDatPem = 0;
            for (var j = 0; j < dataPemasukan.length; j++) {
                if (tempKatPem == kategoriPemasukan[j] && tempKatPem != -1) {
                    graphLabelPemasukan[x] = tempKatPem;
                    tempDatPem += nominalPemasukan[j];
                    nominalPemasukan[j] = 0;
                    kategoriPemasukan[j] = -1;
                    console.log(x)
                }
            }
            if(tempDatPem != 0){
              graphDataPemasukan[x] = tempDatPem;
            }
            if (tempKatPem != -1) {
                x++;
            }
        }

        var y = 0;
        for (var i = 0; i < dataPengeluaran.length; i++) {
            var tempKatPeng = kategoriPengeluaran[i];
            var tempDatPeng = 0;
            for (var j = 0; j < dataPengeluaran.length; j++) {
                if (tempKatPeng == kategoriPengeluaran[j] && tempKatPeng != -1) {
                    graphLabelPengeluaran[y] = tempKatPeng;
                    tempDatPeng += nominalPengeluaran[j];
                    nominalPengeluaran[j] = 0;
                    kategoriPengeluaran[j] = -1;

                }
            }
            if(tempDatPeng != 0){
              graphDataPengeluaran[y] = tempDatPeng;
              console.log(graphDataPengeluaran)
            }
            if (tempKatPeng != -1) {
                y++;
            }
        }

        console.log(graphLabelPengeluaran)
        console.log(dataPengeluaran)


        var donutChartCanvas = $('#donutPemasukan').get(0).getContext('2d')
        var donutData = {
            labels: graphLabelPemasukan,
            datasets: [{
                data: graphDataPemasukan,
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        var donutChartCanvas2 = $('#donutPengeluaran').get(0).getContext('2d')
        var donutData2 = {
            labels: graphLabelPengeluaran,
            datasets: [{
                data: graphDataPengeluaran,
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas2, {
            type: 'doughnut',
            data: donutData2,
            options: donutOptions
        })
    </script>
@endsection
