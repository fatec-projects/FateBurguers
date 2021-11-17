
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style1.css">


    <title>FateBurguers</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Aqui está o menu da página inicial -->
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Novo <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fechar Pedido</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Salvar</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cadastros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="modal-clientes" href="#modal-container-clientes" role="button" class="btn" data-toggle="modal">Clientes</a>
                                    <a class="dropdown-item" id="modal-bebidas" href="#modal-container-bebidas" role="button" class="btn" data-toggle="modal">Bebidas</a>
                                    <a class="dropdown-item" id="modal-lanches" href="#modal-container-lanches" role="button" class="btn" data-toggle="modal">Lanches</a>
                                    <a class="dropdown-item" id="modal-adicionais" href="#modal-container-adicionais" role="button" class="btn" data-toggle="modal">Adicionais</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Relatórios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="modal-pedidoatual" href="#modal-container-pedidoatual" role="button" class="btn" data-toggle="modal">Pedido Atual</a>
                                    <a class="dropdown-item" id="modal-todospedidos" href="#modal-container-todospedidos" role="button" class="btn" data-toggle="modal">Todos Pedidos</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Aqui estão armazenados todos os Modals da página incial -->
            <div class="col-md-12">
                <div class="modal fade" id="modal-container-clientes" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Clientes <!-- ok-->
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- conteúdo do modal -->
                                <from>
                                    <div class="form-group">
                                        <label for="código">Código</label>
                                        <input type="number" class="form-control" id="código">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nome">Nome</label>
                                        <input type="text" class="form-control" id="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="Endereço">Endereço</label>
                                        <input type="text" class="form-control" id="Endereço">
                                        <div class="form-group">
                                            <label for="Telefone">Telefone</label>
                                            <input type="text" class="form-control" id="Telefone">
                                        </div>
                                    </div>
                                </from>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Salvar 
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-container-bebidas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Bebidas
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- corpo -->
                                <from>
                                    <div class="form-group">
                                        <label for="código">Código</label>
                                        <input type="number" class="form-control" id="código">
                                    </div>
                                    <div class="form-group">
                                        <label for="Descrição">Descrição</label>
                                        <input type="text" class="form-control" id="Descrição">
                                    </div>
                                    <div class="form-group">
                                        <label for="Preço">Preço</label>
                                        <input type="text" class="form-control" id="Preço">
                                    </div>
                                </from>
                                   
                                
                                
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Salvar
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-container-lanches" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Lanches
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <from>
                                <div class="form-group">
                                    <label for="código">Código</label>
                                    <input type="number" class="form-control" id="código">
                                </div>
                                <div class="form-group">
                                    <label for="Descrição">Descrição</label>
                                    <input type="text" class="form-control" id="Descrição">
                                </div>
                                <div class="form-group">
                                    <label for="Preço">Preço</label>
                                    <input type="text" class="form-control" id="Preço">
                                </div>
                            </from>
                                
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Salvar
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-container-adicionais" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Adicionais
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <from>
                                <div class="form-group">
                                    <label for="código">Código</label>
                                    <input type="number" class="form-control" id="código">
                                </div>
                                <div class="form-group">
                                    <label for="Descrição">Descrição</label>
                                    <input type="text" class="form-control" id="Descrição">
                                </div>
                                <div class="form-group">
                                    <label for="Preço">Preço</label>
                                    <input type="text" class="form-control" id="Preço">
                                </div>
                            </from>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Salvar
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                   Fechar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-container-pedidoatual" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Pedido Atual
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Salvar
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-container-todospedidos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">
                                    Modal Todos Pedidos
                                </h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary">
                                    Save changes
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Aqui começa os campos da página incial -->
        <div class="row">
            <!-- Parte "Dados": -->
            <div class="col-md-7">
                <fieldset class="border p-2">
                    <legend class="scheduler-border w-auto">Dados</legend>
                    <form>
                        <div class="form-group">
                            <label for="codigo">Código do Pedido</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código do Pedido">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome do Cliente</label>
                            <select class="form-control" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </form>
                </fieldset>
                <!-- Aqui estão posicionados "Tipos de Lanche" e primeira parte de "Adicionais" -->
                <div class="row">
                    <!-- Tipos de Lanche:-->
                    <div class="col-md-8">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Tipos de Lanche</legend>
                            <form>
                                <div class="form-group">
                                    <select class="form-control" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                            </form>
                        </fieldset>
                    </div>
                    <!-- Adicionais: -->
                    <div class="col-md-4">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Adicionais</legend>
                            <form>
                                <div class="form-group">
                                    <input type="radio" name="opcao" value="op1"> Sim
                                    <input type="radio" name="opcao" value="op2"> Não

                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <!-- Bebidas: -->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Bebidas</legend>
                                    <form>
                                        <div class="form-group">
                                            <input type="radio" name="opcao" value="op1"> Sim
                                            <input type="radio" name="opcao" value="op2"> Não

                                    </form>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Bebida Gelada?</legend>
                                    <form>
                                        <div class="form-group">
                                            <input type="radio" name="opcao" value="op1"> Sim
                                            <input type="radio" name="opcao" value="op2"> Não

                                    </form>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Tipos de Bebidas</legend>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- Parte 2 de Adicionais: -->
                    <div class="col-sm-4">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Adicionais</legend>
                            <form>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> Coca Cola</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Fanta Laranja</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3">Fanta Uva</label>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Coluna 2, com o Textarea -->
            <div class="col-md-5">
                <fieldset class="border p-2">
                    <legend class="scheduler-border w-auto">Pedido</legend>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="exampleTextarea" rows="19" placeholder="Os dados do pedido aparecerão aqui."></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

    </div>
</body>

</html>