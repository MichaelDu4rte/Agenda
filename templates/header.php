<?php 
include_once("./config/connection.php"); 
include_once("./config/process.php"); 

// clean session msg
if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agenda | Contatos</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <header>
        <div class="nav navbar navbar-expand-lg navbar-dark bg-primary text-white px-5">
            <a href="./index.php" class="navbar-brand">Agenda</a>


            <div>
                <div class="navbar-nav ">
                    <a href="./create.php" class="navbar-link  text-white px-5" id="home-link">Adicionar</a>
                </div>
            </div>
        </div>


    </header>