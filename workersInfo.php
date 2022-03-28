<?php
require_once("header.php")
?>
<div class="elem-container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Главная страница</a></li>
            <li class="breadcrumb-item"><a href="workersTable.php">Исполнители</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новая запись</li>
        </ol>
    </nav>

    <div class="name-edit">
        <h1>
            Создание/редактирование исполнителя
        </h1>
    </div>



    <form>

        <div class="mb-3 row">
            <label for="inputClientName" class="col-sm-2 col-form-label">ФИО</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputClientName">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputDate" class="col-sm-2 col-form-label">Дата приема на работу</label>
            <div class="col-sm-10">
                <input type="date" class="form-control">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="inputFullPrice" class="col-sm-2 col-form-label">Зарплата</label>
            <div class="col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="inputFullPrice">
                    <span class="input-group-text">₽</span>
                </div>
            </div>
        </div>


        <div class="mb-3 row">
            <label for="selectBookingStatus" class="col-sm-2 col-form-label">Загруженность</label>
            <div class="col-sm-10">
                <select class="form-select" id="selectBookingStatus">
                    <!--<option selected>Не выбрано</option>-->
                    <option value="1">Свободен</option>
                    <option value="2">Занят</option>
                    <option value="3">Относительно свободен</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputClientName" class="col-sm-2 col-form-label">Специализация</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputClientName">
            </div>
        </div>

    </form>
    <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Сохранить</a>
</div>

