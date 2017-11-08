<?php

namespace App\Http\ViewComposers;

use App\Compliment;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with('authUser', Auth::user());
    }
}