<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



// üye listeleri alınıyor
Route::get('uyeler', 'uyeController@uye');
Route::get('uyeler/sil/{id}','uyeController@sil');

Route::get('deneme', 'denemeController@deneme');
// KULLANICILAR:

Route::get('tekin', 'TekinController@tekinaydogdu');
Route::get('tablolariOlustur', 'TekinController@tablolariOlustur');
Route::post('kisiGuncelle', 'TekinController@KisiGuncelle');
Route::post('kisiSil', 'TekinController@KisiSil');

/** anasayfa */
Route::get("kullanicilar", "KullanicilarController@index");

/** kullanıcılar listesi. */
Route::get("kullanicilar/liste", "KullanicilarController@liste");

/** Kullanıcı düzenleme sayfası. */
Route::get("kullanicilar/duzenle/{id}", "KullanicilarController@duzenle");
Route::post("kullanicilar/duzenle/{id}", "KullanicilarController@duzenleForm");

/** Kullanıcı silme işlemi. */
Route::get("kullanicilar/sil/{id}", "KullanicilarController@silForm");

/** Kullanıcı ekleme sayfası. */
Route::get("kullanicilar/ekle", "KullanicilarController@ekle");
Route::post("kullanicilar/ekle", "KullanicilarController@ekleForm");

// üye düzenlenme bölümü yapılıyor
Route::get("uyeler/duzenle/{id}", "uyeController@duzenle");
Route::post("uyeler", "uyeController@vtDuzenle");
// mail gönderme fonksiyonu
Route::get("uyeler/mailGonder", "uyeController@mailGonder");


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



// Admin Başlangıç
Route::get('admin', 'admin\AdminUyeGirisController@giris');
Route::post('admin','admin\AdminUyeGirisController@girisKontrol');
Route::get('admin/DashBoard','admin\AdminAnaEkranController@DashBoard');
Route::get('admin/cikisYap', 'admin\AdminUyeGirisController@cikisYap');
// Admin Bitiş
