<?php
class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'admin','775i65GV');
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('select * from mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}