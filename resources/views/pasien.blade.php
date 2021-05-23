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
        <h2>Tambah Data Pasien</h2>
        <form action="/pasien" method="POST">
            @csrf
            <input type="text" placeholder="no_rm" name="no_rm">
            <input type="text" placeholder="nama" name="nama">
            <input type="text" placeholder="nik" name="nik">
            <input type="text" placeholder="alamat" name="alamat">
            <input type="text" placeholder="tempat_lahir" name="tempat_lahir">
            <input type="text" placeholder="tgl_lahir" name="tgl_lahir">
            <input type="text" placeholder="rt" name="rt">
            <input type="text" placeholder="rw" name="rw">
            <input type="text" placeholder="id_kelurahan" name="id_kelurahan">
            <input type="text" placeholder="id_kecamatan" name="id_kecamatan">
            <input type="text" placeholder="id_kabupaten" name="id_kabupaten">
            <input type="text" placeholder="id_provinsi" name="id_provinsi">
            <input type="text" placeholder="id_user" name="id_user">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Pasien</h2>
        <table>
            <tr>
                <td>id</td>
                <td>no_rm</td>
                <td>nama</td>
                <td>nik</td>
                <td>alamat</td>
                <td>tempat_lahir</td>
                <td>tgl_lahir</td>
                <td>rt</td>
                <td>rw</td>
                <td>id_kelurahan</td>
                <td>id_kecamatan</td>
                <td>id_kabupaten</td>
                <td>id_provinsi</td>
                <td>id_user</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->no_rm }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->tempat_lahir }}</td>
                <td>{{ $row->tgl_lahir }}</td>
                <td>{{ $row->rt }}</td>
                <td>{{ $row->rw }}</td>
                <td>{{ $row->id_kelurahan }}</td>
                <td>{{ $row->id_kecamatan }}</td>
                <td>{{ $row->id_kabupaten }}</td>
                <td>{{ $row->id_provinsi }}</td>
                <td>{{ $row->id_user }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>