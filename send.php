/**
* Created by PhpStorm.
* User: Костя
* Date: 31.01.2017
* Time: 19:25
*/
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$name = urldecode($name);
$surname = urldecode($surname);
$name = trim($name);
$surname = trim($surname);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("Goldenkot@mail.ru", "Заявка с сайта", "First name:".$name.". Last name: ".$surname ,"From: Goldenkott@gmail.com \r\n"))
{     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
