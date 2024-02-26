<?php

require_once 'config.php';

try{
     $select = $conn->query("SELECT * FROM cliente");
     while ($linha = $select->fetch()){
          echo $linha['nome'] . "<br>";
     }
}catch(Exception $error){
     echo "<br>" . $error;
}



// var_dump($select);

echo "<br><br>";




// $select = $select->fetchAll();
// var_dump($select) ;