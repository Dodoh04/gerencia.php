<?php


//criando uma conexao com banco de dados

$con = mysqli_connect("localhost", "root", "","gerencia");

//checando a conexao

if(mysqli_connect_errno()){
    echo "Erro ao conectar com a base de dados: ". mysqli_connect_error();
}else{
    $sql = "select * from pessoa";
    $resultado = mysqli_query($con,$sql);
    echo "<h2>Pessoas</h2>";
    while($pessoa = mysqli_fetch_array($resultado)){
        echo$pessoa['nome']. " " . $pessoa['sobrenome']. " - " .$pessoa['idade']. " anos<br></br>";
    }
    mysqli_close($con);
}
?>