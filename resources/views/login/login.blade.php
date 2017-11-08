@extends('layout')

@section('content')

    <div class="container card-container">
        <div class="card" >
            <div class="card-header">
                <img src="img/logo.png" alt="" class="card-img-top">
            </div>
            <div class="card-body">
                <h3>Welcome to Kudos</h3>
                <p>Start making other people's day by clicking the sign in button</p>
                <a href="login/facebook" class="btn btn-primary ">
                    <span class="fa fa-facebook"></span><span class="button-text">Sign in with Facebook</span>
                </a>
            </div>
        </div>
    </div>
@endsection