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
        <td><a href="{{ route('cliente.create') }}">Registrar Cliente</a></td>
        <br><br>
        <br><br><br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Lista Clientes</h4>
                <div class="column">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Correo Electronico</th>
                                <th>Teléfono</th>
                                <th>Descripción</th>
                                <th>Estado Actual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente as $clientes)
                            <tr>
                                <td>{{ $clientes->nombre_completo }}</td>
                                <td>{{ $clientes->direccion }}</td>
                                <td>{{ $clientes->correo_electronico }}</td>
                                <td>{{ $clientes->telefono }}</td>
                                <td>{{ $clientes->descripcion }}</td>
                                <td>{{ $clientes->estado_actual }}</td>

                                <td><a class="button is-primary"
                                        href="{{ route('cliente.show', $clientes->id) }}">Detalle</a></td>
                                <td>
                                    <form method="post" action="{{ route('cliente.destroy', $clientes->id) }}">
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
