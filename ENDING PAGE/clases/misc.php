<?php


class Misc{

    public static function num(){

        return rand(0,99999);
    }

    public static function fecha(){

        $Object = new DateTime();  
        $DateAndTime = $Object->format('Y-m-d');  

        return $DateAndTime;

    }


}