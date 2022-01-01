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
    public function insertProduct()
    {
        $myDB = new MySQLUtils();
        $query = "INSERT INTO product (id,name, image, price) 
        VALUES (:id,:name, :image, :price)";
        $param  = array(":id"=>$this->getId(),":name"=>$this->getName(), ":image"=>$this->getImage(),
                         ":price"=>$this->getPrice());
        var_dump($param);
        $myDB->insertData($query,$param);
        $myDB->disconnectDB();
    }
    public function deleteProduct(){
        $myDB = new MySQLUtils();
        $query = "DELETE from product where id=:id";
        $param= array(":id"=>$this->getId());
        $myDB->deleteData($query,$param);
        $myDB->disconnectDB();

        
    } 
    public function getProductByID(){
        $myDB = new MySQLUtils();
        $query = "SELECT * FROM product where id=:id";
        $param = array(":id"=>$this->getId());
        $data = $myDB->getData($query,$param);
        $myDB->disconnectDB();
        return $data;
    }
    public function updateProduct(){
        $myDB = new MySQLUtils();
        $query = "UPDATE product set name=:name, image=:image, price=:price where id=:id";
        $param  = array(":name"=>$this->getName(), ":image"=>$this->getImage(), ":price"=>$this->getPrice(),":id"=>$this->getId());
        
        $data = $myDB->updateData($query,$param);
        $myDB->disconnectDB();
        return $data;
    } 

}
