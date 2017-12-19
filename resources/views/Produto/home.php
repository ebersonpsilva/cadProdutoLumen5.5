
<!-- View stored in resources/views/Produto/home.php -->
<html>  
<head>  
    <title>Produtos</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/js/produto/lista.js"></script>
</head>  
<body style="background-image: url('/img/{{$quote->background}}')">  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarColor01" style="margin-left: 50px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Lista de Produtos | <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/api/v1/cadastro">Novo Produto | </a>
      </li>
    </ul>
  </div>
</nav>
<div style="margin:20px auto;width:950px;">
	<div style="border-color:1px solid gray;">
		<h4>Rela&ccedil;&atilde;o de Produtos</h4>
	</div>
<table class="table table-hover" style="border: 1px solid #cdd;">
  <thead>
    <tr class="table-light">
      <th scope="col">ID</th>
      <th scope="col">DESCRICAO</th>
      <th scope="col">PRE&Ccedil;O</th>
      <th scope="col">STATUS</th>
      <th scope="col">A&Ccedil;&Atilde;O</th>
    </tr>
  </thead>
  <tbody id="rsLista">

  </tbody>
</table>
</div> 
</body>  
</html>