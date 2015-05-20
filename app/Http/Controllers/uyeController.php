<?php
/**
 * Created by PhpStorm.
 * User: wissen
 * Date: 4.5.2015
 * Time: 12:35
 */

namespace App\Http\Controllers;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Mail;



class uyeController extends Controller {


    public function uye(){

        $datalar = DB::select("select *from kullanicilar");
        return view('uyeler', array("datalar"=>$datalar));
    }


    public function sil($id){

        DB::delete("delete from kullanicilar WHERE id = ?", array($id));
        return Redirect::to('uyeler');
    }


    public function duzenle($id){

        $data = DB::select("select *from kullanicilar WHERE id = ?", array($id));
        return view('uyeler', array("duzenleData"=>$data));
    }


    public function vtDuzenle() {
        $gelen = Input::all();
        $id = $gelen["id"];
        $mail = $gelen["mail"];
        $adi = $gelen["adi"];
        $soyadi = $gelen["soyadi"];
        $durum = DB::update("update kullanicilar set mail = ?, adi = ?, soyadi = ? WHERE  id = ?", array($mail,$adi,$soyadi,$id));
        if($durum) {
            //return view('uyeler');
            return Redirect::to("uyeler");
        }
    }


    // mail gönderme fonksiyonu
    public function mailGonder() {
        Mail::send('emails.welcome', ['key' => 'value'], function($message)
        {
            $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
        });
        return Redirect::to("uyeler");
    }

} 