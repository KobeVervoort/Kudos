@extends('layout')

@section('header')

    <h1 class="title">
        Welcome {{$authUser['name']}}, you have {{$newComplimentsCount}} new compliments
    </h1>

@endsection

@section('content')

    <div class="container main-container">

        <div class="container cards-container">

            <div class="card basic-card">
                <div class="card-header">
                    <img src="img/give.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3>Say something nice</h3>
                    <p>Find another user and give them a compliment</p>
                    <a href="/users" class="btn btn-primary btn-social">
                        Give a compliment
                    </a>
                </div>
            </div>

            <div class="card basic-card">
                <div class="card-header">
                    <img src="img/receive.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3>Who gave you a kudos</h3>
                    <p>Look who gave you a compliment and feel warm inside</p>
                    <a href="compliments/received" class="btn btn-primary btn-social">
                        Receive compliments
                    </a>
                </div>
            </div>

            <div class="card basic-card">
                <div class="card-header">
                    <img src="img/reminisce.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3>Remember what you said to them</h3>
                    <p>Giving compliments feels good, so we keep up for you if you go on a roll</p>
                    <a href="compliments/given" class="btn btn-primary btn-social">
                        Reminisce about compliments given
                    </a>
                </div>
            </div>

        </div>

    </div>

@endsection