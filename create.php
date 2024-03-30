<?php 
  include_once('templates/header.php');
?>

<div class="container">
    <h1 class="main-title mt-5 text-center p-2 text-black fs-1">
        Adicionar contato
    </h1>

    <a href="index.php" class="btn btn-outline-primary mt-2 mb-4">Voltar</a>
    <form action="config/process.php" method="POST" value="create">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">
                Nome do contato
            </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
        </div>

        <div class="form-group  mt-3">
            <label for="phone">
                Telefone
            </label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o numero do telefone"
                required>
        </div>

        <div class="form-group  mt-3">
            <label for="observations">
                Observações
            </label>
            <textarea type="text" class="form-control" rows="3" id="observations" name="observations"
                placeholder="Digite as observações"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar</button>
    </form>
</div>



<?php 
  include_once('templates/footer.php');
?>