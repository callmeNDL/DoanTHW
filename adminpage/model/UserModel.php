<?php
include_once '../util/MySQLUtils.php';

class UserModel
{
    private $user_id;
    private $username;
    private $password;
    private $email;
    private $sex;
    private $prefer;
    private $role;
    private $status;
    private $avatar;
    
    public function __construct($uID,$uname, $upass, $uemail, $usex, $uprefer, $urole, $ustatus, $uavatar)
    {
        $this->user_id=$uID;
        $this->username = $uname;
        $this->password = $upass;
        $this->email = $uemail;
        $this->sex = $usex;
        $this->prefer = $uprefer;
        $this->role = $urole;
        $this->status = $ustatus;
        $this->avatar = $uavatar;
    }
    public function get_user_id()
    {
        return $this->user_id;
    }
    public function get_username()
    {
        return $this->username;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_email()
    {
        return $this->email;
    }

    public function get_sex()
    {
        return $this->sex;
    }
    public function get_prefer()
    {
        return $this->prefer;
    }
    public function get_role()
    {
        return $this->role;
    }
    public function get_status()
    {
        return $this->status;
    }
    public function get_avatar()
    {
        return $this->avatar;
    }

    public function set_username($usrname) {
        $this->username = $usrname;
    }
    public function set_password($usrname) {
        $this->password = $usrname;
    }
    public function set_email($usrname) {
        $this->email = $usrname;
    }
  
    public function set_avatar($usrname) {
        $this->avatar = $usrname;
    }
    public function set_sex($usrname) {
        $this->sex = $usrname;
    }

    public function set_status($usrname) {
        $this->status = $usrname;
    }

    public function set_prefer($usrname) {
        $this->prefer = $usrname;
    }

    public function set_role($role): void {
        $this->role = $role;
    }



    public function getAllUserModel()
    {
        $myDB = new MySQLUtils();
        $query = "SELECT user_id,username,password,email,sex FROM user";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
    }
    public function getUserModel(){
        $myDB = new MySQLUtils();
        $query = "SELECT user_id, userName, passWord, email, role FROM user where email=:emailInput";
        $param = array(":emailInput"=>$this->get_email());
        $data = $myDB->getData($query,$param);
        $myDB->disconnectDB();
        return $data;
    }
    public function getUserModelByID(){
        $myDB = new MySQLUtils();
        $query = "SELECT user_id, userName, passWord, email, role FROM user where user_id=:user_id";
        $param = array(":user_id"=>$this->get_user_id());
        $data = $myDB->getData($query,$param);
        $myDB->disconnectDB();
        return $data;
    }
    public function insertUser()
    {
        $myDB = new MySQLUtils();
        $query = "INSERT INTO USER (username, password, email, sex, prefer, role, status, avartar) 
        VALUES (:username, :password, :email, :sex, :prefer, :role, :status, :avartar)";
        $param  = array(":username"=>$this->get_username(), ":password"=>$this->get_password(), ":email"=>$this->get_email(), ":sex"=>$this->get_sex(), ":prefer"=>$this->get_prefer(), ":role"=>$this->get_role(), ":status"=>0, ":avartar"=>$this->get_avatar());
        $myDB->insertData($query,$param);
        $myDB->disconnectDB();
        
    }
    public function updateUser(){
        $myDB = new MySQLUtils();
        $query = "UPDATE user set username=:username, password=:password, sex=:sex where user_id=:user_id";
        $param  = array(":username"=>$this->get_username(), ":password"=>$this->get_password(), ":sex"=>$this->get_sex());
        $data = $myDB->updateData($query,$param);
        $myDB->disconnectDB();
        return $data;
    } 
    public function deleteUSer(){
        $myDB = new MySQLUtils();
        $query = "DELETE from user where user_id=:user_id";
        $param= array(":user_id"=>$this->get_user_id());
        $myDB->deleteData($query,$param);
        $myDB->disconnectDB();

        
    } 
}
