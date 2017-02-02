<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$company =  $_POST['company'];
$street =  $_POST['street'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$country =  $_POST['country'];
$zipcode =  $_POST['zipcode'];


$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$company =  htmlspecialchars($company);
$street =  htmlspecialchars($street);
$city =  htmlspecialchars($city);
$state =  htmlspecialchars($state);
$country =  htmlspecialchars($country);
$zipcode = htmlspecialchars($zipcode);

$name = urldecode($name);
$surname = urldecode($surname);
$company =  urldecode($company);
$street =  urldecode($street);
$city =  urldecode($city);
$state =  urldecode($state);
$country =  urldecode($country);
$zipcode = urldecode($zipcode);

$name = trim($name);
$surname = trim($surname);
$company =  trim($company);
$street =  trim($street);
$city =  trim($city);
$state =  trim($state);
$country =  trim($country);
$zipcode = trim($zipcode);

//echo $fio;
//echo "<br>";
//echo $email;
if (mail("office@globalvision.online", "Форма обратной связи.", "First name:".$name.". Last name: ".$surname.".Company address: ".$company.". Street:".$street.".City:".$city.".State:".$state.".Country:".$country.".ZipCode:".$zipcode ,"From:lomakoira@mail.ru \r\n"))
{     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
