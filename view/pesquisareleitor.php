<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" type="text/css" href="../view/css/datatables.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../view/css/allawesome.css">
        <title>Pesquisa de Eleitores</title>
    </head>

    <style>
        *  {
            margin:0;
            padding:0;
        }

        html, body {height:100%;}
        .col-12 {
            min-height:100%;
            position:relative;
            width:100%;
        }

        #corpo{
            font-size: 16px;
            color: black;
        }

        #teleitor{
            width: 100% !important;
            text-align: center;
        }
        .table.dataTable{
            width: 100%;
            margin: 0 auto;
            clear: both;
            border-collapse: separate;
            border-spacing: 1px; 
        }
        .table.dataTable.no-footer {
           border-bottom: 2px solid #f8f9fa;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #DBEEE8;
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
        <?PHP
        include "../model/conexao.php";

        $sql = "SELECT * FROM eleitor";
        $dados = mysqli_query($conn, $sql);
        ?>
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

        <div class="col-12" style="margin-top: 20px;margin-bottom: 10px;">
            <table id="teleitor" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">WhatsApp</th>
                        <th scope="col">Titulo de Eleitor</th>
                        <th scope="col">Seção</th>
                        <th scope="col">Zona</th>
                        <th scope="col">Tipo de Liderança</th>
                        <th scope="col">Zona de Atuação</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>

                <tbody id="corpo">
                    <?PHP
                    while ($linha = mysqli_fetch_assoc($dados)) {
                        $cod_eleitor = $linha['cod_eleitor'];
                        $nome = $linha['nome'];
                        $cpf = $linha['cpf'];
                        $dataNascimento = $linha['dataNascimento'];
                        $dataNascimento2 = $linha['dataNascimento'];
                        $dataNascimento = mostra_data($dataNascimento);
                        $endereco = $linha['endereco'];
                        $telefone = $linha['telefone'];
                        $whatsApp = $linha['whatsapp'];
                        $tituloeleitor = $linha['tituloeleitor'];
                        $secao = $linha['secao'];
                        $zona = $linha['zona'];
                        $tipoLideranca = $linha['tipoLideranca'];
                        $areaatuacao = $linha['areaatuacao'];

                        echo "<tr>
                    <th scope='row'>$nome</th>
                    <td>$cpf</td>
                    <td>$dataNascimento</td>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$whatsApp</td>
                    <td>$tituloeleitor</td>
                    <td>$secao</td>
                    <td>$zona</td>
                    <td>$tipoLideranca</td>
                    <td>$areaatuacao</td>
                    <td><button id='btn_edit' style='background-color:#33CC99;color:white' data-toggle='modal' data-target='#edit_modal' data-cod_eleitor='$cod_eleitor' data-nome='$nome' data-cpf='$cpf' data-data='$dataNascimento2' data-endereco='$endereco' data-telefone='$telefone' data-whats ='$whatsApp' data-titulo ='$tituloeleitor' data-secao='$secao' data-zona='$zona' data-lider='$tipoLideranca' data-atuacao='$areaatuacao' class='btn btn btn-sm'>Editar</button></td>
                    <td><button id='btn_delete' style='background-color:#808080;color:white' data-toggle='modal' data-target='#modal_delete' data-cod_eleitor='$cod_eleitor' data-nome='$nome' class='btn btn btn-sm'>Excluir</button></td>
                    </tr>";
                    }
                    ?>     
                </tbody>
            </table>

            <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#33CC99">Editar Cadastro de Eleitor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container1">
                                <div class="row">
                                    <div class="col">
                                        <form action="../controller/eleitoreditcontroller.php" method="POST">
                                            <input type="hidden" class="form-control" name="cod_eleitor" id="cod_eleitor">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nome do Eleitor</label>
                                                <input required type="text" class="form-control" name="nome" id="nome">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Endereço</label>
                                                <input required type="text" class="form-control" name="endereco" id="endereco">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">CPF</label>
                                                <input required type="text" minlength="10" maxlength="14" class="form-control" name="cpf" id="cpf">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telefone</label>
                                                <input required type="text" class="form-control" name="telefone" id="telefone">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">WhatsAPP</label>
                                                <input required type="text" class="form-control" name="whatsapp" id="whats">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                                <input required type="date" class="form-control" name="data" id="data">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Titulo de Eleitor</label>
                                                <input required type="text" minlength="12" maxlength="15" class="form-control" name="tituloeleitor" id="titulo">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Seção</label>
                                                <input required type="text" class="form-control" maxlength="4" name="secao" id="secao">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Zona</label>
                                                <input required type="text" class="form-control" maxlength="4" name="zona" id="zona">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo de Liderança</label>
                                                <input required type="text" class="form-control" name="tipoLideranca" id="lideranca">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Area de atuação</label>
                                                <select class="form-control" required name="areaatuacao" id="atuacao" placeholder="Zona de atuação">
                                                    <option value="Zona Norte">Zona Norte</option>
                                                    <option value="Zona Sul">Zona Sul</option>
                                                    <option value="Zona Leste">Zona Leste</option>
                                                    <option value="Zona Sudeste">Zona Sudeste</option>
                                                    <option value="Zona Rural">Zona Rural</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group">
                                                    <button type="button" style="background-color:#808080;color:white" class="btn btn" data-dismiss="modal">Fechar</button>
                                                    <button type="submit" style="background-color:#33CC99;color:white" class="btn btn">Salvar Alterações</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#33CC99">Confirmação de exclusão do Eleitor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../controller/eleitorexcluircontroller.php" method="POST">
                            <div class="modal-body" id="exclusao1">
                                <input class="form-control" type="hidden" id="cod_eleitor1" name="cod_eleitor1">
                                <input class="form-control" type="hidden" id="nomepessoa1" name="nomepessoa1">
                                <p>Você tem certeza que deseja Excluir, <b id="nomepessoa">Nome da pessoa</b>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" style="background-color:#808080;color:white" class="btn btn" data-dismiss="modal">Cancelar</button>
                                <button type="submit" style="background-color:#33CC99;color:white" class="btn btn">Confirmar Exclusão</button>
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
        <script type="text/javascript" charset="utf8" src="../view/js/datatables.js"></script>
        <script type="text/javascript" charset="utf8" src="../view/js/jquery.mask.min.js"></script>
    </body>

    <script>
        $(document).ready(function() {
            $('#teleitor').DataTable({
                "language": {
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Próximo"
                    }
                }
            });

        });
    </script>

    <script type="text/javascript">
        $('#edit_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var cod_eleitor = button.data('cod_eleitor');
            var nome = button.data('nome'); // Extract info from data-* attributes
            var cpf = button.data('cpf'); // Extract info from data-* attributes
            var dataNascimento = button.data('data'); // Extract info from data-* attributes
            var endereco = button.data('endereco'); // Extract info from data-* attributes
            var telefone = button.data('telefone'); // Extract info from data-* attributes
            var whats = button.data('whats'); // Extract info from data-* attributes
            var tituloeleitor = button.data('titulo'); // Extract info from data-* attributes
            var secao = button.data('secao'); // Extract info from data-* attributes
            var zona = button.data('zona'); // Extract info from data-* attributes
            var tipoLideranca = button.data('lider'); // Extract info from data-* attributes
            var areaatuacao = button.data('atuacao'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('#cod_eleitor').val(cod_eleitor);
            modal.find('#nome').val(nome);
            modal.find('#cpf').val(cpf);
            modal.find('#data').val(dataNascimento);
            modal.find('#endereco').val(endereco);
            modal.find('#telefone').val(telefone);
            modal.find('#whats').val(whats);
            modal.find('#titulo').val(tituloeleitor);
            modal.find('#secao').val(secao);
            modal.find('#zona').val(zona);
            modal.find('#lideranca').val(tipoLideranca);
            modal.find('#atuacao').val(areaatuacao);
        });
    </script>

    <script>
        $('#modal_delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var cod_eleitor = button.data('cod_eleitor');
            var nome = button.data('nome'); // Extract info from data-* attributes
            var modal = $(this);
            console.log(cod_eleitor);
            modal.find('#nomepessoa1').val(nome);
            modal.find('#cod_eleitor1').val(cod_eleitor);
            document.getElementById('nomepessoa').innerHTML = nome;
        });
    </script>

    <script type="text/javascript">
        $("#cpf").mask("###.###.###-##");
        $("#telefone").mask("(00) 00000-0000");
        $("#whats").mask("(00) 00000-0000");
        $("#titulo").mask("0000 0000 0000");
        $("#zona").mask("0000");
        $("#secao").mask("0000");
    </script>
</html>
