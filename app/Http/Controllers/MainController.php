<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Libraries\GetData;

class MainController extends Controller
{
    //
    public function list()
    {
        $d=New GetData();
        $data=$d->emplist();
        return view('list', ['data' => $data]);
    }

    public function profile($id)
    {
        $d=New GetData();
        $data=$d->profile($id);
        return view('profile', ['data' => $data]);
    }

    public function home()
    {
        $d=New GetData();
        $data=$d->home();
        return view('home', ['data' => $data]);
    }
}
