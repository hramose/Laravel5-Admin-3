<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class AdminAnaEkranController extends Controller {

    public function  DashBoard(){
        return view('admin/adminDashBoard');
    }

} 