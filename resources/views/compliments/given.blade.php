@extends('layout')

@section('header')

    <h1 class="title">You have given {{count($compliments)}}
        @if(count($compliments) == 1)
        compliment, and here it is

        @else
        compliments, and here they are

        @endif
    </h1>

@endsection

@section('content')

    <div class="container main-container">

        <div class="list-group">

            @foreach($compliments as $compliment)

                <div class="list-group-item compliment-card">

                    <div class="d-flex justify-content-between">
                        <a class="d-flex compliment-user-info" href="/users/{{$compliment->receivedByWhom->id}}">
                            <img src="{{$compliment->receivedByWhom->avatar}}" alt="" class="rounded-circle user-image user-image-compliment">
                            <p class="user-name">To: {{$compliment->receivedByWhom->name}}</p>
                        </a>
                        <p class="date">{{$compliment->created_at->diffForHumans()}}</p>
                    </div>

                    <p>{{$compliment['body']}}</p>

                </div>

            @endforeach

        </div>

    </div>

@endsection