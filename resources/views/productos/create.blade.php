@extends ('layout')

@section('content')

<section class="hero is-medium">
    <div class="container is-widescreen">
        <br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Nuevo Registro de Producto</h4>
                <div class="column">
                    <th><a href="{{ route('producto.index') }}">Volver Atras</a></th>
                    <br><br>
                    <form method="post" action="{{ route('producto.store')}}">
                        @csrf
                        <div>
                        <label>Nombre del Producto:</label>
                        <input class="input is-primary is-rounded" type="text" name="nombre_completo"
                            placeholder="Ingrese el nombre" minlength="4" maxlength="60">
                        </div>
                        <div>
                        <label>Cantidad:</label>
                        <input class="input is-primary is-rounded" type="number" name="cantidad"
                            placeholder="Ingrese la cantidad" minlength="8" maxlength="60" required>
                        </div>
                        <div>
                        <label>Precio de Compra:</label>
                        <input class="input is-primary is-rounded" type="number" name="precio_compra"
                            placeholder="Ingrese el precio de compra" minlength="2" maxlength="8" required>
                        </div>
                        <div>
                        <label>Precio Venta:</label>
                        <input class="input is-primary is-rounded" type="number" name="precio_venta"
                            placeholder="Ingrese el precio de venta" minlength="2" maxlength="8" required>
                        </div>
                        <div>
                        <label>Tiempo de Producción:</label>
                        <input class="input is-primary is-rounded" type="text" name="tiempo_produccion"
                            placeholder="Ingrese el tiempo de producción" minlength="4" maxlength="60" required>
                        </div>
                        <div>
                        <label>Estado Actual:</label>
                        <input class="input is-primary is-rounded" type="number" name="estado_actual" placeholder="Ingrese el estado">
                        </div>
                        <hr>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <button class="button is-primary is-rounded">
                                    Guardar
                            </p>
                            <p class="control">
                                <button href="{{ route('producto.index') }}" class="button is-light is-rounded"
                                    type="reset">
                                    Cancelar
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
