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
        return view('list', ['data' => $data, 'list' => 'hi']);
    }

    public function profile($id)
    {
        $d=New GetData();
	$data=$d->profile($id);
	$data = json_decode(json_encode($data[0], true));
//	$p=$_SERVER['DOCUMENT_ROOT'].'/profilepics/'.$data->NIK.'.jpg';
//	echo $p;
//	dd($data);
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/profilepics/'.$data->nik.'.jpg')){
            $data->img = '/profilepics/'.$data->nik.'.jpg';
        } else {
            $data->img = '/profilepics/defaultPic.png';
        }
        return view('profile', ['data' => $data]);
    }

    public function home()
    {
        $d=New GetData();
        $data=$d->home();
        return view('home', ['data' => $data]);
    }

    public function sdmreports($type)
    {
        $d=New GetData();
        $data=$d->sdmreports($type);
        return view('sdmreports', ['data' => $data]);
    }

    public function updates()
    {
        $d=New GetData();
        $data=$d->updates();
        return view('updates', ['data' => $data]);
    }

    public function addupdate(Request $request)
    {
        $title=$request->title;
        $body=$request->body;
        $d=New GetData();
        $data=$d->addupdate($title, $body);
        return redirect('updates');
    }
}
