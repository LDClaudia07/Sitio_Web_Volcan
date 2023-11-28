<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Galerias['Galerias'] = Galeria::paginate(5);
        return view('Galerias.index', $Galerias);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Galerias/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$Proyecto =request()->except('_token');
        $Galeria = request()->except('_token');
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,svg|max:1024'  
        ]);

        $Galeria = $request->all();
        if($foto=$request->file('foto')){
            $rutaGuardarFoto = 'imagen_galeria/';
            $fotoGaleria = date('YmdHis').".".$foto->getClientOriginalExtension();
            $foto -> move($rutaGuardarFoto, $fotoGaleria);
            $Galeria['foto'] = "$fotoGaleria";
        }
        Galeria::create($Galeria);
        return redirect()->route('Galerias.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Galeria::destroy($id);
        return redirect()->route('Galerias.index');

    }
}
