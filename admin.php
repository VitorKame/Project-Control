<?php
session_start();
if (isset($_SESSION['nome_usuario'])) {
    $nome_usuario = $_SESSION['nome_usuario'];
}
if (isset($_SESSION['senha_usuario'])) {
    $senha_usuario = $_SESSION['senha_usuario'];
}
if (!(empty($nome_usuario) OR empty($senha_usuario))) {

    $con = mysql_connect("localhost", "root", "usbw");
    mysql_select_db("teste");

    /* Aqui veificamos se o usuario e senha digitados no formulário existem e estão corretos */
    $sql = mysql_query("SELECT * FROM login WHERE us_email='" . mysql_real_escape_string($nome_usuario) . "' AND us_pass='" . mysql_real_escape_string($senha_usuario) . "'", $con)or die(mysql_error());
    $conta = mysql_num_rows($sql);

    if ($conta >= 1) {
        if (($senha_usuario != mysql_result($sql, 0, "us_pass"))) {
            unset($_SESSION['nome_usuario']);
            unset($_SESSION['senha_usuario']);
            header("location:index.html");
        }
    } else {
        unset($_SESSION['nome_usuario']);
        unset($_SESSION['senha_usuario']);
        header("location:index.html");
    }
} else {
    header("location:index.html");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        header("location:fav.php");
        //echo "<a href=\"sair.php\">Sair</a>";
        ?>
    </body>
</html>
