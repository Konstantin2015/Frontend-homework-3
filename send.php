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

if( $mail->send() ){

echo '<p style="color: green;">Ваше сообщение отправлено</p>';

}else{

echo '<p style="color: red;">Ошибка!</p>';

}
?>














<!--__________________-------------------------------------------------->
<?php
//if($_POST['submit']) {
//    $user = substr(htmlspecialchars(trim($_POST['user'])), 0, 1000);
//    $surname =  substr(htmlspecialchars(trim($_POST['surname'])), 0, 1000000);
//    $company =  substr(htmlspecialchars(trim($_POST['company'])), 0, 30);
//    $street =  substr(htmlspecialchars(trim($_POST['street'])), 0, 30);
//    $city =  substr(htmlspecialchars(trim($_POST['city'])), 0, 50);
//    $state =  substr(htmlspecialchars(trim($_POST['state'])), 0, 30);
//    $country =  substr(htmlspecialchars(trim($_POST['country'])), 0, 30);
//    $zipcode =  substr(htmlspecialchars(trim($_POST['zipcode'])), 0, 50);
//
//    $mess = '
//        First name:'.$_POST['user'].'
//        Last name:'.$_POST['surname'].'
//        Company:'.$_POST['company'].'
//        '.$_POST['mess'];
//    // $to - кому отправляем
//    $to = 'Goldenkot@mail.ru';
//    // $from - от кого
//    $from='test@test.ru';
//    // функция, которая отправляет наше письмо
//    mail($to, $user, $surname,$company,$street,$city,$state,$country,$zipcode, 'From:'.$from);
//    echo 'Спасибо! Ваше письмо отправлено.';
//}
//if (!empty($_POST['submit'])) complete_mail();
//else show_form();
//?>
