@extends('layout')

@section('content')
<br><br>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <h1 class="title">Detalle de Cliente</h1>
        <dl>
            <dt>Nombre:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->nombre_completo }}</dd>
            <br>
            <dt>Dirección:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->direccion }}</dd>
            <br>
            <dt>Correo Electronico:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->correo_electronico }}</dd>
            <br>
            <dt>Teléfono:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->telefono }}</dd>
            <br>
            <dt>Descripción:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->descripcion }}</dd>
            <br>
            <dt>Estado Actual:</dt>
            <dd class="input is-primary is-rounded">{{ $cliente->estado_actual }}</dd>
            <br>
        </dl>
        <br>
        <div class="field is-grouped is-grouped-centered">
            <p class="control">
                <th><a class="button is-light is-rounded" href="{{ route('cliente.index') }}">Atras</a>
                <td><a class="button is-primary is-rounded" href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
                </td>

        </div>
</section>
@endsection
