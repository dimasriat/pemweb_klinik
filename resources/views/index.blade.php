@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klinik</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>App Klinik</h1>
            <div class="row-justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Daftar Tabel') }}</div>

                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="/perawat">Perawat</a>
                                </li>
                                <li>
                                    <a href="/kunjungan">Kunjungan</a>
                                </li>
                                <li>
                                    <a href="/kunjungan_poli">Kunjungan Poli</a>
                                </li>
                                <li>
                                    <a href="/tindakan">Tindakan</a>
                                </li>
                                <li>
                                    <a href="/bhp">BHP</a>
                                </li>
                                <li>
                                    <a href="/obat">Obat</a>
                                </li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
            </div>
    </div> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>