<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../view/css/allawesome.css">
        <title>Cadastro de Eleitores</title>
    </head>

    <style>
        *  {
            margin:0;
            padding:0;
        }

        html, body {height:100%;}

        .container {
            min-height:100%;
            position:relative;
            width:100%;
        }

        .page-footer font-small bg-light {
            position:absolute;
            bottom:0;
            width:100%;
            margin-top: 5px;
        }

        .content {overflow:hidden;}
        .aside {width:200px;}
        .fleft {float:left;}
        .fright {float:right;}
    </style>

    <body>
        <nav class="navbar navbar-expand navbar-light bg-light">           
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:17px;color: black" id="home" href="index.php">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " style="font-size:17px;color: black" href="cadastroeleitor.php" id="" role="button">
                            <i class="fas fa-users"></i>
                            Cadastro de Eleitor
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " style="font-size:17px;color: black" href="../view/pesquisareleitor.php" id="" role="button">
                            <i class="fa fa-search-plus"></i>
                            Pesquisa de Eleitor
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin-top: 50px">
                <div class="col">
                    <h1 style="color:#33CC99">Cadastro de Eleitores</h1>
                    <form action="../controller/eleitorcontroller.php" method="POST">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Nome do Eleitor</label>
                                <input required type="text" class="form-control" name="nome" placeholder="Digite o nome completo do eleitor">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input required type="text" class="form-control" name="endereco" placeholder="Digite o endereço completo do eleitor">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">CPF</label>
                                <input required type="text" minlength="10" maxlength="14" class="form-control" name="cpf" id="cpf1" placeholder="Digite o CPF!">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Telefone</label>
                                <input required type="text" class="form-control" name="telefone" id="telefone1" placeholder="Digite o número">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">WhatsAPP</label>
                                <input required type="text" class="form-control" name="whatsapp" id="whatsapp1" placeholder="Digite o número">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                <input required type="date" class="form-control" name="dataNascimento" placeholder="Digite a data">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Titulo de Eleitor</label>
                                <input required type="text" minlength="12" maxlength="15" class="form-control" id="tituloeleitor1" name="tituloeleitor" placeholder="Digite o número">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Seção</label>
                                <input required type="text" class="form-control" maxlength="4" id="secao1" name="secao" placeholder="Digite o número">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Zona</label>
                                <input required type="text" class="form-control" maxlength="4" id="zona1" name="zona" placeholder="Digite o número">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Tipo de Liderança</label>
                                <input required type="text" class="form-control" name="tipoLideranca" placeholder="Digite o tipo de liderança">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Area de atuação</label>
                                <select class="form-control" required name="areaatuacao" placeholder="Zona de atuação">
                                    <option value="Zona Norte">Zona Norte</option>
                                    <option value="Zona Sul">Zona Sul</option>
                                    <option value="Zona Leste">Zona Leste</option>
                                    <option value="Zona Sudeste">Zona Sudeste</option>
                                    <option value="Zona Rural">Zona Rural</option>
                                </select>
                            </div>
                            <div class="form-group col-md-10">
                                <a href="../view/index.php" class="btn btn" style="background-color:#808080;color:white">Voltar</a>
                                <button class="btn btn" type="submit" style="background-color:#33CC99;color:white">Salvar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer font-small bg-light" style="float: bottom">
        <div class="footer-copyright text-center py-3">Copyright &copy; DMEI 2020
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../view/js/jquery.min.js"></script>
    <script src="../view/js/jquery.mask.min.js"></script>
</body>

<script type="text/javascript">
    $("#cpf1").mask("###.###.###-##");
    $("#telefone1").mask("(00) 00000-0000");
    $("#whatsapp1").mask("(00) 00000-0000");
    $("#tituloeleitor1").mask("0000 0000 0000");
    $("#zona1").mask("0000");
    $("#secao1").mask("0000");
</script>
</html>
