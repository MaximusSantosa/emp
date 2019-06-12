<?php
namespace App\Libraries;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class GetData extends Controller{

            public function __construct() {
                     
            }
                public function emplist(){
                    //$data=array('o','n','e');
                    $data=DB::select("select * from emp");
                    return $data;
            } 

            public function profile($id){
                $data=DB::select("select * from emp where ID = $id");
                return $data;
            }

            public function home(){
                $bptData=DB::select("select * from emp where PERUSAHAAN = 'BPT'");
                $sklData=DB::select("select * from emp where PERUSAHAAN = 'SKL'");
                $totalBpt=sizeof($bptData);
                $totalSkl=sizeof($sklData);
                $data=array($totalBpt, $totalSkl);
                return $data;
            }
           
            

            
}
?>