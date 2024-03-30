<?php
session_start();

include_once("connection.php");

$id = !empty($_GET['id']) ? $_GET['id'] : null;
$data = $_POST;

if (!empty($data)) {
    $name = $data["name"];
    $phone = $data["phone"];
    $observations = $data["observations"];

    if ($data["type"] == "create") {

        $stmt = pg_prepare($conn, "insert_query", "INSERT INTO tb_contacts (name, phone, observations) VALUES ($1, $2, $3)");
        $stmt = pg_execute($conn, "insert_query", array($name, $phone, $observations));
        $_SESSION['msg'] = "Contato criado com sucesso";

    } else if ($data["type"] === "edit") {
        
        $id = $data['id'];
        $stmt = pg_prepare($conn, "update_query", "UPDATE tb_contacts SET name = $1, phone = $2, observations = $3 WHERE id = $4");
        $stmt = pg_execute($conn, "update_query", array($name, $phone, $observations, $id));
        $_SESSION['msg'] = "Contato atualizado com sucesso";
        
    } else if ($data["type"] === "delete") {

        $id = $data['id'];
        $stmt = pg_prepare($conn, "delete_query", "DELETE FROM tb_contacts WHERE id = $1");
        $stmt = pg_execute($conn, "delete_query", array($id));

        $_SESSION['msg'] = "Contato deletado";

    }else {
        $_SESSION['msg'] = "Algo de errado aconteceu.";
    }

    header("Location: ../index.php");
    
} else {
    if (!empty($id)) {
        $query = "SELECT * FROM tb_contacts WHERE id = $1";
        $stmt = pg_prepare($conn, "", $query);
        $stmt = pg_execute($conn, "", array($id));
        $contact = pg_fetch_array($stmt);
    } else {
        $contacts = [];
        $query = "SELECT * FROM tb_contacts";
        $stmt = pg_query($query);
        $contacts = pg_fetch_all($stmt);
    }
}

// reset id
  $queryCheckId = pg_query($conn, "SELECT COUNT(*) FROM tb_contacts");
  $row = pg_fetch_row($queryCheckId);
  $num_rows = intval($row[0]);

  if ($num_rows == 0) {
      // Ressete a sequência para começar em 1
      $query = "ALTER SEQUENCE tb_contacts_id_seq RESTART WITH 1";
      $result_reset_sequence = pg_query($conn, $query);
    
  }

?>