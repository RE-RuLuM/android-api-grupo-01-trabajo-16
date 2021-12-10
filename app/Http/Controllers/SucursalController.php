<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Sucursal::all());
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal();

        $sucursal->DireccionSucursal = $request->input('DireccionSucursal');
        $sucursal->TelefonoSucursal = $request->input('TelefonoSucursal');
        $sucursal->LatitudSucursal = $request->input('LatitudSucursal');
        $sucursal->LongitudSucursal = $request->input('LongitudSucursal');

        $sucursal->save();

        return response()->json($sucursal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::find($id);

        return response()->json($sucursal);
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
        $sucursal = new Sucursal();

        $sucursal->DireccionSucursal = $request->input('DireccionSucursal');
        $sucursal->TelefonoSucursal = $request->input('TelefonoSucursal');
        $sucursal->LatitudSucursal = $request->input('LatitudSucursal');
        $sucursal->LongitudSucursal = $request->input('LongitudSucursal');

        $sucursal->save();

        return response()->json($sucursal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::find($id);

        $sucursal->delete();

        return response()->json($sucursal);
    }
}
