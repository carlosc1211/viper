<?php 
require_once("../../lib/core.php");

$usuario = rawurldecode  (getA("usuario"));
$clave = rawurldecode  (getA("clave"));

$clave = hash('sha256',$clave,false);

$rs = $cn->validaUserEmployee($db,$usuario,$clave);

if($rs) extract($rs[0]);

if($co){
	$_SESSION["codemployee"] = array('co'=>$co,'nb'=>$nb,'apll'=>$apll,'corr'=>$corr);
	echo("1");
}
else
	echo("2");

?>