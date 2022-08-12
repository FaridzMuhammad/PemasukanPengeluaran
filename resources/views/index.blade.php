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

    <h1 class="titleAwal">(DEVelop) Pemasukan Pengeluaran</h1>

    <div class="container">
    <a href="{{ url('pemasukan') }}" class="btn btn-primary">Tambah Pemasukan</a>
    <a href="{{ url('pengeluaran') }}" class="btn btn-primary">Tambah Pengeluaran</a>
    </div>

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
            <tr>
                <td>200,000</td>
                <td>freelance</td>
                <td>12/08/2022</td>
            </tr>
            <tr class="active-row">
                <td>150,000</td>
                <td>lainnya...</td>
                <td>14/08/2022</td>
            </tr>
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
            <tr>
                <td>10,000</td>
                <td>Makan</td>
                <td>12/08/2022</td>
            </tr>
            <tr class="active-row">
                <td>100,000</td>
                <td>Jalan - Jalan</td>
                <td>13/08/2022</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>

</html>
