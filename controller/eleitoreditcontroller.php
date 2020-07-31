<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Cadastro de Eleitores</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php
                include "../model/conexao.php";
                $cod_eleitor = $_POST['cod_eleitor'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $whatsApp = $_POST['whatsapp'];
                $dataNascimento = $_POST['data'];
                $tituloeleitor = $_POST['tituloeleitor'];
                $secao = $_POST['secao'];
                $zona = $_POST['zona'];
                $tipoLideranca = $_POST['tipoLideranca'];
                $areaatuacao = $_POST['areaatuacao'];

                $sql = "UPDATE eleitor set cpf = '$cpf', nome = '$nome', endereco = '$endereco', telefone = '$telefone', whatsapp = '$whatsApp', dataNascimento = '$dataNascimento', tituloeleitor = '$tituloeleitor', secao = '$secao', zona = '$zona', tipoLideranca = '$tipoLideranca', areaatuacao = '$areaatuacao' WHERE cod_eleitor = $cod_eleitor";
                if (mysqli_query($conn, $sql)) {
                    mensagem("Eleitor $nome alterado com sucesso!", "sucess");
                } else {
                    mensagem("Error ao alterar eleitor!", "danger");
                }
                ?>
            </div>
            <div><a href="../view/pesquisareleitor.php" class="btn btn-primary">Voltar</a></div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>