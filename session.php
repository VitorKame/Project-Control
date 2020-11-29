<?php
$user = $_POST["user"];
$senha = md5($_POST["pass"]);

/*Abre a conexão com o mysql*/
$con = mysql_connect("localhost","root","usbw");
mysql_select_db("teste");

 /*Aqui veificamos se o usuario e senha digitados no formulário existem e estão corretos*/
$sql = mysql_query("SELECT * FROM login WHERE us_email='". mysql_real_escape_string($user)."' AND us_pass='".mysql_real_escape_string($senha)."'", $con)or die (mysql_error());
$registro = mysql_num_rows($sql);

if($registro<1){
   header("location:index.html");
} 
else 
{
   /*Apos verificado ele grava o usuario e senha no vetor $_session[]*/   
   session_start();
   $_SESSION['nome_usuario']=$user;
   $_SESSION['senha_usuario']=$senha;
   header("location: admin.php");
}

mysql_close($con);

?>