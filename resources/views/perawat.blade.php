@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perawat') }}</div>

                    <div class="card-body">
                    <form action="/perawat" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="no_telp">
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
            </div>


        </div>
    </div>
</div>
@endsection
