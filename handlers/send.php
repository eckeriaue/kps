<?php
$to = 'eckeriaue@gmail.com';
$name = "имя: {$_POST['name']} \n";
$email = "почта: {$_POST['email']} \n";
$phone = "телефон: {$_POST['phone']} \n";
mail($to, '', "{$name}\n{$email}\n{$phone}");
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