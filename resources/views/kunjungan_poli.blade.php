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
        <h2>Tambah Data Kunjungan Poli</h2>
        <form action="/kunjungan_poli" method="POST">
            @csrf
            <input type="text" placeholder="id_periksa" name="id_periksa">
            <input type="text" placeholder="id_poli_bagian" name="id_poli_bagian">
            <input type="text" placeholder="id_dokter_pemeriksa" name="id_dokter_pemeriksa">
            <input type="text" placeholder="id_perawat_pemeriksa" name="id_perawat_pemeriksa">
            <input type="text" placeholder="id_penyakit" name="id_penyakit">
            <input type="text" placeholder="biaya_pendaftaran" name="biaya_pendaftaran">
            <input type="submit" value="Insert">
        </form>
        <h2>Tampilkan Data Kunjungan Poli</h2>
        <table>
            <tr>
                <td>id</td>
                <td>id_periksa</td>
                <td>id_poli_bagian</td>
                <td>id_dokter_pemeriksa</td>
                <td>id_perawat_pemeriksa</td>
                <td>id_penyakit</td>
                <td>biaya_pendaftaran</td>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->id_periksa }}</td>
                <td>{{ $row->id_poli_bagian }}</td>
                <td>{{ $row->id_dokter_pemeriksa }}</td>
                <td>{{ $row->id_perawat_pemeriksa }}</td>
                <td>{{ $row->id_penyakit }}</td>
                <td>{{ $row->biaya_pendaftaran }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>