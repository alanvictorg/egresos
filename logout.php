<?php /*session_start(); 

session_destroy();

include("includes/funcoes.php");

redirect("index.php");
*/

session_start();
session_unset();
session_destroy();

header("location:formulario.php");
exit();

?>