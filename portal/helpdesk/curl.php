<?php

  if(isset($_POST['Mobile']))
  {
     $mobileNumber =  isset($_POST['Mobile'])=='' ? '0' : '91'.$_POST['Mobile'];
     $OTP  = isset($_POST['OTP'])=='' ? '0' : $_POST['OTP'];
     $authKey ='238525Ayuyf0rg85ba29ec8';
     $sender = 'LEDGER';
      switch ($_POST['key']) {
        case 'sendotp':
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL =>'http://control.msg91.com/api/sendotp.php?template=&otp_length=4&authkey='.$authKey.'&message=&sender='.$sender.'&mobile='.$mobileNumber.'&otp=&otp_expiry=&email=',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            ));
            $response =curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            echo $response;  return 0;
          break;
          case 'verifyotp':
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL =>'https://api.msg91.com/api/v5/otp/verify?mobile='.$mobileNumber.'&otp='.$OTP.'&authkey='.$authKey.' ',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            ));
            $response =curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            echo $response;  return 0;
          break;
        
        default:
          break;
      }
  }

?>

