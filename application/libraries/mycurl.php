<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mycurl {
    function payairtime($network,$phone,$amount,$user_ref) {
        $request = "";
        $param["useri"] = "07038884094";
        $param["pass"] = "0009efb3568b77b5f2d9";
        $param["network"] = "$network";
$param["phone"] = "$phone";
$param["amount"] = "$amount";
$param["user_ref"] = "$user_ref";

foreach($param as $key=>$val) //traverse through each member of the param array
{
$request .= $key . "=" . urlencode($val); //we have to urlencode the values
$request .= '&'; //append the ampersand (&) sign after each paramter/value pair
}
$len = strlen($request) - 1;
$request = substr($request, 0, $len); 

        $url = "https://mobileairtimeng.com/httpapi/?";
       
        $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url$request);
                  curl_setopt($ch, CURLOPT_HEADER, false);
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
                  $response = curl_exec($ch);
                  curl_close($ch);

                  $array = json_decode($response, true); //decode the JSON response
                  $trans_id = $array["user_ref"];
                  $network = $array["details"]["network"];
                  $phone_number = $array["details"]["phone"];
                  $amount = $array["details"]["amount"];
                  $status = $array["details"]["status"];
                  $balance = $array["details"]["balance"];
                  if($status == "SUCCESSFUL"){
echo"success";
                    }else{
                    //write failed code
                    echo "failed";
                    }

    }

}

?>

