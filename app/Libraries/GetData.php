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
                $data=array();
                $data=DB::select("select * from emp where ID = $id");
                return $data;
            }

            public function home(){
                $bptTotalData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT'");
                $bptLData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'L'");
                $bptPData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'P'");
                $sklTotalData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL'");
                $sklLData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'L'");
                $sklPData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'P'");
                $bptTotal=sizeof($bptTotalData);
                $sklTotal=sizeof($sklTotalData);
                $bptL=sizeof($bptLData);
                $bptP=sizeof($bptPData);
                $sklL=sizeof($sklLData);
                $sklP=sizeof($sklPData);
                $data=array($bptTotal, $sklTotal, $bptL, $bptP, $sklL, $sklP);
                return $data;
            }
           
            public function sdmreports($type){
                $OperLNSData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'NS'");
                $OperLAData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'A'");
                $OperLBData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'B'");
                $OperLCData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'C'");
                $OperLIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'I'");
                $OperLIIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY = 'OPERATOR' and SHIFT = 'II'");
                $OperPNSData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'NS'");
                $OperPAData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'A'");
                $OperPBData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'B'");
                $OperPCData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'C'");
                $OperPIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'I'");
                $OperPIIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY = 'OPERATOR' and SHIFT = 'II'");
                $SopirLData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and DEPT = 'SOPIR'");
                $SopirPData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and DEPT = 'SOPIR'");
                $StaffLNSData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'NS'");
                $StaffLAData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'A'");
                $StaffLBData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'B'");
                $StaffLCData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'C'");
                $StaffLIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'I'");
                $StaffLIIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'L' and CATEGORY like '%STAFF%' and SHIFT = 'II'");
                $StaffPNSData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'NS'");
                $StaffPAData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'A'");
                $StaffPBData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'B'");
                $StaffPCData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'C'");
                $StaffPIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'I'");
                $StaffPIIData=DB::select("select * from active_emp where PERUSAHAAN = '$type' and GENDER = 'P' and CATEGORY like '%STAFF%' and SHIFT = 'II'");

                $data=array(sizeof($OperLNSData), sizeof($OperLAData), sizeof($OperLBData), sizeof($OperLCData), sizeof($OperLIData), sizeof($OperLIIData), 
                            sizeof($OperPNSData), sizeof($OperPAData), sizeof($OperPBData), sizeof($OperPCData), sizeof($OperPIData), sizeof($OperPIIData),
                            sizeof($SopirLData), sizeof($SopirPData),
                            sizeof($StaffLNSData), sizeof($StaffLAData), sizeof($StaffLBData), sizeof($StaffLCData), sizeof($StaffLIData), sizeof($StaffLIIData), 
                            sizeof($StaffPNSData), sizeof($StaffPAData), sizeof($StaffPBData), sizeof($StaffPCData), sizeof($StaffPIData), sizeof($StaffPIIData), $type
                        );
                return $data;
            }

            
}
?>