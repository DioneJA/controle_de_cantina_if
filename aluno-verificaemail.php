<?php 
include_once("conecta.php"); // Inclui a classe conecta

function validaUsuario($user, $ra) {
    $sql = "SELECT * FROM aluno WHERE email = '".$user."' AND ra = '".$ra."';";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
         $aluno = mysqli_fetch_array($resultado);
         return $aluno;
    } else {
         return null;
    } 
}
?>
