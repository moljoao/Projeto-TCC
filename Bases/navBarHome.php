 <!-- NAV-BAR HOME -->
 <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" style="background-color:#F4FA58;"  >
            <div class="sidebar-header bg-dark">
                <h3>Planeta AÇAI</h3>
            </div>

            <ul class="list-unstyled components">
               
                <li >
                <a class="waves-effect waves-light btn purple"  href="Home.php">HOME</a>
                    
                <li>
                
                <a class="waves-effect waves-light btn purple"  href="Cardapio.php">Cardápio</a>

               <li>
                <a class="waves-effect waves-light btn purple"  href="Mesas.php">Mesas</a>
                <li>
                <a class="waves-effect waves-light btn purple"  href="Estoque.php">Estoque</a>
                <li>
                <a class="waves-effect waves-light btn purple"  href="Relatorio.php">Relatorio</a>
                <li>
                <a class="waves-effect waves-light btn purple"  href="Estoque .php">Estoque</a>
                <li>
                <a class="waves-effect waves-light btn purple"  href="Perfil.php">Perfil</a>
                <li>
                <a class="waves-effect waves-light btn purple" href="Produtos.php">Cadastrar Produtos</a>
                <li>
                <a class="waves-effect waves-light btn purple"  href="Funcionarios.php">Cadastrar Funcionario</a>

                <form class="form-inline">
                
                
                </ul>
                            <li style="color:black;"  >
                            <?php 
                               $nome = explode(" ", $_SESSION['nome']);
                               echo "<a href='#' class='nav-link'>Usuario Logado: <b>".$nome[0]."</b></a>";                            
                            ?>
                            </li>



                            <br<<br><br><br>   <br<<br><br><br>   <br<<br><br><br>
                            
                            <center>
                            <div>
                                <a href="Logar.php"><img class="ml-2 d-block" src="img/sair.png" width="60px" height="60px" id="icone"></a>
                                    </div>
</center>
                       
                       
                        </ul>
               
     
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Planeta AÇAI</a>
                            </li>
                         
                        
                        </ul>
                    </div>
                </div>
            </nav>