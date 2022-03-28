<?php


class Database
{
    // Единственный существующий экземпляр данного класса
    private static $instance = null;

    // Экземпляр подключения к БД
    private $connection = null;

    // Запрещаем создание новых экземпляров снаружи класса
    protected function __construct(){
        $this->connection = new \PDO(
            'mysql:host=localhost;dbname=repair_shop;charset=utf8',
            'root', '1234',
            [
                // В случае проблем выбрасывать исключение
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,

                // По умолчанию использовать имена столбцов для наглядности
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,

                // Не использовать эмуляцию подготовленных выражений средствами PDO
                // Будет использоваться подготовка запроса на уровне БД
                PDO::ATTR_EMULATE_PREPARES=>false
            ]);
    }


    // Запрещаем клонирование
    protected function __clone(){}

    // Запрещаем десериализацию  //был private
    public function __wakeup(){
        throw new \BadMethodCallException('Unable to deserialize database connection');
    }

    // Создает экземрляр класса, хранящий подключение к БД
    public static function getInstance(){
        if(null===self::$instance){
            self::$instance = new static ();
        }

        return self::$instance;
    }

    // Экземпляр подключения к БД
    public static function connection(){
        return static::getInstance()->connection;
    }

    // Подготовленное выражение
    public static function prepare($statement){
        return static::connection()->prepare($statement);
    }

    // ID последней добавленной записи
    public static function lastInsertId(){
        return intval(static::connection()->lastInsertId());
    }
}

