@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
               
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Lugar</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event['id'] }}</td>
                        <td>{{ $event['title'] }}</td>
                        <td>{{ $event['description'] }}</td>
                        <td>{{ $event['day'] }}</td>
                        <td>{{ $event['hour'] }}</td>
                        <td>{{ $event['place'] }}</td>
                        <td>{{ $event['state'] }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection