<?
$nc=$_POST['name_contact'];
$ec=$_POST['el_contact'];
$tc=$_POST['tel_contact'];
$mc=$_POST['mess_contact'];

$email = 'yaroslav.2013@ukr.net';/*Тут поки моя пошта
/* Відпраляємо*/
mail($email, "Відвідувач сайту замовив зворотній зв`язок", "\n
Дані відвідувача \n
Ім`я: ".$nc."
E-mail: ".$ec."
Телефон: ".$tc."
Коментар: ".$mc."
");
 echo "<script>alert(\"Дякуємо! Ваші дані відправлено на опрацювання! Очікуйте на відповідь\");</script>";
 echo "<script> window.location = 'https://agrogold20.pp.ua/Diplom/';</script>";
?>
