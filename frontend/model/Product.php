<?php
include_once '../util/MySQLUtils.php';

class Product
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $number;


    public function __construct($id, $name, $image, $price,$number)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->number = $number;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
    public function getAllProduct(){
        $myDB = new MySQLUtils();
        $query = "SELECT id,name,image,price FROM product";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
    }
}
