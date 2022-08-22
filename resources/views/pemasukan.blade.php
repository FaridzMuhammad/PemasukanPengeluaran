@extends('layouts.sideBarnavBar')
@section('content')
<h1>Pemasukan</h1>
    <div class="pembungkus">

        <form action="{{url('/pemasukan/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="fname">Nominal</label>
            <input type="text" id="nominal" name="nominal" class="form-control form-control-lg" placeholder="Nominal">

            <div id="kategori">
            <label>Kategori Pendapatan</label>
            <select id="nilaiKategori" name="kategori">
                <option value="OrangTua">Orang Tua</option>
                <option value="Freelance">Freelance</option>
                <option value="Lainnya">Lainnya...</option>
            </select>
            </div>
            <div >
            <label class="tanggal">Pilih Tanggal</label>
            <input class="date" type="date" id="tanggal" name="tanggal" data-date-format="DD MMMM YYYY" value="" style="margin-top: 5px">
            </div>


            <input class="submit" type="submit" value="Submit">
        </form>
        <script>
            var xNominal = document.getElementById("nominal").value;
            var xKategori = document.getElementById("nilaiKategori").value;
            var xTanggal = document.getElementById("tanggal").value;
            console.log(xNominal)
            console.log(xKategori)
            console.log(xTanggal)

        </script>
    </div>
@endsection
