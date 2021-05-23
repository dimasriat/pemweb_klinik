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
        <h2>Tambah Data Ref_Poli_Bagian</h2>
        <form action="/ref_poli_bagian" method="POST">
            @csrf
            <input type="text" placeholder="nama" name="nama">
            <input type="text" placeholder="harga_pendaftaran" name="harga_pendaftaran">
            <input type="text" placeholder="id_user" name="id_user">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Ref_Poli_Bagian</h2>
        <table>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>harga_pendaftaran</td>
                <td>id_user</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->harga_pendaftaran }}</td>
                <td>{{ $row-id_user }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>