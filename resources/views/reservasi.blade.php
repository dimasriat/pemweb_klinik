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
        <h2>Tambah Data Reservasi</h2>
        <form action="/reservasi" method="POST">
            @csrf
            <input type="text" placeholder="id_pasien" name="id_pasien">
            <input type="text" placeholder="tanggal_rencana_datang" name="tanggal_rencana_datang">
            <input type="text" placeholder="id_poli_bagian" name="id_poli_bagian">
            <input type="text" placeholder="id_dokter" name="id_dokter">
            <input type="text" placeholder="no_telp" name="no_telp">
            <input type="text" placeholder="status_pasien" name="status_pasien">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Reservasi</h2>
        <table>
            <tr>
                <td>id</td>
                <td>id_pasien</td>
                <td>tanggal_rencana_datang</td>
                <td>id_poli_bagian</td>
                <td>id_dokter</td>
                <td>no_telp</td>
                <td>status_pasien</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->id_pasien }}</td>
                <td>{{ $row->tanggal_rencana_datang }}</td>
                <td>{{ $row->id_poli_bagian }}</td>
                <td>{{ $row->id_dokter }}</td>
                <td>{{ $row->no_telp }}</td>
                <td>{{ $row->status_pasien }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>