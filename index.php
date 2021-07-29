<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
   <title>Автомобили</title>
</head>
<body>
<?php
include_once 'messages.php';
    $db = new PDO('mysql:host=localhost;dbname=lims', 'root', '');
    $db->exec("SET NAMES UTF8");
    $proto = messages_all($db);
?>
    <h1>автомобили</h1>
 <table>
  <tr>
    <th>Марка</th>
    <th>Модель</th>
    <th>Цвет</th>
    <th>Количество</th>
    <th>Цена</th>
    <th></th>
  </tr>
  <? foreach($proto as $k => $one){ ?>
  <tr>
    <td><a  href="update.php?id=<?=$one['id']?>"><?=$one['manufacturer']?></a></td>
    <td><?=$one['model']?></td>
    <td><?=$one['color']?></td>
    <td><?=$one['amount']?></td>
    <td><?=$one['price']?></td>
    <td><a  href="delete.php?id=<?=$one['id']?>">Удалить</a></td>
  </tr>
  <?php } ?>
</table>
<a href="add.php">Добавить автомобиль</a> 
</body>
</html>