<nav id="superior" class="navbar topo fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container">
                <a><img src="img/Logo9.png" width="60px" height="60px" class="mr-5"></a>
                    <a class="navbar-brand h1 mb-0" href="Home.php">HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav lead mr-auto">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle ml-2 mr-5" href="#" data-toggle="dropdown"
                                    id="navDrop">Atividades </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Cardapio.php">Cardápio</a>
                                    <a class="dropdown-item" href="Mesas.php">Mesas</a>
                                    <a class="dropdown-item" href="Estoque.php">Estoque</a>
                                    <a class="dropdown-item" href="Relatorio.php">Relatorio</a>
                                    <a class="dropdown-item" href="Perfil.php">Perfil</a>
                                    <a class="dropdown-item" href="Produtos.php">Cadastrar Produtos</a>
                                    <a class="dropdown-item" href="Funcionarios.php">Cadastrar Funcionario</a>
                                </div>
                            </li>
                        <form class="form-inline">
                        </ul>
                            <li>
                            <?php 
                               $nome = explode(" ", $_SESSION['nome']);
                               echo "<a href='#' class='nav-link'>Usuario Logado: <b>".$nome[0]."</b></a>";                            
                            ?>
                            </li>
                        </ul>
                            <div>
                                <a href="Logar.php"><img class="ml-2 d-block" src="img/sair.png" width="50px" height="50px" id="icone"></a>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
</nav>