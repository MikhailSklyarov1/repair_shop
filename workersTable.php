<?php
require_once("header.php");
?>

<?php
// Подключение БД
require_once("Database.php");
require_once("EmployeeTable.php");
$db=Database::getInstance();
$connection=Database::connection();

$employees = EmployeeTable::get();

// Подключение "шапки" сайта
require_once("header.php");
?>


<div class="elem-container">
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Главная страница</a></li>
        <li class="breadcrumb-item active" aria-current="page">Исполнители</li>
    </ol>
</nav>

    <div class="create">
        <a href="workersInfo.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Создать</a>
    </div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">ФИО</th>
        <th scope="col">Дата приема на работу</th>
        <th scope="col">Зарплата</th>
        <th scope="col">Загруженность</th>
        <th scope="col">Специализация</th>
        <th scope="col" style="width:17%">Действие</th>
    </tr>
    </thead>
    <tbody>
    <? foreach($employees as $employee):?>
    <tr>
        <th scope="row"><?=$employee["id_employee"]?></th>
        <td><a href="#"><?=$employee["name"]?></a></td>
        <td><?=$employee["date_hire"]?></td>
        <td><?=$employee["salary"]?></td>
        <td><?=$employee["workload"]?></td>
        <td><?=$employee["specialization"]?></td>

        <td><button type="button" class="btn btn-primary">Изменить</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </td>
    </tr>
    <?endforeach;?>
    </tbody>
</table>

</div>