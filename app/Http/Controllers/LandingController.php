<?php

namespace App\Http\Controllers;

use App\Statics\Programs;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    use Programs;

    public function index()
    {
        $programs = collect($this->getAll());
        return view('pages.index', compact('programs'));
    }
}