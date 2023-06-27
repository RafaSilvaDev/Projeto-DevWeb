<?php
require '../php/config.php';
$reservesId = array();

$query = "SELECT reserva.id as idreserva, reserva.data_reserva, reserva.confirmada, reserva.locador, usuario.id, usuario.nome FROM reserva INNER JOIN usuario ON reserva.locador = usuario.id";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  array_push($reservesId, $row["idreserva"]);
}

if (isset($_POST['confirmar'])) {
  $selecionados = $_POST['selecionados'];

  foreach ($selecionados as $id) {
    if (in_array($id, $reservesId)) {
      $queryConfirmar = "UPDATE reserva SET confirmada = 1 WHERE id = $id";
      mysqli_query($conn, $queryConfirmar);
    }
  }

  echo '<script language="JavaScript" charset="utf-8">alert("Reservas aprovadas!")</script>';
  echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.php">';
}

if (isset($_POST['reprovar'])) {
  $selecionados = $_POST['selecionados'];

  foreach ($selecionados as $id) {
    if (in_array($id, $reservesId)) {
      $queryExcluir = "DELETE FROM reserva WHERE id = $id";
      mysqli_query($conn, $queryExcluir);
    }
  }

  echo '<script language="JavaScript" charset="utf-8">alert("Reservas reprovadas e excluídas!")</script>';
  echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.php">';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../styles/solicitacoes.css" />
  <title>Natureza Viva | Solicitações</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="./Home.html" class="header-logo navbar-brand">
        <img src="../img/vector.png" height="80" alt="Logo" />
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Solicitacoes.php">Acompanhar solicitações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../php/logout.php">Sair</a>
          </li>
          <li class="nav-item">
            <a class="nav-link reserve" href="Salao.html">Faça seu agendamento</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="#" method="post" class="main-page">
    <section class="off-table">
      <a href="./Home.html" class="go-back">Voltar</a>
      <h1>Solicitações</h1>
      <div class="table-buttons">
        <button type="submit" class="btn btn-light" name="confirmar">
          Confirmar selecionados
        </button>
        <button type="submit" class="btn btn-light" name="reprovar">
          Reprovar selecionados
        </button>
      </div>
    </section>
    <section class="table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Selecionar</th>
            <th scope="col">Data reserva</th>
            <th scope="col">Locador</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT reserva.id as idreserva, reserva.data_reserva, reserva.confirmada, reserva.locador, usuario.id, usuario.nome FROM reserva INNER JOIN usuario ON reserva.locador = usuario.id";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <tr>
                <th scope="row">
                <input class="form-check-input" type="checkbox" name="selecionados[]" value="' . $row["idreserva"] . '" id="flexCheckDefault" />
                </th>
                <td>' . $row["data_reserva"] . '</td>
                <td>' . $row["nome"] . '</td>
                <td>' . ($row["confirmada"] == 0 ? "Não confirmada" : "Confirmada") . '</td>
              </tr>
            ';
          }
          ?>
        </tbody>
      </table>
    </section>
  </form>
</body>

</html>