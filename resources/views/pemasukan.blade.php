<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemasukan Dan Pengeluaran</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <h1 class="titleAwal">(DEVelop) Pengeluaran Pemasukan</h1>
    <div class="back">
    <a href="{{ url('/') }}" class="">Back to Home</a>
    </div>
    <script type="text/javascript">
        const buttons = document.querySelectorAll('a');
        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {

                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;

                let ripples = document.createElement('span');
                ripples.style.left = x + 'px';
                ripples.style.top = y + 'px';
                this.appendChild(ripples);

                setTimeout(() => {
                    ripples.remove()
                },1000);
            })
        })
    </script>

    <div class="pembungkus">
        <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="fname">Nominal</label>
            <input type="text" id="nominal" name="nominal" placeholder="Masukan Jumlah">

            <div id="kategori">
            <label>Kategori Pendapatan</label>
            <select id="nilaiKategori" name="kategori">
                <option value="OrangTua">Orang Tua</option>
                <option value="Freelance">Freelance</option>
                <option value="Lainnya">Lainnya...</option>
            </select>
            </div>


            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
            <input type="date" id="tanggal" name="tanggal">


            <input type="submit" value="Submit">
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

    <h1>History</h1>

    <div class="history">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nominal</th>
                <th>Kategori</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="active-row">
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
