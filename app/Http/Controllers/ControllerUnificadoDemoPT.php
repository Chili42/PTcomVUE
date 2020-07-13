<?php

namespace App\Http\Controllers;
use Storage;

use Illuminate\Http\Request;

class ControllerUnificadoDemoPT extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTable()
    {
        $json = Storage::disk('local')->get('imoveis.json');
        $json = json_decode($json, true);
        foreach($json as $key => $item){
            
            unset($json[$key]["descricao"],$json[$key]["estado"]);
        $listaImoveis = json_encode($json);
        }
        return view('tabela-index' , compact('listaImoveis'));
    }
    public function indexTabelaExemplo()
    {
        return view('tabela-exemplo');
    }

    public function listaJson()
    {
     
        $json = Storage::disk('local')->get('imoveis.json');
        $json = json_decode($json, true);
        foreach($json as $key => $item){
            unset($json[$key]["descricao"]);
        $json_string_modified = json_encode($json);
     }
        return $json_string_modified;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
