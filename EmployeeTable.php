<?php


class EmployeeTable
{
    public static function create($name, $date_hire, $salary, $workload, $specialization){
        $query=Database::prepare(
            'INSERT INTO `employees`(`name`, `date_hire`, `salary`, `workload`, `specialization`)'.
            'VALUES (:name, :date_hire, :salary, :workload, :specialization)'
        );

        $query->bindValue(":name", $name);
        $query->bindValue(":date_hire", $date_hire);
        $query->bindValue(":salary", $salary);
        $query->bindValue(":workload", $workload);
        $query->bindValue(":specialization", $specialization);

        if(!$query->execute()){
            throw new PDOException('При добавлении товара возникла ошибка!');
        }
    }

    public static function get_by_id($id){
        $query=Database::prepare('SELECT * FROM `employees` WHERE `id_employee` = :id LIMIT 1');
        $query->bindValue(":id", $id);
        $query->execute();

        $employees=$query->fetchAll();
        if(!count($employees)){
            return null;
        }

        return $employees[0];
    }

    public static function get(){
        $query=Database::prepare('SELECT * FROM `employees` LIMIT 10');
        $query->execute();

        $employees=$query->fetchAll();
        if(!count($employees)){
            return null;
        }

        return $employees;
    }
}