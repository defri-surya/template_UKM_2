<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('login', 'FrontController@login')->name('login');
Route::get('/', 'FrontController@index')->name('ukm');
Route::get('profil', 'FrontController@profil')->name('profil');
Route::get('gallery', 'FrontController@gallery')->name('gallery');
Route::get('katalogproduk', 'FrontController@katalogproduk')->name('katalogproduk');
Route::get('detailproduk/{slug}', 'FrontController@detailproduk')->name('detailproduk');
Route::get('detailprodukunggulan/{slug}', 'FrontController@detailprodukunggulan')->name('detailprodukunggulan');
Route::get('buktiTransaksi/{id}', 'FrontController@invoice')->name('buktiTransaksi');
Route::get('PrintbuktiTransaksi/{id}', 'FrontController@print_invoice')->name('print-invoice');

/* Cart */
Route::post('keranjangbeli', 'FrontController@keranjangbeli')->name('keranjangbeli');
Route::get('listkeranjangbelanja', 'CartController@listkeranjangbeli')->name('listkeranjangbelanja');
Route::get('hapuscart/{key}', 'CartController@hapuscart')->name('hapus.cart');
Route::post('prosesBeli', 'CartController@prosesbeli')->name('proses.orderbeli');

/* Raja Ongkir */
Route::get('/province', 'RajaongkirController@get_province')->name('province');
Route::get('/kota/{id}', 'RajaongkirController@get_city')->name('city');
Route::get('/origin={city_origin}&destination={city_destination}&courier={courier}', 'RajaongkirController@get_ongkir')->name('ongkir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'Paketdua'], function () {
    Route::namespace('Paketdua')->group(function () {
        Route::resource('profilepaketdua', 'ProfilePaketduaController');
        Route::resource('fotosliderpaketdua', 'FotosliderPaketduaController');
        Route::resource('youtubepaketdua', 'YoutubePaketduaController');
        Route::resource('mediapaketdua', 'MediaPaketduaController');
        Route::resource('gallerypaketdua', 'GalleryPaketduaController');
        Route::resource('productpaketdua', 'ProdukPaketduaController');
        Route::resource('linkpaketdua', 'LinkPaketduaController');
    });
});

Route::group(['middleware' => ['auth'], 'prefix' => 'Superadmin'], function () {
    Route::namespace('Superadmin')->group(function () {
        Route::resource('profile', 'ProfileController');
        Route::resource('fotoslider', 'FotosliderController');
        Route::resource('youtube', 'YoutubeController');
        Route::resource('media', 'MediaController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('kategori', 'KategoriprodukController');
        Route::resource('product', 'ProdukController');
        Route::resource('link', 'LinkController');
        Route::resource('produkunggulan', 'ProdukunggulanController');
    });
});

// Route::group(['middleware' => ['auth','CekRole:paketdua'], 'prefix' => 'Paketdua'], function () {
//     Route::namespace('Paketdua')->group(function (){
//         Route::resource('profilepaketdua', 'ProfilePaketduaController');
//         Route::resource('fotosliderpaketdua', 'FotosliderPaketduaController');
//         Route::resource('youtubepaketdua', 'YoutubePaketduaController');
//         Route::resource('mediapaketdua', 'MediaPaketduaController');
//         Route::resource('gallerypaketdua', 'GalleryPaketduaController');
//         // Route::resource('kategori', 'KategoriprodukController');
//         Route::resource('productpaketdua', 'ProdukPaketduaController');
//         Route::resource('linkpaketdua', 'LinkPaketduaController');
//         // Route::resource('produkunggulan', 'ProdukunggulanController');
//     });
// });

// Route::group(['middleware' => ['auth'], 'prefix' => 'Paketdua'], function () {
//     Route::namespace('Paketdua')->group(function (){
//         Route::resource('profile', 'ProfileController');
//         Route::resource('fotoslider', 'FotosliderController');
//         Route::resource('youtube', 'YoutubeController');
//         Route::resource('media', 'MediaController');
//         Route::resource('gallery', 'GalleryController');
//         Route::resource('kategori', 'KategoriprodukController');
//         Route::resource('product', 'ProdukController');
//         Route::resource('link', 'LinkController');
//         Route::resource('produkunggulan', 'ProdukunggulanController');
//     });
// });


// Route::group(['middleware' => ['auth' => 'CekRole:admin']], function () {
//     Route::namespace('Admin')->group(function () {
//         Route::resource('kategoripaketwisata', 'KategoripaketwisataController');
//         Route::resource('dataartikelwisata','ArtikelwisataController');
//         Route::resource('datacustomer', 'DatacustomerController');
//         Route::resource('datapaketwisata', 'DatapaketwisataController');
//         Route::get('datapengelolawisata', 'DatapengelolawisataController@index')->name('datapengelolawisata.index');
//         Route::get('datapengelolawisata/{id}', 'DatapengelolawisataController@show')->name('datapengelolawisata.show');
//         Route::put('datapengelolawisata/verifikasi/{id}', 'DatapengelolawisataController@verifikasi')->name('verifikasi');
//         Route::get('datatransaksi', 'DatatransaksiController@index')->name('datatransaksi.index');
//         Route::get('list-transaksi/detail/{id}', 'DataTransaksiController@show')->name('showTransaksiAdmin');
//         Route::get('print-invoice/{id}', 'DataTransaksiController@printInvoice')->name('printInvoiceAdmin');
//     });
// });

// Route::group(['middleware' => ['auth','CekRole:superadmin'], 'prefix' => 'Superadmin'], function () {
//     Route::namespace('Superadmin')->group(function (){
//         Route::resource('profile', 'ProfileController');
//         Route::resource('fotoslider', 'FotosliderController');
//         Route::resource('youtube', 'YoutubeController');
//         Route::resource('media', 'MediaController');
//         Route::resource('gallery', 'GalleryController');
//         Route::resource('kategori', 'KategoriprodukController');
//         Route::resource('product', 'ProdukController');
//         Route::resource('link', 'LinkController');
//         Route::resource('produkunggulan', 'ProdukunggulanController');
//     });
// });


Route::get('transaksi', 'TransaksiController@index')->name('transaksi.index');
Route::get('transaksi/{id}', 'TransaksiController@show')->name('transaksi.show');
Route::put('transaksi/{id}', 'TransaksiController@update')->name('transaksi.update');
Route::get('laporan', 'LaporanController@index')->name('laporan.index');
Route::get('laporan/{id}', 'LaporanController@print')->name('laporan.print');
