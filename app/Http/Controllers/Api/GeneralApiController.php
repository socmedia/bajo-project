<?php

namespace App\Http\Controllers\Api;

use App\Statics\Programs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GeneralApiController extends Controller
{
    use Programs;

    public function analitycs()
    {
        $res = Http::get('https://www.googletagmanager.com/gtag/js?id=UA-178737039-1');
        return $res;
    }

    public function programs()
    {
        return response()->json($this->getAll());
    }

    public function showProgram($id)
    {
        return response()->json($this->getAll()[$id]);
    }
}