<?php
$operacao = $_POST["operacao"];
include "conexao.php";
if ($operacao == "incluir") {
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $sql = "INSERT INTO produto VALUES ";
    $sql .= "('$codigo','$nome','$preco')";
    $resultado = mysqli_query($conexao, $sql);
    echo "<h2>Produto incluído com sucesso!</h2>";
} else if ($operacao == "excluir") {
    $codigo = $_POST["codigo"];
    $sql = "DELETE FROM produto WHERE codigo=$codigo";
    $resultado = mysqli_query($conexão, $sql);
    //retorna o número de linhas afetados por uma operação
    $linhas = mysqli_affected_rows($conexao);
    if ($linhas == 1) {
        echo "<h2>Produto excluído com sucesso!</h2>";
    } else {
        echo "<h2>Produto não encontrado!</h2>";
    }
} else if ($operacao == "mostrar") {
    $resultado = mysqli_query($conexao, "SELECT * FROM produto");
    //retorna o número de linhas de uma consulta
    $linhas = mysqli_num_rows($resultado);
    echo "<p><h2>Lista de Produtos da Loja</h2></p>";
    for ($i = 0; $i < $linhas; $i++) {
        //armazena a linha atual do resultado em um array.
        $reg = mysqli_fetch_row($resultado);
        echo "Código: $reg[0] <br /> Nome: $reg[1] <br /> Preço: $reg[2]<br
/><br />";
    }
} else if ($operacao == "alterar") {
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $sql = "UPDATE produto SET nome='$nome',preco='$preco' where
codigo='$codigo'";
    $resultado = mysqli_query($conexão, $sql);
    if (!$resultado) {
        die("falha na execuçao");
    } else {
        echo '<script type="text/javascript">
alert("Produto alterado com sucesso!");
</script>';
    }
}
mysqli_close($conexao);//fecha a conexão com o BD
