<?php

use Symfony\Component\Console\Helper\Helper;

abstract  class myhelper extends Helper
{
 
   
   
    public static function insertIntoDb($name = 'Mission', $number, $mydbtable = "missions")
    {
      

        $Randnumber  = rand(2500,1000000) ;
        if($number == "")
        {
            $number = $Randnumber ; 
        }
              $mytime = Carbon\Carbon::now(); //Getting date and time

        


        $res = DB::table($mydbtable)->insert([
            [
                'missionName' => $name,
                'missionNumbe' => $number,
                'dateofupdate' => $mytime,
                'created_at' => $mytime,
                'canceled' => false
            ],


        ]);
        return $res;
    }

    public static function FetchMissions()
    {
        $missions = DB::table('missions')->get(); 
        return $missions;
    }

    public static function DeleteMission($id)
    {
      
        $Deleter = DB::table('missions')->where('ID', $id)->delete();
         return $Deleter;
        
    
    }


    public static function UpdateMissios($id, $name, $number = 0, $canceled)
    {
        //FOR FUTURE UPDATING FIELDS : ==============================================================
        // $update = DB::table('missions')
        // ->where('id', $id)
        // ->update(['missionName' => $name, 'missionNumbe' => $number, 'canceled' => $canceled]);
        // return $update;
        //============================================================================================

        $update = DB::table('missions')
        ->where('id', $id)
        ->update(['canceled' => '1'],['dateofupdate' => Carbon\Carbon::now()]);
        return $update;


    }





}
