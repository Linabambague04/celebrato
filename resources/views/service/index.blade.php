@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <a href="{{ route('category.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event['id'] }}</td>
                        <td>{{ $event['name'] }}</td>
                        <td>{{ $event['email'] }}</td>
                        <td>{{ $event['password'] }}</td>
                        <td>{{ $event['role'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection