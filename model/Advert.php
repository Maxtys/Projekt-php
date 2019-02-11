<?php

class Advert
{
    private $id;
    private $idUser;
    private $idCategory;
    private $title;
    private $description;
    private $price;
    private $date;

    public function __construct($id, $idUser, $idCategory, $title, $description, $price, $date)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idCategory = $idCategory;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getIdCategory()
    {
        return $this->idCategory;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->idPrice;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function setIdUser($idUser): void
    {
        $this->idUser = $idUser;
    }
    public function setIdCategory($idCategory): void
    {
        $this->getIdCategory = $idCategory;
    }
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function setDescription($description): void
    {
        $this->description = $description;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function setDate($date): void
    {
        $this->date = $date;
    }




}