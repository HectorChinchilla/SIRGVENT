@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
</div>

@endif
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">
                Sirgvent Tu Mejór Opción Para Registro de Clientes y Gestión de Ventas !!
            </h1>
        </div>
    </div>
</section>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <td><a href="{{ route('producto.create') }}">Registrar Producto</a></td>
        <br><br>
        <br><br><br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Lista de Productos</h4>
                <div class="column">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>Nombre del Producto</th>
                                <th>Cantidad</th>
                                <th>Precio de Compra</th>
                                <th>Precio de Venta</th>
                                <th>Tiempo de Producción</th>
                                <th>Estado Actual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produ as $productos)
                            <tr>
                                <td>{{ $productos->nombre_completo }}</td>
                                <td>{{ $productos->cantidad }}</td>
                                <td>{{ $productos->precio_compra }}</td>
                                <td>{{ $productos->precio_venta }}</td>
                                <td>{{ $productos->tiempo_produccion }}</td>
                                <td>{{ $productos->estado_actual }}</td>

                                <td><a class="button is-primary"
                                        href="{{ route('producto.show', $productos->id) }}">Detalle</a></td>
                                <td>
                                    <form method="post" action="{{ route('producto.destroy', $productos->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input class="button is-danger" type="submit" value="Borrar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
</section>
@endsection
