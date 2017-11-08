<?php

namespace App\Http\Controllers;

use App\Compliment;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::all()->where('id', '!=', auth()->user()->id);

        return view('users/index', compact('users'));
    }

    public function show(User $user){

        $compliments = Compliment::all()->where('receiver', $user['id']);

        return view('users/user', compact('user', 'compliments'));

    }
}
