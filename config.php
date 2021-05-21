<?php
 $servidor = "sql311.byetcluster.com"; // localhost tambem é web
 $dbname = "epiz_28462971_myform"; // nome do banco
 $dbusuario = "epiz_28462971"; // usuário do banco
 $dbsenha = "yqbILwmycS4Gn"; // senha usuário do banco
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 if (!$conn) {
      die("Conexao falhou: " . mysqli_connect_error());
}
?>