<?php
    
    # app/Http/routes.php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
// //     return $router->app->version();
    
//     $count = Produto::query()->get()->count();    
//     $day = (int)date('z');    
//     $page = $day % $count + 1;    
//     $produtos = Produto::query()->get()->forPage($page, 1)->all();
    
//     if (empty($produtos)) {
//         throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
//     }
    
//     return view('produto', ['produto' => $produtos[0]]);
// });
//     $router->get('/{id}', function($id) use ($router) {
//         $produto = Produto::query()->findOrFail($id);
//         return view('produto', ['produto' => $produto]);
//     });
    
//         $router->get('/teste', function ()  {
//             return view('Produto/produto', ['name' => 'James']);
//         });
//-------------------------------------------------------------------------------///
//Paginas de navegação
$router->get('api/v1',function(){
   return view('Produto/home');
});
$router->get('api/v1/cadastro',function(){
    return view('Produto/cadastro');
});
//Controller de Produto
$router->group(['prefix' => 'api/v1'],function($router){
    $router->get('produto','ProdutoController@index');//Metodo que solicita lista de dados do banco
    $router->get('produto/{id}','ProdutoController@getproduto');//Metodo que solicita apenas um dado do banco
    $router->post('produto','ProdutoController@createProduto');//Metodo que solicita a gravação de dados no banco
    $router->put('produto/{id}','ProdutoController@updateProduto');//Metodo que solicita a gravação das alterações de dados no banco
    $router->delete('produto/{id}','ProdutoController@deleteProduto');//Metodo que solicita a exclusão dos dados no banco
});

