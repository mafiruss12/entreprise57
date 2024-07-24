@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Conversations</h1>
    <ul>
        @foreach($conversations as $conversation)
            <li>
                <a href="{{ route('conversations.show', $conversation) }}">
                    Conversation with {{ $conversation->receiver->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
