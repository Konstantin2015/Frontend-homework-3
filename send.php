<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$company =  $_POST['company'];
$street =  $_POST['street'];
$city =  $_POST['city'] ;
$state =  $_POST['state'];
$country =  $_POST['country'];
$zipcode =  $_POST['zipcode'];
$cntrinterest =  $_POST['cntrinterest'];
$notes =  $_POST['notes'];


$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$company =  htmlspecialchars($company);
$street =  htmlspecialchars($street);
$city =  htmlspecialchars($city);
$state =  htmlspecialchars($state);
$country =  htmlspecialchars($country);
$zipcode = htmlspecialchars($zipcode);
$cntrinterest =  htmlspecialchars($cntrinterest);
$notes =  htmlspecialchars($notes);

$name = urldecode($name);
$surname = urldecode($surname);
$company =  urldecode($company);
$street =  urldecode($street);
$city =  urldecode($city);
$state =  urldecode($state);
$country =  urldecode($country);
$zipcode = urldecode($zipcode);
$cntrinterest =  urldecode($cntrinterest);
$notes =  urldecode($notes);

$name = trim($name);
$surname = trim($surname);
$company =  trim($company);
$street =  trim($street);
$city =  trim($city);
$state =  trim($state);
$country =  trim($country);
$zipcode = trim($zipcode);
$cntrinterest =  trim($cntrinterest);
$notes =  trim($notes);

$to  = "office@globalvision.online, lomakoira@mail.ru" ;


if(isset($_POST['check']))
    $check .= "\nNorth America";
if(isset($_POST['check']))
    $check .= "\nMiddle East";
if(isset($_POST['check']))
    $check .= "\nLatin America";


if (mail("$to", "Форма обратной связи.", "\r\n First name:".$name.". \r\n Last name: ".$surname.". \r\n Company address: ".$company.". \r\n Street:".$street.". \r\n City:".$city.". \r\n State:".$state.". \r\n Country:".$country.". \r\n ZipCode:".$zipcode.". \r\n Region of Distribution Interest*:".$check.". \r\n Country of Interest:" .$cntrinterest.". \r\n Additional Notes:" .$notes,"From:TestTest@mail.com \r\n"))
{     echo "Message sent successfully";
} else {
    echo "When you send any errors";
}?>
