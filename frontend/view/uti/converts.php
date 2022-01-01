<?php 
define('MAX',25000);
function USD2VND($gia){
    return number_format($gia*MAX,0,",",".").".VND";
}

?>