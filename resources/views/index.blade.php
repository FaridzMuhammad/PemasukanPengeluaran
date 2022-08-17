<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemasukan Dan Pengeluaran</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="path/to/vanilla.js"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <h1 class="titleAwal">(DEVelop) Pemasukan Pengeluaran</h1>

    <div class="container">
    <a href="{{ url('/pemasukan') }}">Tambah Pemasukan</a>
    <a href="{{ url('/pengeluaran') }}">Tambah Pengeluaran</a>
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

    <h1>Laporan Pemasukan</h1>

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
                    @foreach ($pemasukan as $dataPemasukan)
                <tr>
                    <td>{{ $dataPemasukan->nominal}}</td>
                    <td>{{ $dataPemasukan->kategori}}</td>
                    <td>{{ $dataPemasukan->tanggal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>


    <h1>Laporan Pengeluaran</h1>

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
            @foreach ($pengeluaran as $dataPengeluaran)
            <tr>
                <td>{{ $dataPengeluaran->nominal}}</td>
                <td>{{ $dataPengeluaran->kategori}}</td>
                <td>{{ $dataPengeluaran->tanggal}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
