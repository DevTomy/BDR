<?php
error_reporting(0);
// @DinoSoft - @DevTomy
// https://DinoSoft.ir

class Bdr {
    public function hash($str){
            $curl = curl_init('https://DinoSoft.ir/BDR/api.php');
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => ['type'=>'hash','str'=>$str],
                CURLOPT_CUSTOMREQUEST => 'POST',
            ]);
            $response = json_decode(curl_exec($curl),true); 
        return $response['hashed'];
    }
    
    public function encode($str){
        $curl = curl_init('https://DinoSoft.ir/BDR/api.php');
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => ['type'=>'encode','str'=>$str],
            CURLOPT_CUSTOMREQUEST => 'POST',
        ]);
        $response = json_decode(curl_exec($curl),true); 
        return $response['encoded'];
        }

    function decode($str){
        $curl = curl_init('https://DinoSoft.ir/BDR/api.php');
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => ['type'=>'decode','str'=>$str],
            CURLOPT_CUSTOMREQUEST => 'POST',
        ]);
        $response = json_decode(curl_exec($curl),true); 
        return $response['decoded'];
        }
}