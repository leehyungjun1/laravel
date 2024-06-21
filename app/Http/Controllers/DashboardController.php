<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        $users = [
            ["name"=>"james", "age"=>"43"],
            ["name"=>"jaeyoon", "age"=>"8"]
        ];

        return view("dashboard1", ['users'=>$users] );
    }
}
