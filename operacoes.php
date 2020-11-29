<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Operações de PDV</title>


        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!--PRÓXIMO É NECESSÁRIO PARA PÁGINAS COM TABELAS-->
        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="fav.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fa fa-camera-retro"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Nome da Empresa<!--<sup>2</sup>--></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="fav.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Acesso Rápido</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Catálogo
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="servicos.php">
                        <i class="fas fa-fw fa-cut"></i>
                        <span>Serviços</span>
                    </a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-shopping-bag"></i>
                        <span>Vendas</span>
                    </a>
                    <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Utalidades:</h6>
                            <a class="collapse-item" href="clientes.php">Clientes</a>
                            <a class="collapse-item" href="comissoes.php">Comissões</a>
                            <a class="collapse-item" href="pagamentos.php">Tipos de Pagamento</a>
                            <h6 class="collapse-header">Caixa:</h6>
                            <a class="collapse-item" href="habilitar.php">Habilitar</a>
                            <a class="collapse-item active" href="operacoes.php">Operações PDV</a>
                            <a class="collapse-item" href="cupom.php">Cupom</a>
                            <!--<a class="collapse-item" href="fluxo_c.php">Fluxo de Caixa</a>-->
                            <a class="collapse-item" href="movi_x.php">Movimentação de Caixa</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfig" aria-expanded="true" aria-controls="collapseConfig">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Configurações</span>
                    </a>
                    <div id="collapseConfig" class="collapse" aria-labelledby="headingConfig" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Empresa:</h6>
                            <a class="collapse-item" href="geral.php">Dados Gerais</a>
                            <a class="collapse-item" href="funcionarios.php">Funcionários</a>
                            <a class="collapse-item" href="usuarios.php">Usuários</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <!-- Inicio da página -->
            <div id="content-wrapper" class="d-flex flex-column bg-gray-900">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-gray-800 topbar mb-4 static-top shadow ">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <!--<li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts 
                            <span class="badge badge-danger badge-counter"></span>
                        </a>
                            <!-- Dropdown - Alerts 
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>-->

                            <!-- Nav Item - Messages -->
                            <!--<li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages 
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                            <!-- Dropdown - Messages 
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                            </li>-->

                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link">
                                    <span class="mr-2 d-none d-lg-inline text-white small">Wal /</span>

                                    <span class="mr-2 d-none d-lg-inline text-white small"> Admin</span>
                                </a>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-white small">Salão da Wal</span>
                                    <img class="img-profile rounded-circle" src="img/Logo.jpg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    <!--<a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>-->
                                    <!--<a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="sair.php" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <!-- Inicio do conteúdo da página -->
                    <div class="container-fluid ">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-100">Operações de PDV</h1>
                        <!-- Content Row -->
                        <!--DIV DA TABELA-->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Operações de PDV <a href="#"><i class="fas fa-exclamation-triangle text-warning" data-toggle="modal" data-target="#modalOperacoes"></i></a></h6>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Data</th>
                                                <th>PDV</th>
                                                <th>Operador</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Data</th>
                                                <th>PDV</th>
                                                <th>Operador</th>
                                                <th>Ação</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Fechamento</td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Venda(Cancelada)</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Reforço</td>
                                            </tr>
                                            <tr>
                                                <td>004</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr>
                                            <tr>
                                                <td>005</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 2</td>
                                                <td>Funcionario</td>
                                                <td>Fechamento</td>
                                            </tr>
                                            <tr>
                                                <td>006</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 2</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr>
                                            <tr>
                                                <td>007</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Sangria</td>
                                            </tr>
                                            <tr>
                                                <td>008</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr>
                                            <tr>
                                                <td>009</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr> 
                                            <tr>
                                                <td>010</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 2</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr>
                                            <tr>
                                                <td>011</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Venda</td>
                                            </tr>
                                            <tr>
                                                <td>012</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 2</td>
                                                <td>Funcionario</td>
                                                <td>Abertura</td>
                                            </tr>
                                            <tr>
                                                <td>013</td>
                                                <td>11/10/2019</td>
                                                <td>PDV 1</td>
                                                <td>Funcionario</td>
                                                <td>Abertura</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--FIM DA DIV DA TABELA-->
                        <!-- Content Row -->

                    </div>
                    <!-- Fim do conteudo da página -->
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2019</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->
                <div class="modal fade" id="modalOperacoes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalCentralizado">Informações sobre a página Operações de PDV</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Essa é a tela de operações de PDV, aqui você vai poder acessar o registro das operações realizadas no ponto de vendas.<br>
                                Ações:<br>
                                &emsp;Abertura: Registra quando o PDV é iniciado.<br>
                                &emsp;Venda: Registra quando uma venda é encerrada.<br>
                                &emsp;Venda(cancelada): Registra quando umas venda é cancelada.<br>
                                &emsp;Fechamento: Registra quando o PDV é encerrado.<br>
                                &emsp;Sangria: Registra quando realiza uma retirada de dinheiro do<br>&emsp;&emsp;&emsp;&emsp;&emsp;PDV.<br>
                                &emsp;Reforço: Registra quando realiza um deposito no PDV.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim da página -->
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="sair.php">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- PRÓXIMOS 3 <SCRIPT> NECESSÁRIOS PARA PÁGINAS COM TABELAS-->
            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

    </body>

</html>
