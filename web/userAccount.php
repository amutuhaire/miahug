<?php
 class userAccount{
    private static $URL = "http://localhost/miahug/api.php/records/resident";
    public static function login(){
        $result = self::get_request(self::$URL);
    }
    public static function get_request($url){
      $ch =   curl_init($url);
      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2000);
      $result = curl_exec($ch);

      if(!$result){

        if(curl_error($ch))
        {
            $result = curl_error($ch);
        } else {
            $result = 'Null';
        }

        curl_close($ch);
    } else {
        curl_close($ch);

        $obj = json_decode($result);
        return $obj;
        }
        return $result;
    }

}


?>