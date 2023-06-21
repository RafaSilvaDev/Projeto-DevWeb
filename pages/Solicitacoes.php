<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styles/solicitacoes.css" />
    <title>Natureza Viva | Solicitações</title>
  </head>
  <body>
    <header>
      <a href="./Home.html" class="header-logo">
        <img src="../img/vector.png" alt="Logo" />
      </a>
      <div class="links">
        <a href="../php/logout.php" class="requests">Sair</a>
        <a href="./Solicitacoes.html" class="requests"
          >Acompanhar solicitações</a
        >
        <a href="./Salao.html" class="reserve">Faça seu agendamento</a>
      </div>
    </header>
    <form action="#" method="post" class="main-page">
      <section class="off-table">
        <a href="./Home.html" class="go-back">Voltar</a>
        <h1>Solicitações</h1>
        <div class="table-buttons">
          <button type="submit" class="btn btn-light">
            Confirmar selecionados
          </button>
          <button type="submit" class="btn btn-light">
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
              require 'config.php';
              
            ?>
            <tr>
              <th scope="row">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
              </th>
              <td>23/03/2023</td>
              <td>Fernando Oliveira</td>
              <td>Não confirmado</td>
            </tr>
          </tbody>
        </table>
      </section>
    </form>
  </body>
</html>
