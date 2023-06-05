<!-- Подключение к БД -->
<?php
class Database
{
    private $connection;
    // Пример использования
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $database = "Flowers";

    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->connection){
            die('Error connect to DataBase');
        }
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }
}
?>