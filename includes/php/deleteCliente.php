<?php
session_start();
if(isset($_POST['userId'])){
	require 'FunctionsClientes.php';
	$obj = new FunctionsClientes();

	$deleteUser = $obj->deleteCliente($_POST['userId']);

	if($deleteUser){
		echo '<p class="resTipoTel"><i class="halflings-icon ok" style="color: green;"></i> Eliminado correctamente.</p>';
	}else{
		echo '<p class="resTipoTel"><i class="halflings-icon remove" style="color: red;"></i> Hubo un error, intelelo de nuevo1.</p>';
	}
}else{
	echo '<p class="resTipoTel"><i class="halflings-icon remove" style="color: red;"></i> Hubo un error, intelelo de nuevo2.</p>';
}