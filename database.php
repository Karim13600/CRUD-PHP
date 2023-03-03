<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD-PHP</title>
</head>

<body>
    <?php class Database
    {
        private static $dbName = 'testphp';
        private static $dbHost = 'localhost';
        private static $dbUsername = 'root';
        private static $dbUserPassword = '';
        private static $cont = null;
        public function __construct()
        {
            die('Init function is not allowed');
        }
        public static function connect()
        {
            if (null == self::$cont) {
                try {
                    self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }
            return self::$cont;
        }

        public static function disconnect()
        {
            self::$cont = null;
        }
    }
    ?>
</body>

</html>