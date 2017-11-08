<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Compliment;

class ComplimentsController extends Controller
{
    public function received()
    {

        $compliments = Compliment::where('receiver', auth()->user()->id)->get();

        return view('compliments/received', compact('compliments'));

    }

    public function given()
    {
        $compliments = Compliment::where('sender', auth()->user()->id)->get();

        return view('compliments/given', compact('compliments'));

    }

    public function index()
    {
        //$currentTime = Carbon::now()->format('H');
        $newComplimentsCount = count(Compliment::all()
            ->where('receiver', auth()->user()->id)
            ->where('seen', 0));

        return view('home/index', compact('newComplimentsCount'));
    }

    public function create()
    {
        $compliment = new Compliment();

        $compliment->sender = auth()->user()->id;
        $compliment->receiver = request('receiver');
        $compliment->body = request('compliment');

        $compliment->save();

        return redirect('/users/' . request('receiver'));
    }
}
