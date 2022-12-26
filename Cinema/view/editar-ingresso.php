
<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ingresso</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/456bbda4c6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
   
    <header id="topo">  
            <div class="logo">
                    <img src="../view/images/logo.png" alt="Logo da Cinetrix">
            </div>
    </header>

    <nav id="menu">
    <div id="optionsMenu">
            <a href="../view/index.php">Página Inicial</a>
            <a href="../view/listar-filmes.php">Filmes</a>
            <a href="../view/listar-sessoes.php">Sessões</a>
            <a href="../view/listar-ingressos.php">Ingressos</a>
            <a href="../view/listar-func.php">Funcionários</a>
            <a href="../view/listar-relatorio.php">Relatório Financeiro</a>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="col d-flex justify-content-center">
    <?php
        require_once '../classes/autoload.inc.php';
        $id = $_GET['idIngresso'];

        $passe = new IngressoDAO();
        $value = $passe->buscar($id);
    ?>
        <form class="formulario" method="post" action="../database/atualizar-ingresso.php">
        <input type="hidden" name="idIngresso" value="<?php echo $value['idIngresso']; ?>">
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>CPF_Cliente:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" value="<?php echo $value['CpfCliente']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Valor Unitário:</strong></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="valor" value="<?php echo $value['ValorIndividual']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-3">
                <label class="col-sm-0 col-form label"><strong>Tipo:</strong></label>
                    <select class="form-select" name="tipo">
                        <option value="Normal">Normal</option>
                        <option value="Meia Entrada">Meia Entrada</option>
                    </select>
                </div>
            </div>
            <br><br>
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Qtd:</strong></label>
                    <div class="col-sm-11">
                        <input type="number" class="form-control" name="qtd" value="<?php echo $value['Qtd']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Poltrona:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="poltrona" value="<?php echo $value['Poltrona']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Id_Sessão:</strong></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="sessao" value="<?php echo $value['idSessão']; ?>" autocomplete="off">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col d-flex justify-content-center">
                <div class="buttons">
                    <input type="submit" name="enviar" class="btn btn-success" value="Atualizar">
                    <a href="../view/listar-ingressos.php" type="button" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <div class="space"></div>
</body>