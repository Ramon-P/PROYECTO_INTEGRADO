<?php


class Misc{

    public static function FormatNss($nss){

        return wordwrap($nss, 3,".", true);

    }
    
    public static function fecha($tiempo){

        return date("d/m/Y",strtotime($tiempo));
    }



}