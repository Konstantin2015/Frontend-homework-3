/**
* Created by PhpStorm.
* User: Костя
* Date: 31.01.2017
* Time: 19:25
*/


<!---------------------------------------------->

<?php
function show_form()

function complete_mail() {


$_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000);
$_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30);

// если не заполнено поле "Имя" - показываем ошибку 0
if (empty($_POST['name']))
output_err(0);
// если неправильно заполнено поле email - показываем ошибку 1
if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email']))
output_err(1);
// если не заполнено поле "Сообщение" - показываем ошибку 2
if(empty($_POST['mess']))
output_err(2);
// создаем наше сообщение
$mess = '
<b>Имя отправителя</b>: '.$_POST['name'].' <br>
<b>Additional Notes</b>: '.$_POST['mess'].'<br>';
// $to - кому отправляем
$to = 'Goldenkot@mail.ru';
// $from - от кого
$from   = array();
//$ot_from='no-reply@mail.ru';

//mail($to, $_POST['title'], $mess, "From:".$from);

$from[] = "MIME-Version: 1.0";
$from[] = "Content-type: text/html; charset=UTF-8";
//$from[] = "From: ".$ot_from;
$from[] = "From: ".$_POST['email'];
$from[] = "Reply-To: ".$_POST['email'];
mail($to, $_POST['title'], $mess, implode(PHP_EOL, $from));
echo '<p align="center">Спасибо! Ваше письмо отправлено.</p>';
}

function output_err($num)
{
$err[0] = 'ОШИБКА! Не введено имя.';
$err[1] = 'ОШИБКА! Неверно введен e-mail.';
$err[2] = 'ОШИБКА! Не введено сообщение.';
echo '<p align="center">'.$err[$num].'</p>';
show_form();
exit();
}

if (!empty($_POST['submit'])) complete_mail();
else show_form();
?>



<!---------------------------------------------->











<!--__________________-------------------------------------------------->
<?php
//if($_POST['submit']) {
//    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
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
