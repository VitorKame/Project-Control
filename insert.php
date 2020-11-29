<?php
/*@var $user type*/

$user =$_POST["user"];
$email =$_POST["email"];
$regra =$_POST["regra"];
$senha =$_POST["pass"];//pode colocar md5 aqui
$chave =$_POST["gerarchave"];
date_default_timezone_set('America/Sao_Paulo');

if($regra == $chave)
{
if($user !=NULL && $email != NULL && $senha != NULL)
{
$today=md5(date("d m y G:i:s T Y"));
$con = @mysql_connect("localhost", "root", "usbw");
mysql_select_db("teste");

//$insert = mysql_query("INSERT INTO 'login'('us_id', 'us_nome', 'us_email', 'us_pass', 'us_chave')VALUES (NULL, '" .$user. "', '" .$email. "', '" .md5($senha)."', '".$today."')", $con)or die(mysql_error());	
$insert = mysql_query("INSERT INTO `teste`.`login` (`us_id`, `us_nome`, `us_email`, `us_pass`, `us_chave`) VALUES (NULL, '" .$user. "', '" .$email. "', '" .md5($senha)."', '".$today."')", $con)or die(mysql_error());
mysql_insert_id();

if($insert){
mysql_close($con);
echo"<script>if (window.confirm('Usuário cadastrado com sucesso!')) {
        window.location = 'register.php';
    } else {
        window.close()
    }</script>";
}	
}else{
echo "<script>if (window.confirm('Campo Nome, E-mail ou Senha incorretos! \\ Tente novamente!')) {
        window.location = 'register.php';
    } else {
        window.close()
    }</script>";
}
}else{

echo "<script>if (window.confirm('Campo Validador incorreto! \\ Tente novamente!')) {
        window.location = 'register.php';
    } else {
        window.close()
    }</script>";
}
?>