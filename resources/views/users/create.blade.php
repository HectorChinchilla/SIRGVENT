@extends ('home')

@section('content')

<section class="hero is-medium">
    <div class="container is-widescreen">
        <br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Nuevo registro Posición Empleado</h4>
                <div class="column">
                    <th><a href="{{ route('usuario.index') }}">Atrás</a></th>
                    <br><br>
                    <form method="post" action="{{ route('usuario.store')}}">
                        @csrf
                        <div>
                            <label>Nombre:</label>
                            <input class="input is-primary is-rounded" type="text" name="name"
                                placeholder="Ingrese el nombre" minlength="4" maxlength="60">
                        </div>
                        <div>
                            <label>Correo Electronico:</label>
                            <input class="input is-primary is-rounded" type="text" name="email"
                                placeholder="Correo Electronico" minlength="12" maxlength="45">
                        </div>
                        <div>
                            <label>Contraseña:</label>
                            <input class="input is-primary is-rounded" type="text" name="password"
                                placeholder="Contraseña" minlength="4" maxlength="45">
                        </div>
                        <br>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <button class="button is-primary is-rounded">
                                    Guardar
                            </p>
                            <p class="control">
                                <button href="{{ route('usuario.index') }}" class="button is-light is-rounded"
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
