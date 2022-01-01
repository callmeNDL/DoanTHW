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
        $listUsers=$this->getAllUser($user);
        //var_dump($listUsers);
        include_once '../view/users.php';
        //header("Location:../view/users.php");// Nếu rồi thì chuyển qua trang List user 
    }
    
    public function __construct($user_action)
    {
        switch ($user_action) {
            case 'user_create':
                //var_dump($_POST)
                $target_dir = "../view/images/uploads/";
                $txt_username = $_POST["txt_username"];
                $txt_email = $_POST["txt_email"];
                $txt_password = md5($_POST["txt_password"]);
                $cbm_role = $_POST["cbm_role"];
                $rdg_sex = $_POST["rdg_sex"];
                $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
                $chk_tennis = isset($_POST["chk_tennis"]) ? $_POST["chk_tennis"] : "";
                $chk_gym = isset($_POST["chk_gym"]) ? $_POST["chk_gym"] : "";
                $file_avatar = $_FILES["file_avatar"]["name"];
                if(isset($file_avatar)){
                    echo $file_avatar;
                    $target_file = $target_dir . basename($_FILES["file_avatar"]["name"]);
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    } 
                    if(move_uploaded_file($_FILES["file_avatar"]["tmp_name"], $target_file)){
                        echo "done";
                    }else{
                        echo "failed";
                    }
                }
                
                $arrSoThich = $chk_football . ',' . $chk_tennis . ',' . $chk_gym;
                // kiem tra ton tại user 
                session_start();
                $_SESSION["delete"]= true;
                $user_new = new UserModel(0,$txt_username,$txt_password,$txt_email,$rdg_sex,$arrSoThich,$cbm_role,0,$file_avatar);
                $this->insertUser($user_new);
                header("Location:../controller/UserController.php");// Nếu rồi thì chuyển qua trang List user
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
                        header("Location:../controller/UserController.php");// Nếu rồi thì chuyển qua trang List user
        
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
            case 'user_update':
                $target_dir = "../view/images/uploads/";
                $txt_userID = $_POST["txt_userID"];
                $txt_username = $_POST["txt_username"];
                $txt_email = $_POST["txt_email"];
                //$txt_password = md5($_POST["txt_password"]);
                //$cbm_role = $_POST["cbm_role"];
                $rdg_sex = $_POST["rdg_sex"];
                $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
                $chk_tennis = isset($_POST["chk_tennis"]) ? $_POST["chk_tennis"] : "";
                $chk_gym = isset($_POST["chk_gym"]) ? $_POST["chk_gym"] : "";
                $file_avatar = $_FILES["file_avatar"]["name"];
                $arrSoThich = $chk_football . ',' . $chk_tennis . ',' . $chk_gym;
                $file_avatar = $_FILES["file_avatar"]["name"];
                var_dump($file_avatar);
                if(isset($file_avatar)){
                    echo $file_avatar;
                    $target_file = $target_dir . basename($_FILES["file_avatar"]["name"]);
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    } 
                    if(move_uploaded_file($_FILES["file_avatar"]["tmp_name"], $target_file)){
                        echo "done";
                    }else{
                        echo "failed";
                    }
                }
                $user_new = new UserModel($txt_userID,$txt_username,"",$txt_email,$rdg_sex,$arrSoThich,"",0,$file_avatar);
                $this->updateUser($user_new);
                header("Location:../controller/UserController.php");
                break;
            case 'user_delete':
               
                if($_SESSION["role"]==="Admin"){
                    $_SESSION["delete"]= true;
                    $id=$_GET["id"];
                    $user = new UserModel($id,'','','','','','','','');
                    $data=$this->deleteUser($user);
                }else{
                    $_SESSION["delete"]= false;
                }
                header("Location:../controller/UserController.php");// Nếu rồi thì chuyển qua trang List user
                break; 
            default:
                $this->usersPage();
                break;
        }
    }
    
}
session_start();
$user_action = "";
if(count($_POST)>0){
    $user_action = $_POST["user_action"];
}elseif(count($_GET)>0){
    $user_action = $_GET["action"];
}
$userControl = new UserController($user_action);
?>
