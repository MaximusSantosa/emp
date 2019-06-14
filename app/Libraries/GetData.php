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
                $bptTotalData=DB::select("select * from emp where PERUSAHAAN = 'BPT' and TGL_KELUAR is NULL");
                $bptLData=DB::select("select * from emp where PERUSAHAAN = 'BPT' and GENDER = 'L' and TGL_KELUAR is NULL");
                $bptPData=DB::select("select * from emp where PERUSAHAAN = 'BPT' and GENDER = 'P' and TGL_KELUAR is NULL");
                $sklTotalData=DB::select("select * from emp where PERUSAHAAN = 'SKL' and TGL_KELUAR is NULL");
                $sklLData=DB::select("select * from emp where PERUSAHAAN = 'SKL' and GENDER = 'L' and TGL_KELUAR is NULL");
                $sklPData=DB::select("select * from emp where PERUSAHAAN = 'SKL' and GENDER = 'P' and TGL_KELUAR is NULL");
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