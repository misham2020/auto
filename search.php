<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
   <title>Поиск</title>
</head>
<body>
<?php
include_once 'messages.php';
    $db = new PDO('mysql:host=localhost;dbname=lims', 'root', '');
    $db->exec("SET NAMES UTF8");
    $inputSearch = $_REQUEST['search'];
    $proto = search($db, $inputSearch);
?>
<h1>Поиск</h1>
 <table>
  <tr>
    <th>Марка</th>
    <th>Модель</th>
    <th>Цвет</th>
    <th>Количество</th>
    <th>Цена</th>
    <th></th>
  </tr>
  <? foreach($proto as $one){ ?>
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
<a href="index.php">Список автомобилей</a> 
</body>
</html>