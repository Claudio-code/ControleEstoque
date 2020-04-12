<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categoria;

class CategoriasController extends Controller
{
    public function index() {
        $Allcategorias = Categoria::all();

        return view('categorias', compact('Allcategorias'));
    }

    public function create() { return view('novaCategoria'); }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->name = $request->input('name');
        $categoria->save();
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
