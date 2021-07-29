<?php
function search($db, $inputSearch)
{
    $query = $db->prepare("SELECT * FROM auto_table WHERE `manufacturer` = '$inputSearch' || `model` = '$inputSearch' ||
    `color` = '$inputSearch' || `amount` = '$inputSearch' ||
     `price` = '$inputSearch'");
    $query->execute();
    if ($query->errorCode() != PDO::ERR_NONE) {
        $info = $query->errorInfo();
        echo implode('<br>', $info);
    }
    $result = $query->fetchAll();
    return $result;
} 
function messages_all($db, $art, $kol)
{
    $query = $db->prepare("SELECT * FROM auto_table LIMIT $art,$kol");
    $query->execute();
    if ($query->errorCode() != PDO::ERR_NONE) {
        $info = $query->errorInfo();
        echo implode('<br>', $info);
    }
    $result = $query->fetchAll();
    return $result;
}
function rowCount($db){
 // Определяем все количество записей в таблице
 $query=$db->query("SELECT COUNT(*) as count FROM auto_table");
 $query->setFetchMode(PDO::FETCH_ASSOC);
 $row=$query->fetch();
 $row=$row['count'];
 return $row;
}
function messages_one($db, $id)
{
    $query = $db->prepare("SELECT * FROM auto_table WHERE id = $id");
    $query->execute();
    if ($query->errorCode() != PDO::ERR_NONE) {
        $info = $query->errorInfo();
        echo implode('<br>', $info);
    }
    $result = $query->fetch();
    return $result;
}
function messages_add($db, $manufacturer, $model, $color, $amount, $price)
{
    $sql = "INSERT INTO auto_table (manufacturer, model, color, amount, price) VALUES (:manufacturer, :model, :color, :amount, :price)";
    $query = $db->prepare($sql);
    $query->bindParam(':manufacturer', $manufacturer);
    $query->bindParam(':model', $model);
    $query->bindParam(':color', $color);
    $query->bindParam(':amount', $amount);
    $query->bindParam(':price', $price);
    $query->execute();
    if ($query->errorCode() != PDO::ERR_NONE) {
        $info = $query->errorInfo();
        echo implode('<br>', $info);
    }
    return $db->lastInsertId();
}
function messages_validate($name, $text)
{
    $errors = [];
    if ($name == '') {
        $errors[] = 'Имя не может быть пустым';
    } elseif (strlen($name) < 5) {
        $errors[] = 'Имя не короче 5 букв';
    }
    if ($text == '') {
        $errors[] = 'Текст не может быть пустым';
    }
    return $errors;
}
function delete($db, $id)
{
    $sql = "DELETE FROM auto_table WHERE id = $id";
    $query = $db->prepare($sql);
    $query->execute();
    if ($query->errorCode() != PDO::ERR_NONE) {
        $info = $query->errorInfo();
        echo implode('<br>', $info);
    }
    return $query->rowCount();
}
//Редактирование
 function edit($db, $id, $manufacturer, $model, $color, $amount, $price)
{
    $query = $db->prepare("UPDATE auto_table SET manufacturer=:manufacturer, model=:model, color=:color, amount =:amount, price=:price WHERE id=:id");
    $params = ['manufacturer' => $manufacturer, 'model' => $model, 'color' => $color, 'amount' => $amount, 'price' => $price,  'id' => $id];
    $query->execute($params);
    if($query->errorCode() != PDO::ERR_NONE){
        $info = $query->errorInfo();
        echo implode('<br>', $info);
        exit();
    }
    return $query->fetch();
    
} 
