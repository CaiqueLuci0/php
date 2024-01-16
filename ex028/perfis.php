<?php 
    include("db.php");

    $instrucao = "SELECT * FROM usuario;";

    $resultado = mysqli_query($conn, $instrucao);

    // if(mysqli_num_rows($resultado) > 0){
    //     while($linha = mysqli_fetch_assoc($resultado)){
    //         echo $linha["id"] . "<br>";
    //         echo $linha["nome"] . "<br>";
    //         echo $linha["senha"] . "<br>";
    //         echo $linha["dtRegistro"] . "<br>";
    //     };   

        $res = json_encode($resultado);
        echo $res;
        
    // };
?>