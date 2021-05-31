@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Isi') }}</div>

                <div class="card-body">
                    
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-left">
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
    </div>
</div>
@endsection
