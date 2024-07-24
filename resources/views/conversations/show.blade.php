@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Conversation</h1>

    <ul>
        @foreach($conversation->messages as $message)
            <li>
                <strong>{{ $message->user->name }}:</strong> {{ $message->content }}
            </li>
        @endforeach
    </ul>

    <form action="{{ route('messages.store', $conversation) }}" method="POST">
        @csrf
        <textarea name="content" rows="3"></textarea>
        <button type="submit">Send</button>
    </form>
</div>
@endsection
