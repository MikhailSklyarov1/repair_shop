<?php
require_once("header.php");
?>

<?php
// Подключение БД
require_once("Database.php");
require_once("OrderTable.php");
$db=Database::getInstance();
$connection=Database::connection();

$orders = OrderTable::get();

// Подключение "шапки" сайта
require_once("header.php");
?>



<div class="elem-container">
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Главная страница</a></li>
        <li class="breadcrumb-item active" aria-current="page">Заказы на ремонт</li>
    </ol>
</nav>

    <div class="create">
        <a href="repairOrdersInfo.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true" >Создать </a>
    </div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Фото поломки</th>
        <th scope="col" style="width:25%">Суть работы</th>
        <th scope="col">Исполнитель</th>
        <th scope="col" style="width:25%">Описание</th>
        <th scope="col">Стоимость</th>
        <th scope="col" style="width:17%">Действие</th>
    </tr>
    </thead>
    <tbody>
    <? foreach($orders as $order):?>
    <tr>
    <tr>
        <th scope="row"><?=$order["id_order"];?></th>
        <td><img src=<?=$order["photo"];?> alt="Фото1"  class="img-size"></td>
        <td><?=$order["essence"];?></td>
        <td><?=$order["employee"];?></td>
        <td><?=$order["description"];?></td>
        <td><?=$order["price"];?></td>
        <td><button type="button" class="btn btn-primary">Изменить</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </td>
    </tr>
    <?endforeach;?>



    </tbody>
</table>

</div>

