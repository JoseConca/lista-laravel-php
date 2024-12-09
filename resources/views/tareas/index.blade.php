@extends('layouts.app')

@section('content')
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">Nueva Tarea</a>

    <ul class="list-group">
        @foreach ($tareas as $tarea)
            <li class="list-group-item">
                <strong>{{ $tarea->titulo }}</strong>
                <p>{{ $tarea->descripcion }}</p>
                <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
