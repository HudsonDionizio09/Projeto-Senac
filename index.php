<!DOCTYPE html>
<?php 

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="icon " href="resources/img/icone-da-pagina.png">
    <title>Cadastro de Clientes</title>
</head>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cadastro de Clientes </a>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
</nav>
<body>
<div class="container"> <!--Início do container-->
<div class="row" style="margin-top: 50px;">
<form><!--Incio do Formulario-->
    <div class="form-group">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Digite o seu nome">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Sobrenome</label>
      <input type="password" class="form-control" id="sobrenome" placeholder="">
      <div class="form-group">
          <label for="dt_nasc">Data de Nascimento</label>
          <input type="date" id="dt_nasc" name="dt_nasc" class="form-control"/>
        </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf">
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
         <label class="form-check-label" for="inlineRadio1">Masculino</label>
      </div>
      <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Feminino</label>
      </div>
      <div class="row">
    <div class="col">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" placeholder="">
      
    </div>
    <div class="col">
      <label for="logradouro">Logradouro</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="form-group">
    				<label for="observacao">Obeservações</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            <br />
    </div>
</div>
  <div class="form-group col-md-6">
    <label for="inputState">Cidade</label>
      <select id="inputState" class="form-control">
        <option selected>Selecione</option>
			  <option value="nat">Natal</option>
				<option value="par">Parnamirim</option>
      </select>
      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="inputCity">Bairro</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-12">
    <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Selecione</option>
			  <option value="nat">Rio Grande do Norte</option>
      </select>
      <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group">
    <button type="button" class="btn btn-primary">Cadastrar</button><!--Butões-->
    <button type="button" class="btn btn-danger">Limpar</button>
</div>
</form><!--Fim do Formulario-->
</div> <!--Fim do container -->
</form>   
</body>
</html>