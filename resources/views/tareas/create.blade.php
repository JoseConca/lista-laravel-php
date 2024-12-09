@extends('layouts.app')

@section('content')
    <h1>Nueva Tarea</h1>
    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
