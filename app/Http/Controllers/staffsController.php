<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffsController extends Controller
{
    public function home(){
        return view("staffs/home");
    }

    public function staffsparty(){
        return view("staffs/party");
    }

    public function partytotal($total){
        return view("staffs/partytotal",["total"=>$total]);
    }

    public function partytotalconfirm($total,$status){
        return view("staffs/partytotalconfirm",['total'=>$total,'status'=>$status]);
    }
}

