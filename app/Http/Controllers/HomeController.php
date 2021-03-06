<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
class HomeController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $chefs = Chefs::all();
        return view('home', compact('foods', 'chefs'));
    }

    public function redirects()
    {
        $foods = Food::all();
        $chefs = Chefs::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.dashboard');
        } else {
            return view('home', compact('foods', 'chefs'));
        }
    }
}
