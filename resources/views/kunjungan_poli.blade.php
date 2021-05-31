@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kunjungan Poli') }}</div>

                    <div class="card-body">
                    <form action="/kunjungan_poli" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="id_periksa" class="col-md-4 col-form-label text-md-right">{{ __('ID Periksa') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_periksa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_poli_bagian" class="col-md-4 col-form-label text-md-right">{{ __('ID Poli Bagian') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_poli_bagian">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_dokter_pemeriksa" class="col-md-4 col-form-label text-md-right">{{ __('ID Dokter Pemeriksa') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_dokter_pemeriksa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_perawat_pemeriksa" class="col-md-4 col-form-label text-md-right">{{ __('ID Perawat Pemeriksa') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_perawat_pemeriksa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_penyakit" class="col-md-4 col-form-label text-md-right">{{ __('ID Penyakit') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_penyakit">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="biaya_pendaftaran" class="col-md-4 col-form-label text-md-right">{{ __('Biaya Pendaftaran') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="biaya_pendaftaran">
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
            </div>


        </div>
    </div>
</div>
@endsection
