<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cursos;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::all();
        return $cursos;
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
        $cursos = new Cursos();
        $cursos->nombre = $request->nombre;
        $cursos->fechaInicioCurso = $request->fechaInicioCurso;
        $cursos->fechaFinCurso = $request->fechaFinCurso;

        $cursos->save();
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
    public function update(Request $request)
    {
        $cursos = Cursos::findOrFail($request->id);
        $cursos->nombre = $request->nombre;
        $cursos->fechaInicioCurso = $request->fechaInicioCurso;
        $cursos->fechaFinCurso = $request->fechaFinCurso;

        $cursos->save();

        return $cursos;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cursos = Cursos::destroy($request->id);
        return $cursos;
    }
}
