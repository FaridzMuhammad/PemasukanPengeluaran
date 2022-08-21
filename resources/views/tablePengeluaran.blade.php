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
                @foreach ($Pengeluaran as $dataPengeluaran)
                <tr>
                    <td>{{ $dataPengeluaran->nominal}}</td>
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
@endsection
