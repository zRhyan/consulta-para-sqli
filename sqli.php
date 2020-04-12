<form action="" method="GET">
    Nome do usuario: <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>
<?php
include "/var/www/conecta.php";
if( isset($_GET["nome"]) ){
    $nome = $_GET["nome"];
    //Descomente a linha a seguir para voce visualizar como e
    //construida a consulta SQL:
    //echo $sql . "<br>";
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' ";
    $dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    while( $linha = mysqli_fetch_assoc($dados) ){
        $endereco = $linha["endereco"];
        $telefone = $linha["telefone"];
        echo "<pre>Endereco: {$endereco}<br />Telefone: {$telefone}</pre>";
    }
    mysqli_close($conexao);
}
?>
