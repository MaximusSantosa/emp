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
                $bptTotalData=DB::select("select * from emp where PERUSAHAAN = 'BPT'");
                $bptLData=DB::select("select * from emp where PERUSAHAAN = 'BPT' and GENDER = 'L'");
                $bptPData=DB::select("select * from emp where PERUSAHAAN = 'BPT' and GENDER = 'P'");
                $sklTotalData=DB::select("select * from emp where PERUSAHAAN = 'SKL'");
                $sklLData=DB::select("select * from emp where PERUSAHAAN = 'SKL' and GENDER = 'L'");
                $sklPData=DB::select("select * from emp where PERUSAHAAN = 'SKL' and GENDER = 'P'");
                $bptTotal=sizeof($bptTotalData);
                $sklTotal=sizeof($sklTotalData);
                $bptL=sizeof($bptLData);
                $bptP=sizeof($bptPData);
                $sklL=sizeof($sklLData);
                $sklP=sizeof($sklPData);
                $data=array($bptTotal, $sklTotal, $bptL, $bptP, $sklL, $sklP);
                return $data;
            }
           
            

            
}
?>