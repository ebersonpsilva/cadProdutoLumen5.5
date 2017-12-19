
<!-- View stored in resources/views/produto.php -->
<html>  
<head>  
    <title>Produtos</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>  
<body style="background-image: url('/img/{{$quote->background}}')">  
<div class="container">  

    <div class="quote-container">
        <p class="text">{{$produto->nome}}</p>
        <p class="author">— {{$produto->preco}}</p>
    </div>
    <div class="quote-container">
        <p class="text"><?php echo $name?></p>
        <p class="author">— {{$produto->preco}}</p>
    </div>
</div>  
</body>  
</html>