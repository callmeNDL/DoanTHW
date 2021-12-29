<?php 

class MySQLUtils{
    private $servername;
    private $username ;
    private $password ;
    private $dbname;
    private static $connect;
    
    public function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname="thuchanhweb";
        if(self::$connect==null){
            $this->connectDB();
            //echo "Connected successfully </br>";
        }
            return self::$connect;
        
    }
    public function __destruct()
    {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname="";
        self::$connect==null;
    }


    public function connectDB(){
        
        try {
            self::$connect = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            return self::$connect;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return self::$connect;
    }

    public function disconnectDB(){
       // echo "Close Database </br>";
        return self::$connect=null;
       
    }
    public function insertData($query,$param=array()){
       $stmt = self::$connect->prepare($query);
       $stmt->execute($param);
       
    }
    public function getAllData($query){
        $stmt = self::$connect->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getData($query,$param=array()){
        $stmt = self::$connect->prepare($query);
        $stmt->execute($param);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC) ;
        
        return $data;
    }
    public function updateData($query,$param=array()){
        $stmt = self::$connect->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }
    public function deleteData($query,$param=array()){
        $stmt = self::$connect->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }

}



?>