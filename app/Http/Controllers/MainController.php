<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Libraries\GetData;

class MainController extends Controller
{
    //
    public function index()
    {
        $d=New GetData();
        $data=$d->emplist();
        return view('profile', ['data' => $data]);
    }
}
