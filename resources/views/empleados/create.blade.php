@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Registrar Nuevo Empleado</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('empleados.form', ['modo' => 'Crear'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection