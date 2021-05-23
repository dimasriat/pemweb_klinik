<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>App Klinik</h1>
        <a href="/">Back to Home</a>
        <h2>Tambah Data Kunjungan</h2>
        <form action="/kunjungan" method="POST">
            @csrf
            <input type="text" placeholder="id_reservasi" name="id_reservasi">
            <input type="text" placeholder="id_pasien" name="id_pasien">
            <input type="text" placeholder="tekanan_darah" name="tekanan_darah">
            <input type="text" placeholder="denyut_nadi" name="denyut_nadi">
            <input type="text" placeholder="usia_tahun" name="usia_tahun">
            <input type="text" placeholder="usia_bulan" name="usia_bulan">
            <input type="text" placeholder="usia_hari" name="usia_hari">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Kunjungan</h2>
        <table>
            <tr>
                <td>id</td>
                <td>id_reservasi</td>
                <td>id_pasien</td>
                <td>tekanan_darah</td>
                <td>denyut_nadi</td>
                <td>usia_tahun</td>
                <td>usia_bulan</td>
                <td>usia_hari</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->id_reservasi }}</td>
                <td>{{ $row->id_pasien }}</td>
                <td>{{ $row->tekanan_darah }}</td>
                <td>{{ $row->denyut_nadi }}</td>
                <td>{{ $row->usia_tahun }}</td>
                <td>{{ $row->usia_bulan }}</td>
                <td>{{ $row->usia_hari }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>