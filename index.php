<?php

session_start();
include("db.php");

if (isset($_SESSION['id'])) {
  $records = $conn->prepare('SELECT * FROM users WHERE id=:id');
  $records->bindParam(':id', $_SESSION['id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}

include('includes/header.php');
?>

<!-- <body> -->
<?php if (isset($_SESSION['id'])) : ?>
<div class="alert alert-primary" role="alert">
    ¡Hola <?php echo $results['user_name'] ?>!, en este sitio puedes gestionar tus notas.
    <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php include('dashboard.php') ?>
<?php else : ?>
<br><br>
<h1 class="custom_form">Elige una opción</h1>
<br>
<div class="custom_form">
    <a class="btn btn-primary btn-lg" href="./login.php" role="button">Ingresar</a>
    <a class="btn btn-secondary btn-lg" href="./signup.php" role="button">Crear cuenta</a>
</div>
<?php endif ?>

<?php include('includes/footer.php'); ?>