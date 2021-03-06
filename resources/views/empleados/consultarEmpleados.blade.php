@extends('layouts.consulta-master')
<title>Consulta de Empleado</title>

@php
    $rol = auth()->user()->rol;
    use App\Models\tipo_empleados;
    use App\Models\posiciones_empleado;
@endphp

@section('content')
    @if($rol == 'Administrador')

    <h3>Consulta de Empleado</h3>

    <div class="tab-nav">
        <a href="/home">Home</a>
        <label for="form-label">/ Consulta de Empleado</label>
    </div>

    @if (Session::get('success', false))
        @include('layouts.partials.messages')
    @endif

    <div class="button-group">
        <button type="submit" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Print</button>
        <button type="reset" class="btn btn-warning"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
        <a href="{{ url('registrarEmpleados') }}" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Nuevo Empleado</a>
    </div>

    <table id="dataTable" class="table table-striped table-hover table-borderless align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono 1</th>
                <th>Telefono 2</th>
                <th>Direccion</th>
                <th>Correo</th>
                <th>Cedula/RNC</th>
                <th>Tip.Empleado</th>
                <th>Posicion</th>
                <th>Estado</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td scope="row">{{ $empleado->codemp }}</td>
                    <td>{{ $empleado->nomemp }}</td>
                    <td>{{ $empleado->apeemp }}</td>
                    <td>{{ $empleado->telem1 }}</td>
                    <td>{{ $empleado->telem2 }}</td>
                    <td>{{ $empleado->direccion }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->cedula }}</td>
                    @php
                        $tipo_emp = tipo_empleados::where('ctipemp',$empleado->ctipemp)->first();
                    @endphp
                    <td>{{ $tipo_emp->descripcion }}</td>
                    @php
                        $pos_emp = posiciones_empleado::where('codpos',$empleado->codpos)->first();
                    @endphp
                    <td>{{ $pos_emp->posicion }}</td> 
                    @if($empleado->estemp == 'inactivo')
                        <td><li class="btn btn-warning">{{ $empleado->estemp}}</li></td>
                    @elseif($empleado->estemp == 'activo')
                        <td><li class="btn btn-success">{{ $empleado->estemp}}</li></td>
                    @endif 
                      
                    
                    <td>
                        <a href="{{ route('empleados', ['id' => $empleado->codemp]) }}" class="btn btn-warning btn-editar"><i class="fas fa-file-edit"></i></a>
                        <a href="{{ route('inhabilitarEmpleado', ['id' => $empleado->codemp]) }}" class="btn btn-danger btn-editar"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    @else
        <h3>No puede acceder a esta pagina, retornar a <a href="/home">Home</a></h3>
    @endif
@endsection