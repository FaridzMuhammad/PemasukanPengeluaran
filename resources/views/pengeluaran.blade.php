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


    <div id="containerButton">
        <div class="b1">
            <button onclick="Pemasukan()" class="button">Tambah Pemasukan</button>
        </div>
        <button onclick="Pengeluaran()" class="button">Tambah Pengeluaran</button>
    </div>

    <div class="pembungkus">
        <form action="/action_page.php">
            <label for="fname">Nominal</label>
            <input type="text" id="fname" name="firstname" placeholder="Masukan Jumlah">

            <div id ="kategori">
            <label>Kategori Pendapatan</label>
            <select>
                <option value="OrangTua">Makan</option>
                <option value="Hutang">Jajan</option>
                <option value="Freelance">Jalan - Jalan</option>
                <option value="Lainnya">Lainnya...</option>
            </select>
            </div>

            <div class="date">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="">
            </div>

            <input type="submit" value="Submit">
        </form>
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
                <td>Dom</td>
                <td>6000</td>
                <td></td>
            </tr>
            <tr class="active-row">
                <td>Melissa</td>
                <td>5150</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>