@extends('layouts.formulario-master');
<title>Edicion de Citas</title>

@section('content')

    <h3>Formulario de Citas</h3>

    <div class="tab-nav">
        <a href="/home">Home</a>
        <label for="form-label">/ Formulario de Citas</label>
    </div>

    <form action="{{ route('citas', ['id' => $cita->codcit]) }}" method="POST">
        @csrf

        @method('PUT')

        @if (Session::get('success', false))
        @include('layouts.partials.messages')
          @endif
        
        <div class="mb-3">
            <label for="codsol">Solicitud</label>
            <input type="text" class="form-control" name="codsol" value="{{ $cita->codsol }}" readonly>
            @error('codsol')
            @include('layouts.partials.messages')
        @enderror
        </div>

        <div class="mb-3">
            <label for="codusu">Usuario</label>
            <input type="text" class="form-control" name="codusu" value="{{ $cita->codusu }}" readonly>
            @error('codusu')
            @include('layouts.partials.messages')
        @enderror
        </div>

        <div class="mb-3">
            <label for="fecha">Fecha</label>
            <input type="datetime-local" class="form-control" name="fecha" placeholder="Ingrese el fecha..." value="{{ $cita->fecha }}">
            @error('fecha')
            @include('layouts.partials.messages')
        @enderror
        </div>

        <div class="mb-3">
            <label for="descrip">Descripcion</label>
            <textarea class="form-control" name="descrip" rows="4" cols="50" placeholder="Descripcion..."> {{ $cita->descrip }} </textarea>
            @error('descrip')
            @include('layouts.partials.messages')
        @enderror
        </div>

        <div class="mb-3">
            <label for="estcit">Estado</label>
            <input type="text" class="form-control" name="estcit" value="{{ $cita->estcit }}" readonly>
        </div>

        <div class="button-group">
            <button type="reset" class="btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>
        </div>
        
    </form>
    
@endsection