<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ControllerItem extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getItem = Item::all();
        return $getItem;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $creatItem = Item::create($request->all());
        if($creatItem){
            return response()->json([
                'mensagem'=>'Item adicionado com sucesso'
            ], 200);
        }
        return response()->json([
             'erro'=>'Erro :c'
        ],404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $getIdItem = Item::find($id);
        if($getIdItem){
           //pegando o testamento com os livros pela n:1
           $response = [
              'Item' => $getIdItem,
              'Mesa'=> $getIdItem->mesa
           ];
            return $getIdItem;
          }
          return response()->json([
             'message' => 'Algo deu errado :('
            ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateItem = Item::find($id);
        if($updateItem){
            $updateItem->update($request->all());
            return $updateItem;
        }
        return response()->json([
                'erro'=>'error :c'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delItem = Item::destroy($id);
        if($delItem){
            return response()->json([
                'mensagem'=>'item excluido'
            ], 202);
        }
        return response()->json([
            'erro'=>'error'
        ], 401);
    }
}
