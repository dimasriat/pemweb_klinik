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
        <h2>Tambah Data Perawat</h2>
        <form action="/perawat" method="POST">
            @csrf
            <input type="text" placeholder="nama" name="nama">
            <input type="text" placeholder="no_telp" name="no_telp">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Perawat</h2>
        <table>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>no_telp</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->no_telp }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>