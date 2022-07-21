<?
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
require_once '../php/connection.php';
	$link = mysqli_connect( $host, $user, $password, $database ) or die( "Помилка " . mysqli_error( $link ) );
if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        header("Location: admin.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Музей туризму України_Адмін</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<form class="box" method="POST">
    <h1>Вхід до адмін панелі</h1>
  <input name="login" type="text" placeholder="Name" required>
 <input name="password" type="password"  placeholder="Password" required>
<input name="submit" type="submit" value="Ввійти">
</form>
</body>
</html>
