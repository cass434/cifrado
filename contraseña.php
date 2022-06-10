
<?php
include 'Encriptacion.php';
$texto="";
$encriptar="";
$desincriptar="";
$clave = $_POST['clave'];
$claveE=Encriptacion::encryption($clave);
$claveD=Encriptacion::decryption($claveE);

//botones
if(isset($_POST['texto']))$texto=$_POST['texto'];
if(isset($_POST['encriptar']))$encriptar=$_POST['encriptar'];
if(isset($_POST['desincriptar']))$desincriptar=$_POST['desincriptar'];

if($encriptar){
    echo $claveE;
}
if($texto){
    echo $clave;
}
if($desincriptar){
    echo '<label Texto descifrado:' .$claveD.'</label>';
}
  
?>