@extends('layout')

@section('content')
<br><br>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-centered">Editar Cliente</h1>
                <div class="column">
                    <form method="post" action="{{ route('producto.update', $produ->id) }}">
                        @csrf
                        @method('PATCH')

                        {{ csrf_field() }}
                        <label>Nombre del Producto:</label>
                        <input class="input is-primary is-rounded" type="text" name="nombre_completo"
                            placeholder="Nombre del Producto" value="{{ $produ->nombre_completo }}">
                        <br>
                        <label>Cantidad:</label>
                        <input class="input is-primary is-rounded" type="text" name="cantidad" placeholder="Cantidad"
                            value="{{ $produ->cantidad }}">
                        <br>
                        <label>Precio de Compra:</label>
                        <input class="input is-primary is-rounded" type="text" name="precio_compra" placeholder="Precio de Compra"
                            value="{{ $produ->precio_compra }}">
                        <br>
                        <label>Precio de Venta:</label>
                        <input class="input is-primary is-rounded" type="text" name="precio_venta" placeholder="Precio de Venta"
                            value="{{ $produ->precio_venta }}">
                        <br>
                        <label>Tiempo de Producción:</label>
                        <input class="input is-primary is-rounded" type="text" name="tiempo_produccion" placeholder="Tiempo de Producción"
                            value="{{ $produ->tiempo_produccion }}">
                        <br>
                        <label>Estado Actual:</label>
                        <input class="input is-primary is-rounded" type="text" name="estado_actual" placeholder="Estado Actual"
                            value="{{ $produ->estado_actual }}">
                        <br><br>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <button class="button is-primary is-rounded">
                                    Guardar
                                    </a>
                            </p>
                            <p class="control">
                                <button class="button is-light is-rounded">
                                    Cancelar
                                    </a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </body>

    </html>
