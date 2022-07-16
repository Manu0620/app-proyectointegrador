@extends('layouts.formulario-master')
<title>Registro de Empleados</title>

@section('content')

<h3>Formulario de Empleados</h3>

    <div class="tab-nav">
        <a href="/home">Home</a>
        <label for="form-label">/ Formulario de Empleados</label>
    </div>

    <form action="/registrarEmpleados" method="POST">
        @csrf

        @if (Session::get('success', false))
        @include('layouts.partials.messages')
             @endif

        <div class="mb-3">
            <label for="nomemp">Nombre </label>
            <input type="text" class="form-control" name="nomemp" placeholder="Ingrese el nombre...">
            @error('nomemp')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="apeemp">Apellido</label>
            <input type="text" class="form-control" name="apeemp" placeholder="Ingrese el apellido...">
            @error('apeemp')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="telem1">Teléfono 1</label>
            <input type="text" class="form-control" name="telem1" placeholder="Ingrese el teléfono 1...">
            @error('telem1')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="telem2">Teléfono 2</label>
            <input type="text" class="form-control" name="telem2" placeholder="Ingrese el teléfono 2...">
            @error('telem2')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección...">
            @error('direccion')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="correo">Correo Electrónico</label>
            <input type="text" class="form-control" name="correo" placeholder="Ingrese el correo electrónico...">
            @error('correo')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="cedula">Cédula/RNC</label>
            <input type="text" class="form-control" name="cedula" placeholder="Ingrese la cédula/RNC...">
            @error('cedula')
                @include('layouts.partials.messages')
            @enderror
        </div>

        <div class="mb-3">
            <label for="ctipemp">Tipo de Empleado</label>
<<<<<<< HEAD
            <select class="form-select" name="ctipemp">
                <option selected>Selecciona el Tipo de Empleado...</option>
                <option value="1">Fijo</option>
                <option value="2">Temporal</option>
            </select>
=======
            <select class="form-select" id="ctipemp" name="ctipemp" value="{{ old('ctipemp') }}">
                <option selected disabled>Seleccione el tipo de empleado...</option>
                @foreach ($tipo_empleados as $tipo_empleado)
                    <option value="{{ $tipo_empleado->ctipemp}}" {{ (old('$tipo_empleado') == $tipo_empleado->ctipemp) ? 'selected' : ''}}>{{$tipo_empleado->descripcion}}</option>
                @endforeach
            </select>    
>>>>>>> 6eef6117978ac53223d2555d751042804105a8b0
           
        </div>
        <div class="mb-3">
            <label for="codpos">Posicion</label>
            <select class="form-select" name="codpos">
                <option selected>Selecciona el tipo de posicion...</option>
                <option value="1">Tecnico</option>
            </select>
           
        </div>

        <input type="hidden" class="form-control" name="estemp" value="1">

        <div class="button-group">
            <button type="reset" class="btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>
        </div>
        
    </form>


@endsection