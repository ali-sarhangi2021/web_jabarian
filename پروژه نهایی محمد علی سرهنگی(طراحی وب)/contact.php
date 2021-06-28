<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'yourEmail@yahoo.com';
$message = 'از: '.$name.' ایمیل: '.$email.' پیام: '.$message;
$headers = 'from: info@siteshoma.ir' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
?>
<p style="text-align:right;font-family:Tahoma">پیام شما با موفقیت ارسال شد!</p>
<meta http-equiv="refresh" content="1; url=index.html">
<?php
}else{
?>
<p style="text-align:right;font-family:Tahoma">متاسفانه پیام شما ارسال نشد. دوباره تلاش کنید.</p>
<meta http-equiv="refresh" content="1; url=index.html">
<?php
}

?>
