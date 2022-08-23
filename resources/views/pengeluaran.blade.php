@extends('layouts.sideBarnavBar')
@section('content')
<div class="pembungkus">
    <form action="{{url('/pengeluaran/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="fname">Nominal</label>
        <input class="nominal" type="text" id="nominal" name="nominal" placeholder="Masukan Jumlah">

        <div id ="kategori">
        <label>Kategori Pendapatan</label>
        <select name="kategori">
            <option value="Makan">Makan</option>
            <option value="Jajan">Jajan</option>
            <option value="Jalan - Jalan">Jalan - Jalan</option>
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
