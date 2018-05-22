 <?php
    $name = 'Ольга';
    $age = '30';
    $email = 'fedosova.olya@gmail.com';
    $location = 'Санкт-Петербург';
    $about = 'Менеджер';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>дз1</title>
  <style>
    body {
      font-family: sans-serif;
    }
    dl {
      display: table-row;
    }
    dt, dd {
      display: table-cell;
      padding: 5px 10px;
    }
  </style>
</head>
<body>
  <h2>Информация о пользователе</h2>
    <dl>
      <dt>Имя</dt>
      <dd><?= $name ?></dd>
    </dl> 
    <dl>
      <dt>Возраст</dt>
      <dd><?= $age ?></dd>
    </dl> 
    <dl>
      <dt>Адрес электронной почты</dt>
      <dd><a href="#"><?= $email ?></a></dd>
    </dl> 
    <dl>
      <dt>Город</dt>
      <dd><?= $location ?></dd>
    </dl> 
    <dl>
      <dt>О себе</dt>
      <dd><?= $about ?></dd>
    </dl> 
</body>
</html>