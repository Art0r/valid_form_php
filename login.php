<?php
    require_once("config.php");
    
    $sql = new Sql();
    $users = $sql->query("SELECT * FROM user", array()); 
    
    foreach ($users as $value){
        if ($value["login"] === $_POST["login"] && $value["senha"] === $_POST["password"]){
            header('Location: hello.html');
        }
    }
?>