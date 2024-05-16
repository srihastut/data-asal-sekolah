<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static {
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
        .logo-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .logo-container img {
            width: 100px;
            height: auto;
        }
    </style>
    <title>CETAK DATA ASAL SEKOLAH</title>
</head>
<body>
    <div class="logo-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Coat_of_arms_of_Central_Java.svg/800px-Coat_of_arms_of_Central_Java.svg.png" alt="Logo Jawa Tengah">
        <img src="https://stmik-tegal.ac.id/wp-content/uploads/2023/12/logo-STMIK-TEGAL-COLOR.png" alt="Logo STMIK">
    </div>
    <div class="form-group">
        <p align="center"><b>Laporan Data Asal Sekolah</b></p>
        
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>Kode Asal Sekolah</th>
                <th>Nama Asal Sekolah</th>
                <th>Jenis Asal Sekolah</th>
                <th>Deskripsi</th>
                <th>Kota Asal Sekolah</th>
                <th>Provinsi Asal Sekolah</th>
            </tr>
            @foreach ($data_asal_sekolah as $item)
            <tr>
                <td>{{ $item->kode_asal_sekolah }}</td>
                <td>{{ $item->nama_asal_sekolah }}</td>
                <td>{{ $item->jenis->jenis }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->kota_asal_sekolah }}</td>
                <td>{{ $item->provinsi_asal_sekolah }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
