<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planta;
use App\Bioma;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $qtd = [
            'plantas' => Planta::count(),
            'biomas' => Bioma::count()
        ];
        return view('home', compact('qtd'));
    }
}
