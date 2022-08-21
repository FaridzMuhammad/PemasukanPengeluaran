@extends('layouts.sideBarnavBar')
@section('content')
<div class="pembungkus">
    <form action="{{url('/pengeluaran/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="fname">Nominal</label>
        <input class="form-control form-control-lg" type="text" placeholder="Nominal">

        <div id ="kategori">
        <label>Kategori Pendapatan</label>
        <select name="kategori">
            <option value="OrangTua">Makan</option>
            <option value="Hutang">Jajan</option>
            <option value="Freelance">Jalan - Jalan</option>
            <option value="Lainnya">Lainnya...</option>
        </select>
        </div>

        <div>
        <label class="tanggal">Pilih Tanggal</label>
        <input class="date" type="date" id="tanggal" name="tanggal" data-date-format="DD MMMM YYYY" value="" style="margin-top: 5px">
        </div>

        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@endsection
