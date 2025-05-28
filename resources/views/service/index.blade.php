@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service['id'] }}</td>
                        <td>{{ $service['name'] }}</td>
                        <td>{{ $service['email'] }}</td>
                        <td>{{ $service['password'] }}</td>
                        <td>{{ $service['role'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection