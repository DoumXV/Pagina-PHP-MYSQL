<?php
if(!empty($_POST["btniniciar"])){
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger" role="alert">Campos Vacios</div>';
        Header("Location: joyeria.php");
    }else{

    }
}

?>