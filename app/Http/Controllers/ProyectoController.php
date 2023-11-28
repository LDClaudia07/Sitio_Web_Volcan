<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Proyectos['Proyectos'] = Proyecto::paginate(5);
        return view('Proyectos.index', $Proyectos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Proyecto =request()->except('_token');
        $request->validate([
            'nombre'=>'required', 'descripcion'=>'required','precio'=>'required','imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'  
        ]);

        $Proyecto = $request->all();
        if($imagen=$request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProyecto = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProyecto);
            $Proyecto['imagen']= "$imagenProyecto";
        }
        Proyecto::create($Proyecto);
        return redirect()->route('Proyectos.index');
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
    public function edit($id)
    {
        //
        //$proyecto = Proyecto::find($id);
        $Proyecto=Proyecto::find($id);
        return view('Proyectos.edit', compact('Proyecto'));

        //return view('Proyectos.edit', compact('empleado') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $Producto = request()->except(['_token','_method']);
        Proyecto::where('id', '=', $id)->update($Producto);

        $Proyecto=Proyecto::find($id);
        return view('Proyectos.edit', compact('Proyecto'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Proyecto::destroy($id);
        return redirect()->route('Proyectos.index');
    }
}
