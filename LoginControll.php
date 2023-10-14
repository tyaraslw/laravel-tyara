<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class LoginControll extends Controller
{
    function login(){
        return view('/login');
    }

    function proses_login(){
        var_dump($request->all());
    }
}