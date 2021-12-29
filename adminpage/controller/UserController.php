<?php
include_once '../util/ValidationData.php';
include '../model/UserModel.php';

//Kiem tra gia tr submit 

class UserController{
    public function dataValid($email){
        $validData = new ValidationData();
        return $validData->checkEmailValid($email);
    }
    public function insertUser($user){
        $user->insertUser();
    }
    public function updateUser($user){
        $user->updateUser();
    }
    public function deleteUser($user){
        $user->deleteUser();
    }
    public function getUser($user_login){
        return $user_login->getUserModel();
    }
    public function getUserByID($user){
        return $user->getUserModelByID();
    }
    public function getAllUser($list_users){
        return $list_users->getAllUserModel();
    }
   public function usersPage(){
        $user = new UserModel(0,'','','','','','',0,'');
        return $this->getAllUser($user);
        //var_dump($data_users);
        //require_once '../view/users.php';
        //header("Location:../view/users.php");// Nếu rồi thì chuyển qua trang List user 
    }
    
    public function __construct($user_action)
    {
        switch ($user_action) {
            case 'user_create':
                //var_dump($_POST);
                $txt_username = $_POST["txt_username"];
                $txt_email = $_POST["txt_email"];
                $txt_password = md5($_POST["txt_password"]);
                $cbm_role = $_POST["cbm_role"];
                $rdg_sex = $_POST["rdg_sex"];
                $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
                $chk_tennis = isset($_POST["chk_tennis"]) ? $_POST["chk_tennis"] : "";
                $chk_gym = isset($_POST["chk_gym"]) ? $_POST["chk_gym"] : "";
                $file_avatar = $_FILES["file_avatar"]["name"];
                $arrSoThich = $chk_football . ',' . $chk_tennis . ',' . $chk_gym;
                // kiem tra ton tại user 
                $user_new = new UserModel(0,$txt_username,$txt_password,$txt_email,$rdg_sex,$arrSoThich,$cbm_role,0,$file_avatar);
                $this->insertUser($user_new);
                header("Location:../view/users.php");// Nếu rồi thì chuyển qua trang List user
                break;
        
            case 'user_login':
                $txt_login_email = $_POST["txt_login_email"];
                $txt_login_password = md5($_POST["txt_login_password"]);
                $valid= $this->dataValid($txt_login_email);
                if($valid){
                    $user_login = new UserModel('','',$txt_login_password,$txt_login_email,'','','','','','',);
                    $userDetail = $this->getUser($user_login);
                    if($userDetail[0]["email"]== $txt_login_email && $userDetail[0]["passWord"]== $txt_login_password){
                        session_start();
                        $_SESSION["email"]=$userDetail[0]["email"];
                        $_SESSION["userName"]= $userDetail[0]["userName"];
                        $_SESSION["role"]= $userDetail[0]["role"];
                        $_SESSION["islogin"]= true;
                        $_SESSION["delete"]= true;
                       // var_dump($_SESSION);
                        header("Location:../view/users.php");// Nếu rồi thì chuyển qua trang List user
        
                    }else{
                        header("Location:../view/userloginpage.php");
                        //echo "<script type='text/javascript'>alert('Sai tài khoản hoặc mật khẩu!');</script>";
                    }
                }else {
                    echo "Dữ liệu không hợp lệ !";
                } 
                
                break;
            case 'user_edit':
                $id=$_GET["id"];
                $user = new UserModel($id,'','','','','','','','');
                $data=$this->getUserByID($user);
                //var_dump($data);
                include_once '../view/updateUser.php';
                break; 
            case 'user_delete':
                session_start();
                if($_SESSION["role"]==="Admin"){
                    $_SESSION["delete"]= true;
                    $id=$_GET["id"];
                    $user = new UserModel($id,'','','','','','','','');
                    $data=$this->deleteUser($user);
                }else{
                    $_SESSION["delete"]= false;
                }
                
                header("Location:../view/users.php");// Nếu rồi thì chuyển qua trang List user
                //include_once '../view/updateUser.php';
                break; 
            default:
                $this->usersPage();
                break;
        }
    }
    
}
$user_action = "";
if(count($_POST)>0){
    $user_action = $_POST["user_action"];
}elseif(count($_GET)>0){
    $user_action = $_GET["action"];
}
$userControl = new UserController($user_action);
?>
