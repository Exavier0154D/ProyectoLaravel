<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyectos::all();
        return view("index3", ['proyectos' => $proyectos]); 
    }

    public function create()
    {
        return view("new2"); 
    }

    public function store(Request $request)
    {
        Proyectos::create($request->all());
        return redirect('projects/')
            ->with('success', 'Proyecto creado satisfactoriamente');
    }

    public function show($id)
    {
        $proyecto = Proyectos::find($id);
        if (!$proyecto) {
            return abort(404, 'Proyecto no encontrado.');
        }
        return view('show', compact('proyecto')); 
    }

    public function edit($id)
    {
        $proyecto = Proyectos::find($id);
        if (!$proyecto) {
            return redirect('projects/')->with('error', 'Proyecto no encontrado para editar.');
        }
        return view("update", compact('proyecto')); 
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyectos::find($id);
        
        if (!$proyecto) {
            return redirect('projects/')->with('error', 'Proyecto no encontrado para actualizar.');
        }

        $proyecto->update($request->all());
        
        return redirect('projects/')
            ->with('success', 'Proyecto actualizado satisfactoriamente');
    }

    public function destroy($id)
    {
        $proyecto = Proyectos::find($id);

        if (!$proyecto) {
            return redirect('projects/')->with('error', 'Proyecto no encontrado para eliminar.');
        }

        $proyecto->delete();
        
        return redirect('projects/')
            ->with('success', 'Proyecto eliminado satisfactoriamente');
    }
}