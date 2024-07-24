@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* Inclure votre style CSS ici */
</style>

<div class="container app">
    <div class="row app-one">
        <div class="col-sm-4 side">
            <div class="side-one">
                <div class="row heading">
                    <div class="col-sm-3 col-xs-3 heading-avatar">
                        <div class="heading-avatar-icon">
                            <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('images/default-avatar.jpg') }}">
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-1 heading-dot pull-right">
                        <i class="fa fa-ellipsis-v fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-2 col-xs-2 heading-compose pull-right">
                        <i class="fa fa-comments fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row searchBox">
                    <div class="col-sm-12 searchBox-inner">
                        <div class="form-group has-feedback">
                            <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                </div>

                <div class="row sideBar">
                    @foreach($chats as $chat)
                        @php
                            $otherUser = $chat->client_id === auth()->id() ? $chat->prestataire : $chat->client;
                        @endphp
                        <div class="row sideBar-body">
                            <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                <div class="avatar-icon" data-id="{{ $otherUser->id }}">
                                    <img src="{{ $otherUser->photo ? asset('storage/' . $otherUser->photo) : asset('images/default-avatar.jpg') }}" class="rounded-circle" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-9 sideBar-main">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-8 sideBar-name">
                                        <span class="name-meta">{{ $otherUser->name }}</span>
                                    </div>
                                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                        <span class="time-meta pull-right">{{ $chat->updated_at->format('H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-sm-8 conversation">
            <div class="row heading">
                <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
                    <div class="heading-avatar-icon">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                    </div>
                </div>
                <div class="col-sm-8 col-xs-7 heading-name">
                    <a class="heading-name-meta">Nom de l'utilisateur</a>
                    <span class="heading-online">Online</span>
                </div>
                <div class="col-sm-1 col-xs-1 heading-dot pull-right">
                    <i class="fa fa-ellipsis-v fa-2x pull-right" aria-hidden="true"></i>
                </div>
            </div>

            <div class="row message" id="conversation">
                <div class="row message-previous">
                    <div class="col-sm-12 previous">
                        <a onclick="previous(this)" id="ankitjain28" name="20">
                            Show Previous Message!
                        </a>
                    </div>
                </div>

                <div class="row message-body">
                    <div class="col-sm-12 message-main-receiver">
                        <div class="receiver">
                            <div class="message-text">Hi, what are you doing?!</div>
                            <span class="message-time pull-right">Sun</span>
                        </div>
                    </div>
                </div>

                <div class="row message-body">
                    <div class="col-sm-12 message-main-sender">
                        <div class="sender">
                            <div class="message-text">I am doing nothing man!</div>
                            <span class="message-time pull-right">Sun</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row reply">
                <div class="col-sm-1 col-xs-1 reply-emojis">
                    <i class="fa fa-smile-o fa-2x"></i>
                </div>
                <div class="col-sm-9 col-xs-9 reply-main">
                    <textarea class="form-control" rows="1" id="comment"></textarea>
                </div>
                <div class="col-sm-1 col-xs-1 reply-recording">
                    <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col-sm-1 col-xs-1 reply-send">
                    <i class="fa fa-send fa-2x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
