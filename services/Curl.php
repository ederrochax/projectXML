<?php

class Curl
{

    public function resquest($path){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$path);
        curl_setopt($ch, CURLOPT_FAILONERROR,1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        $result = curl_exec($ch);          
        curl_close($ch);

        sleep(15); //Teste de tempo

        $structure = new SimpleXMLElement($result);

        if($structure != ''){
            return true;
        }
        
    }

}