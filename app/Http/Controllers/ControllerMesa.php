<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mesa;
use Illuminate\Http\Request;

class ControllerMesa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getMesa = Mesa::all();
        return $getMesa;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $creatMesa = Mesa::create($request->all());
        if($creatMesa){
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

        $getIdMesa = Mesa::find($id);
        if($getIdMesa){
           //pegando o testamento com os livros pela n:1
           $response = [
              'Mesa' => $getIdMesa,
              'Item'=> $getIdMesa->item
           ];
            return $getIdMesa;
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
        $updateMesa = Mesa::find($id);
        if($updateMesa){
            $updateMesa->update($request->all());
            return $updateMesa;
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
        $delMesa = Mesa::destroy($id);
        if($delMesa){
            return response()->json([
                'mensagem'=>'item excluido'
            ], 202);
        }
        return response()->json([
            'erro'=>'error'
        ], 401);
    }
}
