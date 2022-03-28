<?php


class OrderTable
{
    public static function create($photo, $essence, $employee, $description, $price){
        $query=Database::prepare(
            'INSERT INTO `orders`(`photo`, `essence`, `employee`, `description`, `price`)'.
            'VALUES (:photo, :essence, :employee, :description, :price)'
        );

        $query->bindValue(":photo", $photo);
        $query->bindValue(":essence", $essence);
        $query->bindValue(":employee", $employee);
        $query->bindValue(":description", $description);
        $query->bindValue(":price", $price);

        if(!$query->execute()){
            throw new PDOException('При добавлении товара возникла ошибка!');
        }
    }

    public static function get_by_id($id){
        $query=Database::prepare('SELECT * FROM `orders` WHERE `id_order` = :id LIMIT 1');
        $query->bindValue(":id", $id);
        $query->execute();

        $orders=$query->fetchAll();
        if(!count($orders)){
            return null;
        }

        return $orders[0];
    }

    public static function get(){
        $query=Database::prepare('SELECT * FROM `orders` LIMIT 10');
        $query->execute();

        $orders=$query->fetchAll();
        if(!count($orders)){
            return null;
        }

        return $orders;
    }
}