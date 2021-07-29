<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <form method="post">
         Марка<br>
        <input type="text" name="manufacturer"><br><br>
        Модель<br>
        <input type="text" name="model"><br><br>
        Цвет<br>
        <input type="text" name="color"><br><br>
        Количество<br>
        <input type="text" name="amount"><br><br>
        Цена<br>
        <input type="text" name="price"><br><br>
        <input type="submit" class="submit" value="SUBMIT" />
    </form>
    <?php
    include_once 'messages.php';
    $db = new PDO('mysql:host=localhost;dbname=lims', 'root', '');
    $db->exec("SET NAMES UTF8");
    if (count($_POST) > 0) {
        $manufacturer = trim($_POST['manufacturer']);
        $model = trim($_POST['model']);
        $color = trim($_POST['color']);
        $amount = trim($_POST['amount']);
        $price = trim($_POST['price']);
        messages_add($db, $manufacturer, $model, $color, $amount, $price);
    }
    ?>
    <a href="index.php">автомобили</a> 
    <script src="main.js"></script>
</body>
</html>