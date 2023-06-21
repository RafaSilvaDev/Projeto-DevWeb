<?php
session_start();

require 'config.php';
if (isset($_SESSION['usuario_id'])) {
    $data_reserva = $_POST["campo-data"];
    $usuario_id = $_SESSION['usuario_id'];

    //query para consultar reservas no banco
    $query = "SELECT * FROM reserva WHERE data_reserva = '$data_reserva' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<script language="JavaScript" charset="utf-8">alert("Oops! Parece que esta data não está mais disponível para ser reservada. Tente outra!")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Salao.html">';
    } else {
        $queryPost = "INSERT INTO reserva (data_reserva, confirmada, locador) VALUES ('$data_reserva', 0, '$usuario_id')";
        $result = mysqli_query($conn, $queryPost);

        echo '<script language="JavaScript" charset="utf-8">alert("Reserva realizada com sucesso! Acompanhe a aba Minhas Solicitações para acompanhar seu agendamento.")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.html">';
    }
} else {
    echo '<script language="JavaScript" charset="utf-8">alert("Oops! Parece que você não está logado para realizar uma reserva. Experimente realizar login!")</script>';
    echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../index.html">';
}
