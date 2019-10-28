@extends('layout')

@section('content')
<br><br>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-centered">Editar Cliente</h1>
                <div class="column">
                    <form method="post" action="{{ route('cliente.update', $cliente->id) }}">
                        @csrf
                        @method('PATCH')

                        {{ csrf_field() }}
                        <label>Nombre:</label>
                        <input class="input is-primary is-rounded" type="text" name="nombre_completo"
                            placeholder="Nombre Completo" value="{{ $cliente->nombre_completo }}">
                        <br>
                        <label>Dirección:</label>
                        <input class="input is-primary is-rounded" type="text" name="direccion" placeholder="Dirección"
                            value="{{ $cliente->direccion }}">
                        <br>
                        <label>Correo Electronico:</label>
                        <input class="input is-primary is-rounded" type="text" name="correo_electronico" placeholder="Correo Electronico"
                            value="{{ $cliente->correo_electronico }}">
                        <br>
                        <label>Teléfono:</label>
                        <input class="input is-primary is-rounded" type="text" name="telefono" placeholder="Teléfono"
                            value="{{ $cliente->telefono }}">
                        <br>
                        <label>Descripción:</label>
                        <input class="input is-primary is-rounded" type="text" name="descripcion" placeholder="Descripción"
                            value="{{ $cliente->descripcion }}">
                        <br>
                        <label>Estado Actual:</label>
                        <input class="input is-primary is-rounded" type="text" name="estado_actual" placeholder="Estado Actual"
                            value="{{ $cliente->estado_actual }}">
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
