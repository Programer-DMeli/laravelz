@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>My-app</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <header>
            <h2 class="text-center">Suma de numeros</h2>
        </header>
        <main>
            <div class="container">
                <form action="/suma" method="POST">
                    @csrf
                    <label for="num1">Numero 1</label>
                    <input type="number" name="num1" value="{{ old('num1') }}">
                    <br>
                    <label for="num2">Numero 2</label>
                    <input type="number" name="num2" value="{{ old('num2') }}">
                    <br>
                    <input type="submit" value="Enviar">
                </form>
                <hr>
                {{-- Verificamos si existe el dato en la sesión --}}
                @if(session()->has('resultadosuma'))
                    <h2>El valor de la suma es: {{ session('resultadosuma') }}</h2>
                @endif

            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
@endsection