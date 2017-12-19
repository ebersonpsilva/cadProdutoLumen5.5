<!-- View stored in resources/views/Produto/cadastro.php -->
<html>
<head>
<title>Cadastro de Produtos</title>
<link href="/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/produto/novo.js"></script>
</head>
<body style="background-image: url('/img/{{$quote->background}}')">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="collapse navbar-collapse" id="navbarColor01" style="margin-left: 50px;">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="/api/v1" id="lProtudo">Lista de Produtos |</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#">Novo Produto | <span class="sr-only">(current)</span> </a>
</li>
</ul>
</div>
</nav>
<div style="margin:20px auto;width:950px;">
<div style="border-color:1px solid gray;">
<h4>Cadastro de Produtos</h4>
</div>
<table class="table table-hover" style="border: 1px solid #cdd;">
<thead>
<tr>
<td>
    <form id="cadProduto">
        <div class="form-group row">
        	<div class="col-sm-10" id="msg">
        		
        	</div>
        </div>
        <div class="form-group">
          <label for="lblDescricao">Descricao</label>
          <input class="form-control" id="txtDescricao" name="descricao" type="text" placeholder="Digite uma descri&ccedil;&atilde;o">
        </div>
        <div class="form-group">
          <label for="lblValor">Valor</label>
          <input class="form-control" id="txtValor" name="valor" type="text" placeholder="Valor do Produto">
        </div>
        <div class="form-group">
          <label for="lblStatus">Status</label>
          <select class="form-control" id="cmbStatus" name="status">
            <option value="">---SELECIONE O STATUS-----</option>
            <option value="0">Inativo</option>
            <option value="1">Ativo</option>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</td>
</tr>
</thead>
</table>
</div>
</body>
</html>