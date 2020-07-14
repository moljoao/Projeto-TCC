    $(function(){
    $('#testar').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroEmail"){
                    var titulo = document.getElementById("usuario");
                    titulo.className = "form-control col-12 is-invalid";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "invalid-feedback erro d-block col-12";
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("usuario");
                    titulo.className = "form-control col-12";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "invalid-feedback erro d-none col-12";
                }
                if(data == "ErroSenha"){
                    var titulo = document.getElementById("password");
                    titulo.className = "form-control col-12 is-invalid";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback erro d-block col-12";
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("password");
                    titulo.className = "form-control col-12";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback erro d-none col-12";       
                }
                if(data == "sucessoCliente"){
                    window.location.replace("Cliente.php");
                }
                else if(data == "sucessoADM"){
                    window.location.replace("Home.php");
                }
                else if(data == "FalhaLogin"){
                    usuario.className = "text-danger form-control";
                    senha.className = "text-danger form-control";

                    errLogin.innerHTML = "<p>Usuario ou senha incorreto</p>"
                }
            },
        });
        return false;
    });
});

$(function(){
    $('#cadProduto').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'), 
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroNome"){
                    $('#mensagem').text("Campo nome vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroDesc"){
                    $('#mensagem').text("Campo descrição vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroPreco"){
                    $('#mensagem').text("Campo preço vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroEstoque"){
                    $('#mensagem').text("Digite a quantidade em estoque do produto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroSalvar"){
                    $('#mensagem').text("Não foi possível salvar a imagem!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroFormato"){
                    $('#mensagem').text("A imagem não está em um formato correto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroImgVazio"){
                    $('#mensagem').text("Por favor, selecione uma imagem para o produto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroBanco"){
                    $('#mensagem').text("Não foi possível cadastrar o produto. Contate o suporte!");
                    $('#vazio').modal('show');
                }
                if(data == "Sucesso"){
                    $('#mensagem').text("Cadastro realizado com sucesso!");
                    $('#vazio').modal('show');
                    setTimeout(function(){ location.reload(); }, 2500);
                }

                
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora