
<?php 
//Kiem tra email
class ValidationData{
    function checkEmailValid($email){
        $pattern_email="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
            return (!preg_match($pattern_email, $email)) ? FALSE : TRUE;
            
    }
    //Kiem tra email
    /* function checkPasswordlValid($password){
        $pattern_email="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
            return (!preg_match($pattern_email, $password)) ? FALSE : TRUE;
            
    } */
}


?>