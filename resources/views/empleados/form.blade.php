<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" required>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" required>
    </div>
</div>

<div class="mb-3">
    <label for="Correo" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" required>
</div>

<div class="mb-3">
    <label for="Foto" class="form-label">Fotografía</label>
    @if(isset($empleado->Foto))
        <div class="mb-2">
            <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail" width="100" alt="Foto actual">
        </div>
    @endif
    <input type="file" class="form-control" name="Foto" id="Foto" accept="image/*">
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-success">{{ $modo }} datos</button>
    <a href="{{ url('empleados') }}" class="btn btn-secondary">Regresar</a>
</div>