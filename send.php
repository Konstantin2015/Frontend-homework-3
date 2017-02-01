/**
* Created by PhpStorm.
* User: Костя
* Date: 31.01.2017
* Time: 19:25
*/

<?php

$message = "First name: {$_POST['user']}<br>"; // добавляем имя в текст
$message = "Company name: {$_POST['company']}<br>";// добавляем телефон в текст
$message =  "Street: {$_POST['street']}<br>";
$message =  "City: {$_POST['city']}<br>";
$message =  "State: {$_POST['state']}<br>";
$message =  "Country: {$_POST['country']}<br>";
$message =  "ZipCode: {$_POST['zipcode']}<br>";
$message =  "Country of Interest: {$_POST['country-of-interest']}<br>";
$message .=  "Additional Notes: {$_POST['notes']}<br>";


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'mailer_test_2014'; // логин от вашей почты
//$mail->Password = '!mailer_2014!'; // пароль от почтового ящика
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'mailerrrr@mail.ru';
$mail->FromName = 'Андрей';
$mail->addAddress('Goldenkot@mail.ru', 'Андрей');
$mail->isHTML(true);
$mail->Subject = 'Заказ обратного звонка';
$mail->Body = $message;

?>

