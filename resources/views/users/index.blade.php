@extends('layout')

@section('header')

    <h1 class="title">Find someone to give a compliment to</h1>

    <form action="">
        <div class="input-group">
            <input type="text" class="form-control search-bar" placeholder="Search for users">
            <span class="input-group-btn">
                <button class="btn btn-secondary search-button" type="button"><span class="fa fa-search"></span></button>
            </span>
        </div>
    </form>

@endsection

@section('content')

    <div class="container main-container">

        <table class="table">
            <tbody>

            @foreach($users as $user)

                <tr>
                    <td id="user-image-cell"><img class="rounded-circle user-image" src="{{$user['avatar']}}" alt=""></td>
                    <td><p class="user-name">{{$user['name']}}</p></td>
                    <td id="compliment-button-cell"><a href="/users/{{$user['id']}}" class="btn btn-primary btn-social compliment-button">compliment</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>

    </div>

@endsection