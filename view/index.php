<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../view/css/allawesome.css">
        <title>Página Inicial</title>
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
        <div class="container" style="margin-top: 50px">
            <div class="jumbotron" style=" border: 2px solid;border-color: #33CC99">
                <img src="../view/images/logo-eleitor.png" style="width:30%; height: 50%">
                <h1 class="display-4" style="float:right;width:50%; ">Bem vindo, ao sistema de cadastro de eleitor!</h1>
                <p class="lead" style="margin-top:20px">Por favor, ao realizar o cadastro verificar se todos os dados estão corretos.</p>
                <hr class="my-4"></div>
        </div>

        <footer class="page-footer font-small bg-light">
            <div class="footer-copyright text-center py-3">Copyright &copy; DMEI 2020
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
