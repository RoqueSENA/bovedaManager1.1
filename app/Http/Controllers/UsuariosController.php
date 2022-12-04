<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Pasa un arreglo de objetos a una vista
        $usuarios = Usuario::all();
        
        //dd($usuarios);
        
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios = Usuario::all();
        return view('usuarios.create', compact('usuarios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store()
    {
        $data = request()->validate([
            'codUser' => 'required',
            'nomUser' => 'required',
            'passUser' => 'required',
            'rolUser' => 'required'
        ]);
        
        Usuario::create($data);
        
        return back();


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


    public function validateData()
    {
        $data = request()->validate([
            'codUser' => 'required',
            'nomUser' => 'required',
            'passUser' => 'required',
            'rolUser' => 'required'
        ]);
        
        Usuario::create($data);
        
        return back();


    }
}
