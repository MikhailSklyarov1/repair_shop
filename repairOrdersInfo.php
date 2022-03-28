<?php
require_once("header.php")
?>
<div class="elem-container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Главная страница</a></li>
            <li class="breadcrumb-item"><a href="repairOrdersTable.php">Заказы на ремонт</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новая запись</li>
        </ol>
    </nav>

    <div class="name-edit">
        <h1>
            Создание/редактирование заказа
        </h1>
    </div>


    <form>

        <div class="mb-3 row">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Фото поломки</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputPhoto">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputBrand" class="col-sm-2 col-form-label">Суть работы</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputBrand">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="selectBookingStatus" class="col-sm-2 col-form-label">Исполнитель</label>
            <div class="col-sm-10">
                <select class="form-select" id="selectBookingStatus">
                    <!--<option selected>Не выбрано</option>-->
                    <option value="1">Иванов И.И.</option>
                    <option value="2">Петров П.П.</option>
                    <option value="3">Сидоров С.С.</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputDescription" rows="4"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Стоимость</label>
            <div class="col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="inputPrice">
                    <span class="input-group-text">₽</span>
                </div>
            </div>
        </div>

    </form>
    <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Сохранить</a>

</div>
