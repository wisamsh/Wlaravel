
<?php 
$res =  myhelper::FetchMissions();        
 $clnt_OK = array("answer"=>"OK");
 $clnt_ERR = array("answer"=>"Error");

 if($res){ // 1 when raw is added to db table
    print_r(json_encode($res));
 }
 else
 {
     print_r(json_encode($clnt_ERR));
 }
           
           
            
            
?>