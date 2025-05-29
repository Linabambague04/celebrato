@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Notificaciones</h2>

    @if($notifications->count())
        <ul class="list-group">
            @foreach ($notifications as $notification)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $notification->title }}</div>
                        {{ $notification->message }}
                        <div class="text-muted"><small>{{ $notification->created_at->diffForHumans() }}</small></div>
                    </div>
                    @if(!$notification->read)
                        <span class="badge bg-primary rounded-pill">Nuevo</span>
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>No tienes notificaciones.</p>
    @endif
</div>
@endsection