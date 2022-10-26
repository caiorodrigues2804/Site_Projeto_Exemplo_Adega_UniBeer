<?php 

session_start();
$user_validador = false;

// print_r($_POST);
// print '<br/>';

$usuarios_autenticados = array(
	array('email' => 'admin@gmail.com', 'senha' => '123456'),
	array('email' => 'user@gmail.com', 'senha' => '123456'),
);

foreach ($usuarios_autenticados as $user) {
	if ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
		$user_validador = true;		
	}  
}

// print (($user_validador) ? 'Verdadeiro' : 'Falso');
if ($user_validador) {
	$_SESSION['aut_user'] = true;
	$strings = "email=" . $_POST['email'] . "&senha=" . $_POST['senha'];
	header("Location: valida_login.php?" . $strings);	
} else{
	header("Location: autenticacao.php?login=error");
}



?>
 