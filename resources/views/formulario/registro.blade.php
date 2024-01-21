@extends('layouts.app')
@section('content')
<div>
    <!-- resources/views/registro/formulario.blade.php -->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Formulario de registro</h2>
                <form action="/registro" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nombre de Usuario:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Dirección de Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                        <button type="reset" class="btn btn-secondary">Borrar texto</button>
                        <a href="#" onclick="history.back(); return false;" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection