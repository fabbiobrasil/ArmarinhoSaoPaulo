<?php

$conexao = ibase_connect(
    "localhost:C:EsteComputador/Documentos/ARMARINHO_DIGITAL.FDB",
    "sysdba",
    "masterkey"
);

if (!$conexao) {
    die("Erro ao conectar no banco");
}

?>
<?php

$conexao = ibase_connect(
    "localhost:C:/banco/Loja_armarinho_online.fdb",
    "SYSDBA",
    "masterkey"
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Armarinho</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Produtos</h1>

<?php

$sql = "SELECT * FROM produtos";
$resultado = ibase_query($conexao, $sql);

while ($produto = ibase_fetch_assoc($resultado)) {

?>

<div class="card">
    <h2><?php echo $produto['NOME_PRODUTO']; ?></h2>
    <p>R$ <?php echo $produto['PRECO']; ?></p>
</div>

<?php
}
?>

</body>
</html>