<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/perawat', function () {
    $data = DB::table('perawat')->get();
    return view('perawat', ['data' => $data]);
});
Route::post('/perawat', function (Request $req) {
    DB::table('perawat')->insert($req->except('_token'));
    return redirect('/perawat');
});
Route::get('/kunjungan', function () {
    $data = DB::table('kunjungan')->get();
    return view('kunjungan', ['data' => $data]);
});
Route::post('/kunjungan', function (Request $req) {
    DB::table('kunjungan')->insert($req->except('_token'));
    return redirect('/kunjungan');
});
Route::get('/kunjungan_poli', function () {
    $data = DB::table('kunjungan_poli')->get();
    return view('kunjungan_poli', ['data' => $data]);
});
Route::post('/kunjungan_poli', function (Request $req) {
    DB::table('kunjungan_poli')->insert($req->except('_token'));
    return redirect('/kunjungan_poli');
});
Route::get('/tindakan', function () {
    $data = DB::table('tindakan')->get();
    return view('tindakan', ['data' => $data]);
});
Route::post('/tindakan', function (Request $req) {
    DB::table('tindakan')->insert($req->except('_token'));
    return redirect('/tindakan');
});
Route::get('/bhp', function () {
    $data = DB::table('bhp')->get();
    return view('bhp', ['data' => $data]);
});
Route::post('/bhp', function (Request $req) {
    DB::table('bhp')->insert($req->except('_token'));
    return redirect('/bhp');
});
Route::get('/obat', function () {
    $data = DB::table('obat')->get();
    return view('obat', ['data' => $data]);
});
Route::post('/obat', function (Request $req) {
    DB::table('obat')->insert($req->except('_token'));
    return redirect('/obat');
});