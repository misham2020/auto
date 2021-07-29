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
    <?php
    include_once 'messages.php';
    $db = new PDO('mysql:host=localhost;dbname=lims', 'root', '');
    $db->exec("SET NAMES UTF8");
    $id =  htmlspecialchars($_GET['id']);
    $query = messages_one($db, $id);
    ?>
    <p class="error"><? //=$db_error
                        ?></p>
    <form method="post">
        <br>
        <label for="manufacturer">марка</label><Br>
        <input type="text" name="manufacturer" size="80" value="<?= $query['manufacturer'] ?>"><br>
        <? if ($error) { ?><span class="error"><?= $error['manufacturer'] ?></span><br><? } ?>
        <label for="model">модель</label><Br>
        <input type="text" name="model" size="80" value="<?= $query['model'] ?>"><br>
        <? if ($error) { ?><span class="error"><?= $error['model']
                                                ?></span><br><? } ?>
        <label for="color">цвет</label><Br>
        <input type="text" name="color" size="80" value="<?= $query['color'] ?>"><br>
        <? if ($error) { ?><span class="error"><?= $error['color']
                                                ?></span><br><? } ?>
        <label for="amount">количетво</label><Br>
        <input type="text" name="amount" size="80" value="<?= $query['amount'] ?>"><br>
        <? if ($error) { ?><span class="error"><?= $error['amount']
                                                ?></span><br><? } ?>
        <label for="price">цена</label><Br>
        <input type="text" name="price" size="80" value="<?= $query['price'] ?>"><br>
        <? if ($error) { ?><span class="error"><?= $error['price']
                                                ?></span><br><? } ?>

        <input type="submit" name="save" value="Сохранить">


    </form>
    <hr>
    <?php
    $manufacturer = trim($_POST['manufacturer']);
    $model = trim($_POST['model']);
    $color = trim($_POST['color']);
    $amount = trim($_POST['amount']);
    $price = trim($_POST['price']);
    if (count($_POST) > 0) {
        edit($db, $id, $manufacturer, $model, $color, $amount, $price);
    }
    ?>
</body>

</html>