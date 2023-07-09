<?php
session_start();


require_once('../models/Cliente.php');

$cliente = new Cliente();

$resultlogin = $cliente->loginUser($_POST['username'], $_POST['username']);

$resultBool = isset($resultlogin);


// Verificar las credenciales ingresadas
if ($resultBool) {
  $_SESSION['user'] = 'admin';
  $_SESSION['nombre'] = $resultlogin->fetch_column("nombre");


  header('Location: viewsAdmin/admin.php'); // Redirigir al panel de administración
  exit();
} elseif ($_POST['username'] === 'vendedor' && $_POST['password'] === 'vendedorpass') {
  $_SESSION['user'] = 'vendedor';
  header('Location: vendedor.php'); // Redirigido al panel del vendedor
  exit();
} else {
  echo 'Credenciales incorrectas. Por favor, intenta nuevamente.';
}
?>
