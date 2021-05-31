@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kunjungan') }}</div>

                    <div class="card-body">
                    <form action="/kunjungan" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="id_reservasi" class="col-md-4 col-form-label text-md-right">{{ __('ID Reservasi') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_reservasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_pasien" class="col-md-4 col-form-label text-md-right">{{ __('ID Pasien') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_pasien">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tekanan_darah" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="tekanan_darah">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="denyut_nadi" class="col-md-4 col-form-label text-md-right">{{ __('Denyut Nadi') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="denyut_nadi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usia_Tahun" class="col-md-4 col-form-label text-md-right">{{ __('Usia Tahun') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="usia_tahun">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usia_bulan" class="col-md-4 col-form-label text-md-right">{{ __('Usia Bulan') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="usia_bulan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usia_hari" class="col-md-4 col-form-label text-md-right">{{ __('Usia Hari') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="usia_hari">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br><br>
            <div class="card">
                <div class="card-header">{{ __('TAMPILAN DATA') }}</div>

                    <div class="card-body">
                    <table border = "1">
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
            </div>


        </div>
    </div>
</div>
@endsection
