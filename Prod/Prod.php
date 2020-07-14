<div class="zero mb-5 my-5">texto</div>
<div class="container bg-light my-5 mb-3">
        <div class="row">
        <div class="col-sm-6 ml-5 mr-5 my-5">
                <h1 class="display-4">Cadastrar<br> Produtos.</h1>
                <br>
                <hr>
                <h1 class="display-4">Planeta Açaí.</h1>
                <hr>    
            </div>
        <div class="col-sm-4 ml-5 esquerdo my-5">  
    <form action="Prod/cadastroProdutos.php" method="POST" id="cadProduto" enctype='multipart/form-data'>
    <div id="imagem">
        <img class='ml-5 image' src='img/baixar.png'>
    </div>
    <div class="form-row">
        <input type='file' accept='img/*' id='arquivo' name='arquivo' class='my-2'>
    </div>
        </div> 
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-11">
                    <div class="form-row">
                        <div class="form-group col-sm-10">
                            <label >Nome do Produto</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome do Produto">
                        </div>
                        <div class="form-group col-sm-2">
                            <label>Preço</label>
                            <input type="text" class="form-control" name="preco" placeholder="Preço">
                        </div>
                        <div class="form-group col-sm-8">
                            <label >Descrição do Produto</label>
                            <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="unidade">Tipo de Produto</label>
                            <select name="tipo" class="form-control">
                                <option selected>Escolha</option>
                                <option value="1"> Crepe</option>
                                <option value="2"> pastel</option>
                                <option value="3"> Churros</option>
                                <option value="4"> porcao</option>
                                <option value="5"> caldos</option>
                                <option value="6"> bebidas</option>
                            </select>
                        </div>
                       
                        <div class="col-sm-12 my-2 mx-auto">
                            <div class="custom-control form-control-lg custom-checkbox">
                                <input type="checkbox" class="custom-control-input mt-2" id="customCheck1" name="ativo" checked>
                                <label class="ml-2 custom-control-label" for="customCheck1">Ativar produto?</label>
                            </div>
                        </div>
                        <br>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" value="Cadastrar" name="cadastro" id="Cadastrar" class="btn btn-outline-success ml-2 mb-4">Cadastrar Produto</button>
                            <a tabindex="0" class="btn btn btn-outline-danger ml-2 mb-4" role="button" data-toggle="popover"
                                data-placement="right" title="um titulo aqui n sei pra q" data-content=" adicione isso no codigo para causar um efeito diferente
                                (data-trigger='focus') mas mude as aspas">Ajuda</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
