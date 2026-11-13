@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center bg-white">
        <h4 class="mb-0">Lista de Empleados</h4>
        <a href="{{ url('empleados/create') }}" class="btn btn-primary">+ Nuevo Empleado</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail rounded" width="70" alt="Foto">
                        </td>
                        <td>{{ $empleado->Nombre }}</td>
                        <td>{{ $empleado->ApellidoPaterno }}</td>
                        <td>{{ $empleado->ApellidoMaterno }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td class="text-center">
                            <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres borrar este registro?')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection