<!-- Templeades -->
@extends('layouts.app')
@section('content')
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    <body>
        <header>
            <h3 class="text-success text-center">Productos:  visualizacion</h3>
        </header>
        <main>
            <div class="container">
                <table class="table table-striped table-hover">
                    <thead class="table bg-primary text-white table-bordered table-success">
                        <tr>
                            <td class="fw-bold">Id</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Descripcion</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <th>{{$producto->id}}</th>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->descripcion}}</td>
                            </tr>
                            <!-- Finalizamos el template -->
                        @endforeach
                    </tbody>
                </table>
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    </body>
</html>
@endsection