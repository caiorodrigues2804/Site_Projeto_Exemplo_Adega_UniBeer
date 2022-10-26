<script>
	localStorage.x = 0;
	localStorage.y = 0;
</script>
<?php 

session_start();
print_r($_SESSION);
session_destroy();
session_destroy();
print_r($_SESSION);

header('Location: autenticacao.php?desconectado=true');

?>
