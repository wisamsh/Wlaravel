<?php 

 $res =  myhelper::UpdateMissios($id, $name, $number, $canceled);
 $clnt_OK = array("answer"=>"OK");
 $clnt_ERR = array("answer"=>"Error");
 
 if($res == 1){ // 1 when raw is added to db table
    print_r(json_encode($clnt_OK));
 }
 else
 {
     print_r(json_encode($clnt_ERR));
 }

?>