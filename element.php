<?php
include_once 'src/connect-db.php';

$url = parse_url($_SERVER['REQUEST_URI']);
if (!isset($url['query'])) die("Erro 1");
$string = $url['query'];
$string = (ltrim($string, "id="));
$id = intval($string);
$stmt = $conn->prepare("SELECT * FROM elementos WHERE id=?");
if ($stmt) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id_, $elemento, $abreviatura, $descricao, $imagem);
    $stmt->fetch();
    $stmt->close();
    if ($id_ == null) die("Elemento não encontrado");
} else {
    die($conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="Esco Icon" href="esco.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elemento Químico <?= $elemento ?></title>
    <link rel="stylesheet" href="src/main.css">
    <script src="src/main.js"></script>
    <link href="src/element.css">
    <link href="netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<nav>
    <section class="navItem shake slow">

        <div id="btn-menu">
            <a href="index.html">
                <button type="button">
                    <img src="src/icon/big-and-small-dots.svg" alt="">Página Principal
                </button>
            </a>
        </div>

        <div id="btn-esquerda">
            <a href="tabela_periodica.html">
                <button type="button">
                    <img src="src/icon/periodic-table.svg" alt="">Tabela Periódica
                </button>
            </a>
        </div>

        <div id="btn-meio">
            <a href="developers.html">
                <button type="button">
                    <img src="src/icon/multiple-users-silhouette.svg" alt="">Developers
                </button>
            </a>
        </div>

        <div id="btn-direita">
            <a href="anos.html">
                <button type="button">
                    <img src="src/icon/confetti.svg" alt="">150 Anos
                </button>
            </a>
        </div>
    </section>
</nav>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 16px;">
                    <div class="well profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <figure class="center">
                                <img src="<?= $imagem ?>" alt="" class="img-circle" style="width:800px;" id="user-img">
                            </figure>
                            <h5 style="text-align:center;"><strong id="user-name"><?= $elemento ?></strong></h5>
                            <p style="text-align:center; margin: 0 10%" id="user-frid"><?= $descricao ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>