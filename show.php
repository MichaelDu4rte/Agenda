<?php 
  include_once('templates/header.php');
?>

<div class="container text-start" id="view-container">
    <h1 class="main-title mt-5 text-center bg-primary p-2 text-white fs-1">
        <?= $contact['name']?>
    </h1>

    <a href="index.php" class="btn btn-outline-primary mt-2 mb-4">Voltar</a>

    <p class="bold">Telefone:</p>
    <p class=""> <?= $contact['phone']?></p>

    <p class="bold">Observações:</p>
    <p class=""> <?= $contact['observations']?></p>
</div>



<?php 
  include_once('templates/footer.php');
?>