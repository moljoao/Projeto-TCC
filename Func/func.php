<div class="container bg-light my-5 mb-3">
        <div class="row">
        <div class="col-sm-6 ml-5 mr-5 my-5">
                <h1 class="display-4">Cadastrar<br> Funcionarios.</h1>
                <br>
                <hr>
                <h1 class="display-4">Planeta Açaí.</h1>
                <hr>
            </div>
        <div class="col-sm-4 ml-5 esquerdo my-5">  
    <form action="Func/cadastroFuncionarios.php" method="POST" id="cadastro" enctype='multipart/form-data'>
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
                        <div class="form-group col-sm-6">
                            <label>Seu Nome</label>
                            <input type="text" class="form-control" name="NomeFunc" placeholder="Nome">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>UserName</label>
                            <input type="text" class="form-control" name="UserNameFunc" placeholder="UserName">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="EmailFunc" placeholder="E-mail">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Senha</label>
                            <input type="text" class="form-control" name="SenhaFunc" placeholder="Senha">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Confirmar Senha</label>
                            <input type="text" class="form-control" name="Senhaconf" placeholder="Confirmar Senha">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>CPF</label>
                            <input type="text" class="form-control" name="CPFFUNC" placeholder="___.___.___.__">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Telefone Fixo</label>
                            <input type="text" class="form-control" name="TelFixoFunc" placeholder="(__)____-____">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Telefone Celular</label>
                            <input type="text" class="form-control" name="TelCelFunc" placeholder="(__)_____-____">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Telefone Celular</label>
                            <input type="text" class="form-control" name="TelCelFunc2" placeholder="(__)_____-____">
                        </div>
                    </div>
                    <div class="form-group">
                            <label>Tipo de Usuario</label>
                            <select name="tipoFunc" class="form-control">
                                <option selected>Escolha</option>
                                <option value="cliente"> Cliente</option>
                                <option value="funcionario"> Funcionario</option>
                                <option value="administracao"> administracao</option>
                            </select> 
                        </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Seu Endereço</label>
                            <input type="text" class="form-control" name="EndFunc" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Sua Cidade</label>
                            <input type="text" class="form-control" name="CidFunc" placeholder="Cidade">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Seu Estado</label>
                            <select name="EstFunc" class="form-control">
                                <option selected>Escolha</option>
                                <option value="Acre (AC) - Rio Branco."> Acre (AC) - Rio Branco.</option>
                                <option value="Alagoas (AL) - Maceió"> Alagoas (AL) - Maceió</option>
                                <option value="Amapá (AP) - Macapá"> Amapá (AP) - Macapá</option>
                                <option value="Amazonas (AM) - Manaus"> Amazonas (AM) - Manaus</option>
                                <option value="Bahia (BA) - Salvador"> Bahia (BA) - Salvador</option>
                                <option value="Ceará (CE) - Fortaleza"> Ceará (CE) - Fortaleza</option>
                                <option value="Distrito Federal (DF) - Brasília"> Distrito Federal (DF) - Brasília</option>
                                <option value="Espírito Santo (ES) - Vitória"> Espírito Santo (ES) - Vitória</option>
                                <option value="Goiás (GO) - Goiânia"> Goiás (GO) - Goiânia</option>
                                <option value="Maranhão (MA) - São Luís"> Maranhão (MA) - São Luís</option>
                                <option value="Mato Grosso (MT) - Cuiabá"> Mato Grosso (MT) - Cuiabá</option>
                                <option value="Mato Grosso do Sul (MS) - Campo Grande"> Mato Grosso do Sul (MS) - Campo Grande</option>
                                <option value="Minas Gerais (MG) - Belo Horizonte"> Minas Gerais (MG) - Belo Horizonte</option>
                                <option value="Pará (PA) - Belém"> Pará (PA) - Belém</option>
                                <option value="Paraíba (PB) - João Pessoa"> Paraíba (PB) - João Pessoa</option>
                                <option value="Paraná (PR) - Curitiba"> Paraná (PR) - Curitiba</option>
                                <option value="Pernambuco (PE) - Recife"> Pernambuco (PE) - Recife</option>
                                <option value="Piauí (PI) - Teresina"> Piauí (PI) - Teresina</option>
                                <option value="Rio de Janeiro (RJ) - Rio de Janeiro"> Rio de Janeiro (RJ) - Rio de Janeiro</option>
                                <option value="Rio Grande do Norte (RN) - Natal"> Rio Grande do Norte (RN) - Natal</option>
                                <option value="Rio Grande do Sul (RS) - Porto Alegre"> Rio Grande do Sul (RS) - Porto Alegre</option>
                                <option value="Rondônia (RO) - Porto Velho"> Rondônia (RO) - Porto Velho</option>
                                <option value="Roraima (RR) - Boa Vista"> Roraima (RR) - Boa Vista</option>
                                <option value="Santa Catarina (SC) - Florianópolis"> Santa Catarina (SC) - Florianópolis</option>
                                <option value="São Paulo (SP) - São Paulo"> São Paulo (SP) - São Paulo</option>
                                <option value="Sergipe (SE) - Aracaju"> Sergipe (SE) - Aracaju</option>
                                <option value="Tocantins (TO) - Palmas"> Tocantins (TO) - Palmas</option>
                            </select>
                        </div>
                        <div class="form-goup col-sm-2">
                            <label>Seu CEP</label>
                            <input type="text" name="CEPFUNC" class="form-control" placeholder="CEP">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Desejo Receber Notificação no
                                    E-mail.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="col-sm-6 btn btn-outline-success mb-4">Cadastrar</button>
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
