<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales=Editorial::all();
        return $editoriales;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorial=new Editorial();
        $editorial->codigo_editorial=$request->codigo_editorial;
        $editorial->nombre_editorial=$request->nombre_editorial;
        $editorial->contacto=$request->contacto;
        $editorial->telefono=$request->telefono;
        $editorial->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editorial=Editorial::find($id);
        return $editorial;
    }

    public function details($code)
    {
        $editorial=Editorial::where('codigo_editorial',$code)->get();
        return $editorial;
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
        $editorial=Editorial::find($request->id);
        $editorial->codigo_editorial=$request->codigo_editorial;
        $editorial->nombre_editorial=$request->nombre_editorial;
        $editorial->contacto=$request->contacto;
        $editorial->telefono=$request->telefono;
        $editorial->save();
        return $editorial;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editorial=Editorial::destroy($id);
        return $editorial;
    }
}
