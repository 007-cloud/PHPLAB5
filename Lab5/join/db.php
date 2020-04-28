<?php

try{

    $connection = new PDO("mysql:host=localhost;dbname=lab5","root", "99090111");


}catch (PDOException $e){
    echo $e->getMessage();
}

?>