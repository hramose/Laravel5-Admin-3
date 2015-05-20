<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class AdminUyeGirisController extends Controller {


    public function  giris(){
        return view('admin/adminGiris');
    }


    public function girisKontrol(){

        $data = Input::all();
        $kural = array('email'=>'required|email','password'=>'required');
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()){
            // gönderilen verilerde hata var
            return \Redirect::to('admin/')->withErrors($dogrulama)->withInput();
        }else {

            $bilgi = \DB::select("select *from  kullanicilar where mail = ? and sifre = ? ", array($data["email"], md5($data["password"])));
            if($bilgi){
                // kullanıcı var
                // session açılıyor ve değer atanıyor
                \Session::put('adminOturumID', $bilgi[0]->id);
                \Session::put('adminOturumAdi', $bilgi[0]->adi);
                \Session::put('adminOturumSoyadi', $bilgi[0]->soyadi);
                \Session::put('adminOturumMail', $bilgi[0]->mail);
                return \Redirect::to('admin/DashBoard');
                //return view('admin/DashBoard');
                //$data = array('mesaj'=>'Giriş Başarılı');
            }else {
                $data = array('mesaj'=>'Kullanıcı Adı yada Şifreniz Hatalı');
            }
        }
        return view('admin/adminGiris', array('data'=>$data));
    }


    // çıkış yapma fonksiyonu yapılıyor
    public function  cikisYap(){
        \Session::flush();
        return \Redirect::to('admin/');
    }


} 