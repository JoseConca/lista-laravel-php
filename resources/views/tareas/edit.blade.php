@extends('layouts.app')

@section('content')
    <h1>Editar Tarea</h1>
    <form action="{{ route('tareas.update', $tarea) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $tarea->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ $tarea->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection
