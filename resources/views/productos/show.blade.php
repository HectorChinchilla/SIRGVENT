@extends('layout')

@section('content')
<br><br>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <h1 class="title">Detalle del Producto</h1>
        <dl>
            <dt>Nombre del Producto:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->nombre_completo }}</dd>
            <br>
            <dt>Cantidad:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->cantidad }}</dd>
            <br>
            <dt>Precio de Compra:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->precio_compra }}</dd>
            <br>
            <dt>Precio de Venta:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->precio_venta }}</dd>
            <br>
            <dt>Tiempo de Producción:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->tiempo_produccion }}</dd>
            <br>
            <dt>Estado Actual:</dt>
            <dd class="input is-primary is-rounded">{{ $produ->estado_actual }}</dd>
            <br>
        </dl>
        <br>
        <div class="field is-grouped is-grouped-centered">
            <p class="control">
                <th><a class="button is-light is-rounded" href="{{ route('producto.index') }}">Atras</a>
                <td><a class="button is-primary is-rounded" href="{{ route('producto.edit', $produ->id) }}">Editar</a>
                </td>

        </div>
</section>
@endsection
