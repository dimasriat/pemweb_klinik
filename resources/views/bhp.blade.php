@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BHP') }}</div>

                    <div class="card-body">
                    <form action="/bhp" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="id_bhp" class="col-md-4 col-form-label text-md-right">{{ __('ID BHP') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="id_bhp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="harga">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jml" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="jml">
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
            </div>


        </div>
    </div>
</div>
@endsection
