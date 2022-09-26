<?php
$to = "eckeriaue@gmail.com";
$tema = "Сообщение с сайта kps!";

$message = "Ваше имя: " . $_POST['name'] . "<br>";
$message .= "E-mail: " . $_POST['email'] . "<br>";
$message .= "Номер телефона: " . $_POST['phone'] . "<br>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to, $tema, $message, $headers);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Загрузка...</title>
</head>

<body>
  <script>
    setTimeout(() => {
      location.replace('/')
    }, 2000)
  </script>
</body>

</html>