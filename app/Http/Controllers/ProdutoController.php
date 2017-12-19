<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller{    
    public function index(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }
    
    public function getProduto($id){
        $Produto = Produto::find($id);
        return response()->json($Produto);
    }
    
    public function createProduto(Request $request){
//         $produto = Produto::create($request->all());
//         return response()->json($produto);
        $valor = $request->input('valor');
        $valor = str_replace(",", ".",$request->input('valor'));
        
        $produto = new Produto();
        $produto->descricao = $request->input('descricao');
        $produto->valor = $valor;
        $produto->status = $request->input('status');
        $produto->save();
        
        return response()->json($produto);
    }
    
    public function deleteProduto($id){
        $Produto = Produto::find($id);
        $Produto->delete();
        
        return response()->json('deleted');
    }
    
    public function updateProduto(Request $request,$id){
        $Produto  = Produto::find($id);
        $Produto->title = $request->input('descricao');
        $Produto->author = $request->input('valor');
        $Produto->isbn = $request->input('status');
        $Produto->save();
        
        return response()->json($Produto);
    }
}
