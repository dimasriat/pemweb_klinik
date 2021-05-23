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
        <h2>Tambah Data BHP</h2>
        <form action="/bhp" method="POST">
            @csrf
            <input type="text" placeholder="id_bhp" name="id_bhp">
            <input type="text" placeholder="harga" name="harga">
            <input type="text" placeholder="jml" name="jml">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data BHP</h2>
        <table>
            <tr>
                <td>id</td>
                <td>id_bhp</td>
                <td>harga</td>
                <td>jml</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->id_bhp }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->jml }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>