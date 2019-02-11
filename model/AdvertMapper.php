<?php

require_once 'Advert.php';
require_once __DIR__.'/../Database.php';

class AdvertMapper
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAdvert(
        string $id
    ):Advert {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM advertisment WHERE id = :id;');
            $stmt->bindParam(':id', '$id', PDO::PARAM_STR);
            $stmt->execute();

            $advert = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Advert($advert['id'],$advert['idUser'],$advert['idCategory'],$advert['title'],$advert['description'],$advert['price'],$advert['date']);
        }
        catch(PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function getAdvertsByCategory()
    {

        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM advertisment;');

            $stmt->execute();

            $advert = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $advert;
        }
        catch(PDOException $e) {
            die();
        }
    }

    public function delete(int $id): void
    {
        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM advertisment WHERE id = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(PDOException $e) {
            die();
        }
    }
}