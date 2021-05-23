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
