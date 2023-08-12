<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data['employeedata'] = [
            "name"=>"Aung Ko Ko",
            "email"=>"aungkoko@gmail.com",
            "phone"=>"09123456"
        ];

        // dd($data);

        return view("employees/index",$data);
    }

    public function passingdataone(){

        $fullname = "Honey Nway Oo";

        $city = "Bago";

        return view("employees/dataone",["name"=>$fullname,"city"=>$city]);
    }

    public function passingdatatwo(){
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "0978792323"
        ];

        $greeting = "Nice to meet you";

        return view("employees/datatwo",["students"=>$students,"greeting"=>$greeting]);
    }

    public function passingdatathree(){

        $greeting = "Have a Nice Day";

        $students = [
            "Honey Nway Oo",
            "Bago",
            "09888888"
        ];

        return view("employees/datathree")->with("greeting",$greeting)->with("students",$students);
    }

    public function passingdatafour(){
        $greeting = "Good Morning";

        $students = [
            "Honey Nway Oo",
            "yangon",
            "098743847"
        ];

        return view("employees/datafour",compact("greeting","students"));
    }

    public function show(){

        $greeting = "Good morning";

        $data["employeedata"] = [
            "name" => "Aung Ko Ko",
            "email" => "aungkoko@gmail.com",
            "phone" => "09111111"
        ];

        return view("employees/show",$data);
    }

    public function edit(){
        $data["employeedata"] =[
            "name" => "Honey Nway Oo",
            "email" => "honey@gmail.com",
            "phone" => "09123344"
        ];
        // return view("employees/edit")->with("data",$data);
        return view("employees/edit",compact("data"));
    }

    public function update(){
        $data["employeedata"] =[
            "name" => "Mya Hnin Yee Lwin",
            "email"=>"mamamya@gmail.com",
            "phone" => "09111111"
        ];


        return view("employees/update",["employee"=>$data["employeedata"]]);
    }
}

