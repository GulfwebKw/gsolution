<?php
session_start();
$errorMSG = [];

 function VerifyCaptcha($response)
    {
	
	    $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret     = '6Lej3TUUAAAAAA4ud-Eu67omrOCQbrM1rvO2ODlF';
        $url        = $google_url."?secret=".$secret."&response=".$response;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_TIMEOUT, 15);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); 
        $curlData = curl_exec($curl);
 
        curl_close($curl);
 
        $res = json_decode($curlData, TRUE);
        if($res['success'] == 'true') 
            return TRUE;
        else
            return FALSE;
    }

// NAME
if (empty($_POST["name"])) {
    $errorMSG['message'] = "Name is required ";
    $errorMSG['status'] = 400;
}elseif (empty($_POST["email"])) {
    $errorMSG['message'] = "Email is required ";
    $errorMSG['status'] = 400;
}elseif (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG['message'] = "Email should be valid format like email@domain.com";
    $errorMSG['status'] = 400;
} else if (empty($_POST["phone_number"])) {
    $errorMSG['message'] = "Phone Number is required ";
    $errorMSG['status'] = 400;
} elseif (empty($_POST["message"])) {
    $errorMSG['message'] = "Message is required ";
    $errorMSG['status'] = 400;
}elseif(empty($_POST['g-recaptcha-response'])){
    $errorMSG['message'] = "Invalid Captcha";
    $errorMSG['status'] = 400;
}elseif(!empty($_SESSION['sentEmail']) && $_SESSION['sentEmail']==$_POST["email"]){
    $errorMSG['message'] = "You have already used the email. Please try again with different email.";
    $errorMSG['status'] = 400;
} else { 
$grecaptcharesponse = $_POST['g-recaptcha-response'];
$recaptchaValidate  = VerifyCaptcha($grecaptcharesponse);
if($recaptchaValidate){
$name         = $_POST["name"];
$phone_number = $_POST["phone_number"];
$email        = $_POST["email"];
$message      = $_POST["message"];



$bodySubject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$headers = "MIME-Version: 1.0";
$headers .= "Content-type:text/html;charset=UTF-8";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Return-Path: $email\r\n";
$headers .= "CC: $email\r\n";
$headers .= "BCC: $email\r\n";

$EmailTo = 'info@gsolutions.com.kw';         
$success = mail($EmailTo,$bodySubject,$Body,$headers);
//send to thanks msg
$headersx = "MIME-Version: 1.0";
$headersx .= "Content-type:text/html;charset=UTF-8";
$headersx .= "From: info@gsolutions.com.kw\r\n";
$headersx .= "Reply-To: info@gsolutions.com.kw\r\n";
$headersx .= "Return-Path: info@gsolutions.com.kw\r\n";
$headersx .= "CC: info@gsolutions.com.kw\r\n";
$headersx .= "BCC: $email\r\n";

$bodySubject = "GSolution- Thank You";
$Body = "Dear ".$name."<br>Thank you for sending your information.We will get back to you if its needed.";
$success = mail($email,$bodySubject,$Body,$headersx);
// redirect to success page
if ($success){
    $_SESSION['sentEmail'] = $email;
    $errorMSG['message'] = "Message has been sent successfully ";
    $errorMSG['status'] = 200;
}else{
    $errorMSG['message'] = "Somehting went wrong. Please reload the page and try again.";
    $errorMSG['status'] = 400;
}
}else{
    $errorMSG['message'] = "Invalid Captcha";
    $errorMSG['status'] = 400;
}
}
echo json_encode($errorMSG);
?>