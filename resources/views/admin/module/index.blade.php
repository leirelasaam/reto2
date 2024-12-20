@extends('layouts.app')

@php
    $user = Auth::user();
@endphp

@section('content')
<div class="container">
    <h2>Modulos</h2>
    <table class="table table-hover">
        <thead>
            <tr class="text-uppercase table-dark">
                <th scope="col"></th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Horas</th>
                <th scope="col">Curso </th>
                <th scope="col">Ciclo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modules as $module)
                <tr >
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{$module->code}}</td>
                    <td>{{$module->name}}</td>
                    <td>{{$module->hours}}</td>
                    <td>{{$module->course}}</td>
                    
                    <td><a href="{{route('admin.modules.show', $module)}}" class="btn btn-secondary btn-sm">
                            Ver
                        </a>
                        <a href="#" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <!-- Para generar un modal diferente siempre, se debe incluir el id --> 
                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalUsuario{{ $user->id }}"
                            data-user-id="{{ $user->id }}">
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Paginación -->
    <div>
        {!! $modules->links('vendor.pagination.bootstrap-5') !!}
    </div>
</div>
@endsection