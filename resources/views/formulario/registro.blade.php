@extends('layouts.app')
@section('content')

    <!-- resources/views/registro/formulario.blade.php -->
<div class="container" id="container">
        <div class="row justify-content-center" id="columna">
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
                        <input type="password" name="password" class="form-control" pattern=".{4}" title="La contraseña debe tener exactamente 4 caracteres" required>
                        <small>La contraseña debe tener exactamente 4 caracteres.</small>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <div class="text-center" id="Botonera">
                        <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                        <button type="reset" class="btn btn-secondary">Borrar texto</button>
                        <a href="#" onclick="history.back(); return false;" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
             // Validaciones del lado del cliente
            document.getElementById('registrationForm').addEventListener('submit', function (event) {
 
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('password_confirmation').value;
                let regex = /.{4}/;
                //let regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

                if (!regex.test(password)) {
                    alert('La contraseña debe tener al menos 4 caracteres de longitud.');
                    event.preventDefault(); // Evitar que se envíe el formulario si la validación falla
                    return;
                }
                if (password !== confirmPassword){
                    alert{'El Password y Confirmación de Password deben coincidir'};
                    event.preventDefault(); //Evita que se envíe el formulario si la validación falla
                }
            });
        });
    </script>
@endsection