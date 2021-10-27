<?php

if(isset($_POST['send_message'])) {
	
$email=$_POST['email'];
$name=$_POST['name'];
$to      = 'ara.energreen@gmail.com';
$subject = $_POST['subject'];
$message=$_POST['message'];

$headers = 'From: '.$name . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo "<script>alert('Your message has been sent.'); window.location ='index.php'; </script>";
}


}
?>

