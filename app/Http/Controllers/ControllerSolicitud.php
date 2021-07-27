<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;

class ControllerSolicitud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $soli = Solicitudes::get();
        return view('solicitudes.datables', compact('soli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('solicitudes.up');
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
        $request->validate([
            'folio' => 'required',
            'equipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'empresa' => 'required',
            'sucursal' => 'required',
            'usuariof' => 'required',
            'dptoarea' => 'required',
            'cantidad' => 'required'
        ]);

        $soli = new solicitudes();
       $soli->folio_requisición = $request->folio;
       $soli->equipo = $request->equipo;
       $soli->marca = $request->marca;
       $soli->modelo = $request->modelo;
       $soli->empresa = $request->empresa;
       $soli->sucursal = $request->sucursal;
       $soli->usuario_final = $request->usuariof;
       $soli->departamento_area = $request->dptoarea;
       $soli->cantidad = $request->cantidad;
        $soli->save();

        return redirect()->route('solicitud.index');
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
        $solicitud = solicitudes::find($id);
    
        return view('Solicitudes.show', compact('solicitud'));
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
    public function update(Request $request, Solicitudes $soli)
    {
        //
        $request->validate([
            'folio' => 'required',
            'equipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'empresa' => 'required',
            'sucursal' => 'required',
            'usuariof' => 'required',
            'dptoarea' => 'required',
            'cantidad' => 'required'
        ]);
      
       $soli->folio_requisición = $request->folio;
       $soli->equipo = $request->equipo;
       $soli->marca = $request->marca;
       $soli->modelo = $request->modelo;
       $soli->empresa = $request->empresa;
       $soli->sucursal = $request->sucursal;
       $soli->usuario_final = $request->usuariof;
       $soli->departamento_area = $request->dptoarea;
       $soli->cantidad = $request->cantidad;

        $soli->save();

        return redirect()->route('solicitud.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudes $solicitud)
    {
        //$solicitud = solicitudes::find($id);
        $solicitud->delete();
        return redirect()->route('solicitud.index');
    }
}
