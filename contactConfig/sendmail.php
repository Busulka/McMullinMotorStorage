<?php
$siteKey 	= 'xxxxxxxxxxxxxxxxxxxxxx';
$secretKey 	= 'xxxxxxxxxxxxxxxxxxxxxxxxxx';


$toEmail = 'to@xxx.co.uk';

$postData = $statusMsg = $valErr = '';
$status = 'error';

if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = "McMullinMotor Storage - ".trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate reCAPTCHA box
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);

        $responseData = json_decode($verifyResponse);

        if($responseData->success){

            $fromName = $name;
            $formEmail = $email;
            $htmlContent = "
					<h2>Message from the contactConfig form on McMullin Motor Storage</h2>
					<p><b>Name: </b>".$name."</p>
					<p><b>Email: </b>".$email."</p>
                    <p><b>Subject: </b> ".$subject."</p>
					<p><b>Message: </b>".$message."</p>
				";


            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n";

            @mail($toEmail, $subject, $htmlContent, $headers);

            $status = 'success';
            $statusMsg = 'Thank you, '.$name.'! Your message has been submitted successfully.';
            $postData = '';
        }else{
            $statusMsg = 'Robot verification failed, please try again.';
        }
    }else{
        $statusMsg = 'Please check on the reCAPTCHA box.';
    }
}


