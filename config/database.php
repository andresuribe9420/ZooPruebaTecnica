<?php 

    class Database {

        private $servidor;
		private $user;
		private $password;
		private $database;
		protected $conection;

        function __construct()
        {
            $this->servidor = constant('SERVIDOR');
            $this->database = constant('DATABASE');
            $this->password = constant('PASSWORD');
            $this->user = constant('USER');
        }

        function conexion()
        {
            try {

                $this->conection = 'mysql:host='.$this->servidor.';dbname='.$this->database.';charset=utf8';
                $options = [
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => false,
                ];

                $pdo = new PDO($this->conection,$this->user,$this->password, $options);
                return $pdo;

            } catch (PDOException $e) {
                print_r('Error de Conexion: '. $e->getMessage());
            }
        }

    }

?>

