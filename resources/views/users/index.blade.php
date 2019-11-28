@extends('home')

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
<section class="hero is-info">
    <div class="container">
        <div class="container is-fullwidth">
            <h1 class="title has-text-centered">
                Sirgvent Tu Mejór Opción Para Registro de Clientes y Gestión de Ventas !!
            </h1>
        </div>
    </div>
</section>
<hr>
<section class="hero is-medium">
    <div class="container is-widescreen">
        <br><br><br>
        <div class="columns">
            <div class="column">
                <h4 class="title is-4 has-text-centered">Lista Usuarios</h4>
                <div class="column">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo Electronico</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <br>
                                {{-- <td><a class="button is-info is-rounded"
                                        href="{{ route('usuario.show', $users->id) }}">Detalle</a></td>
                                <td>
                                 <form method="post" action="{{ route('usuario.destroy', $users->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input class="button is-danger is-rounded" type="submit" value="Borrar">
                                    </form>
                                </td>
                            </tr> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
</section>
@endsection
