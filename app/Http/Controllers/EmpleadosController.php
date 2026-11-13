<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    public function index()
    {
        $datos['empleados'] = Empleados::paginate(5);
        return view('empleados.index', $datos);
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $datosEmpleado = $request->except('_token');

        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleados::insert($datosEmpleado);
        return redirect('empleados');
    }

    public function edit($id)
    {
        $empleado = Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $datosEmpleado = $request->except(['_token', '_method']);

        if ($request->hasFile('Foto')) {
            $empleado = Empleados::findOrFail($id);
            Storage::delete('public/' . $empleado->Foto);
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleados::where('id', '=', $id)->update($datosEmpleado);
        return redirect('empleados');
    }

    public function destroy($id)
    {
        $empleado = Empleados::findOrFail($id);
        if (Storage::delete('public/' . $empleado->Foto)) {
            Empleados::destroy($id);
        } else {
            Empleados::destroy($id);
        }
        return redirect('empleados');
    }
}