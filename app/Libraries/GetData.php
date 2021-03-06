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
                $emp_data=DB::select("select * from emp where ID = $id");
                $emp_desc=DB::select("select description from emp_desc where emp_id = $id");
                if(sizeof($emp_desc) > 0)
                    $emp_data[0]->desc = $emp_desc[0]->description;
                else
                    $emp_data[0]->desc = "None";
                return $emp_data;
            }

            public function home(){
                $bptLKKData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'L' and STATUS_KARYAWAN='KK'");
                $bptLKTData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'L' and STATUS_KARYAWAN='KT'");
                $bptPKKData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'P' and STATUS_KARYAWAN='KK'");
                $bptPKTData=DB::select("select * from active_emp where PERUSAHAAN = 'BPT' and GENDER = 'P' and STATUS_KARYAWAN='KT'");
                $sklLKKData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'L' and STATUS_KARYAWAN='KK'");
                $sklLKTData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'L' and STATUS_KARYAWAN='KT'");
                $sklPKKData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'P' and STATUS_KARYAWAN='KK'");
                $sklPKTData=DB::select("select * from active_emp where PERUSAHAAN = 'SKL' and GENDER = 'P' and STATUS_KARYAWAN='KT'");
                $data=array(sizeof($bptLKKData), sizeof($bptLKTData), sizeof($bptPKKData), sizeof($bptPKTData), sizeof($sklLKKData), sizeof($sklLKTData), sizeof($sklPKKData), sizeof($sklPKTData));
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

            public function updates(){
                $data=array();
                $data=DB::select("select * from updates");
                return $data;
            }

            public function addupdate($title, $body){
                DB::insert("insert into updates (id, post_date, title, body) values (null, CURDATE(), '$title', '$body')");
            }

            public function adddesc($id, $desc){
                $data=DB::select("select description from emp_desc where emp_id = $id");
                if(sizeof($data) > 0)
                    $updated=DB::update("update emp_desc set description = '$desc' where emp_id = ?", [$id]);
                else
                    DB::insert("insert into emp_desc (id, emp_id, description) values (null, '$id', '$desc')");
            }

            
}
?>