<?php 
  include_once('templates/header.php');
?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p class="msg text-white bg-info border border-success text-center mt-5 p-2 fs-1"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 class="main-title mt-5 text-center bg-primary p-2 text-white fs-1">
        Agenda
    </h1>

    <?php if(count($contacts) > 0): ?>
    <table class="table" id="contacts-table">
        <thead class="bg-primary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody class="bg-primary">
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td scope="row text-black">
                    <?= $contact["id"] ?>
                </td>
                <td scope="row text-black">
                    <?= $contact["name"] ?>
                </td>
                <td scope="row text-black">
                    <?= $contact["phone"] ?>
                </td>

                <td class=" text-end">
                    <a href="show.php?id=<?= $contact["id"] ?>" class=" fs-3 fas fa-eye check-icon"></a>
                    <a href="edit.php?id=<?= $contact["id"] ?>" class="fs-4 fas fa-edit edit-icon"></a>

                    <form action="config/process.php" method="POST" class="d-inline">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                        <button type="submit" value="" class="btn  btn-primary btn-sm mb-2"><i
                                class=" fas fa-times delete-icon"></i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p class="empty-list-text text-center">Você não possui contatos. <a href="create.php">Adicione aqui</a></p>
    <?php endif; ?>
</div>



<?php 
  include_once('templates/footer.php');
?>