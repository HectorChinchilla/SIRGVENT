@extends ('layout')

@section('content')

<section class="hero is-medium">
    <div class="container is-widescreen">
        <br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Nuevo Registro de Cliente</h4>
                <div class="column">
                    <th><a href="{{ route('cliente.index') }}">Volver Atras</a></th>
                    <br><br>
                    <form method="post" action="{{ route('cliente.store')}}">
                        @csrf
                        <label>Nombre:</label>
                        <input class="input is-primary is-rounded" type="text" name="nombre_completo"
                            placeholder="Ingrese el nombre" minlength="4" maxlength="45">
                        <br>
                        <label>Dirección:</label>
                        <input class="input is-primary is-rounded" type="text" name="direccion"
                            placeholder="Ingrese la dirección" minlength="8" maxlength="60" required>
                        <br>
                        <label>Correo Electronico:</label>
                        <input class="input is-primary is-rounded" type="text" name="correo_electronico"
                            placeholder="Ingrese el correo electronico " minlength="8" maxlength="22" required>
                        <br>
                        <label>Teléfono:</label>
                        <input class="input is-primary is-rounded" type="text" name="telefono"
                            placeholder="Ingrese el teléfono " minlength="8" maxlength="22" required>
                        <br>
                        <label>Descripción:</label>
                        <input class="input is-primary is-rounded" type="text" name="descripcion"
                            placeholder="Ingrese la descripción " minlength="8" maxlength="120" required>
                        <br>
                        <label>Estado Actual:</label>
                        <input class="input is-primary is-rounded" type="number" name="estado_actual" placeholder="Ingrese el estado">
                        <br><br>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <button class="button is-primary is-rounded">
                                    Guardar
                            </p>
                            <p class="control">
                                <button href="{{ route('cliente.index') }}" class="button is-light is-rounded"
                                    type="reset">
                                    Cancelar
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    </form>
    </div>
</section>

@endsection
