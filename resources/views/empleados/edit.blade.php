@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Editar Empleado</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('empleados.form', ['modo' => 'Guardar'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection