@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Comentarios y Calificaciones</h2>

    @if($feedbacks->count())
        @foreach ($feedbacks as $feedback)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Evento: {{ $feedback->event->name ?? 'Evento no disponible' }}
                    </h5>
                    <p class="card-text">
                        "{{ $feedback->comment }}"
                    </p>
                    <p class="card-text">
                        Calificación:
                        @for ($i = 1; $i <= 5; $i++)
                            @if($i <= $feedback->rating)
                                ⭐
                            @else
                                ☆
                            @endif
                        @endfor
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Por {{ $feedback->user->name ?? 'Anónimo' }} - {{ $feedback->created_at->diffForHumans() }}</small>
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay comentarios aún.</p>
    @endif
</div>
@endsection