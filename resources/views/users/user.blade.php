@extends('layout')

@section('header')

    <h1 class="title">Make {{$user['name']}}'s day, say something nice</h1>

@endsection

@section('content')

    <div class="container main-container">

        <div class="compliment-form-container list-group-item">

            <form method="POST" action="/compliments/create">

                {{csrf_field()}}

                <a class="d-flex compliment-user-info" href="/users/{{$user['id']}}">
                    <img src="{{$user['avatar']}}" alt="" class="rounded-circle user-image user-image-compliment">
                    <p class="user-name">{{$user['name']}}</p>
                </a>

                <div class="form-group">
                    <label for="exampleTextarea">Write
                        @if($user['gender'] == 'female')
                            her
                        @else
                            him
                        @endif
                            a compliment</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="compliment"></textarea>
                </div>

                <input type="hidden" value="{{$user['id']}}" name="receiver">

                <button type="submit" class="btn btn-primary btn-social compliment-button">Give compliment</button>

            </form>

        </div>

        <div class="list-group">

            @foreach($compliments as $compliment)

                <div class="list-group-item compliment-card">

                    <div class="d-flex justify-content-between">
                        <a class="d-flex compliment-user-info" href="/users/{{$compliment->sentBy->id}}">
                            <img src="{{$compliment->sentBy->avatar}}" alt="" class="rounded-circle user-image user-image-compliment">
                            <p class="user-name">{{$compliment->sentBy->name}}</p>
                        </a>
                        <p class="date">{{$compliment->created_at->diffForHumans()}}</p>
                    </div>

                    <p>{{$compliment['body']}}</p>

                </div>

            @endforeach

        </div>

    </div>

@endsection