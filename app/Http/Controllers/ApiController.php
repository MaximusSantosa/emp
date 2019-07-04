<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Libraries\Tools;
use App\Libraries\GetData;

class ApiController extends Controller
{
    //
    public function getRefresh()
    {
        try{
            $status=200;
            $r=shell_exec("sh /var/www/html/emp/public/docs/phpcli/refresh.sh");
            $result="Data refreshed";
        }catch(Exception $e){
            $status=500;
            $result="Failed to refresh data";
        }

        $response=array("status"=>$status,"msg"=>"$result");
        return response()->json($response);
    }
        
}
